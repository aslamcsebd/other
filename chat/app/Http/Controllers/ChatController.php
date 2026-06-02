<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
	public function index()
	{
		$authUserId = Auth::id();
		$users = User::where('id', '!=', $authUserId)
			->select('users.*')
			->selectRaw('(SELECT sender_id FROM messages 
				WHERE (sender_id = users.id OR receiver_id = users.id) 
				AND (sender_id = ? OR receiver_id = ?) 
				ORDER BY created_at DESC LIMIT 1) as last_sender_id', [$authUserId, $authUserId])

			->selectRaw('(SELECT created_at FROM messages 
				WHERE (sender_id = users.id OR receiver_id = users.id) 
				AND (sender_id = ? OR receiver_id = ?) 
				ORDER BY created_at DESC LIMIT 1) as last_time', [$authUserId, $authUserId])

			->selectRaw('(SELECT content FROM messages 
				WHERE (sender_id = users.id OR receiver_id = users.id) 
				AND (sender_id = ? OR receiver_id = ?) 
				ORDER BY created_at DESC LIMIT 1) as last_message', [$authUserId, $authUserId])
			->get()
			->map(function ($user) {
				$user->last_time = $user->last_time ? \Carbon\Carbon::parse($user->last_time) : null;
				return $user;
			});

		// Fetch the last chatted user
		$lastChatUser = Message::where('sender_id', $authUserId)
			->orWhere('receiver_id', $authUserId)
			->orderBy('created_at', 'desc')
			->first();

		$lastUser = null;
		if ($lastChatUser) {
			$lastUserId = $lastChatUser->sender_id == $authUserId ? $lastChatUser->receiver_id : $lastChatUser->sender_id;
			$lastUser = User::find($lastUserId);
		}

		return view('pages.pages.chat', compact('users', 'lastUser'));
	}

	public function fetchUsers($userId)
	{
		$user = User::where('id', $userId)->first();
		return response()->json($user);
	}

	public function sendMessage(Request $request)
	{
		$request->validate([
			'receiver_id' => 'required|exists:users,id',
			'content' => 'required|string'
		]);

		// Create new message
		$message = Message::create([
			'sender_id' => Auth::id(),
			'receiver_id' => $request->receiver_id,
			'content' => $request->content,
		]);

		return response()->json(['success' => true, 'message' => 'Message sent successfully']);
	}

	public function fetchMessages($userId)
	{
		$authUserId = Auth::id();
		$messages = Message::where(function ($query) use ($userId, $authUserId) {
			$query->where('sender_id', $authUserId)
				->where('receiver_id', $userId);
		})->orWhere(function ($query) use ($userId, $authUserId) {
			$query->where('sender_id', $userId)
				->where('receiver_id', $authUserId);
		})
		->orderBy('created_at', 'asc')
		->get()
		->map(function ($message) use ($authUserId) {
			return [
				'id' => $message->id,
				'sender_id' => $message->sender_id,
				'receiver_id' => $message->receiver_id,
				'content' => $message->content,
				'time' => $message->created_at->format('g:i a'),
				'date' => $message->created_at->format('Y-m-d'),
				'sender' => $message->sender_id == $authUserId ? 'self' : 'other',
			];
		});

		if ($messages->isEmpty()) {
			return response()->json(['html' => '']);
		}

		$receiver = User::find($userId);
		$html = view('pages.pages.message', compact('messages', 'receiver'))->render();

		return response()->json(['html' => $html]);
	}

	public function searchUser(Request $request)
    {
        $search = $request->get('name');
		
        $customers = User::where(function($query) use ($search) {
			$query->where('name', 'LIKE', '%' . $search . '%')
				  ->orWhere('email', 'LIKE', '%' . $search . '%');
				//   ->orWhere('phone', 'LIKE', '%' . $search . '%');
		})
		->get(['id', 'name', 'email']);
	
        return response()->json($customers);
    }
}
