<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
	use AuthenticatesUsers;

	protected $redirectTo = '/home';

	public function __construct()
	{
		$this->middleware('guest')->except('logout');
		$this->middleware('auth')->only('logout');
	}

	public function showLoginForm()
	{
		$data['users'] = User::all();
		return view('auth.login', $data);
	}

	public function login(Request $request)
	{
		$request->validate([
			'email' => 'required|email',
			'password' => 'required',
		]);

		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
			// branch switch
				$user = Auth::user();
				$defaultBranch = $user->company->branches()->first();

				session([
					'company_id' => $user->company_id,
					'branch_id' => $defaultBranch->id ?? null
				]);
			// branch switch
			
			return redirect('/');
		}
		return back()->withErrors(['email' => 'These credentials do not match our records.'])->withInput();
	}
}
