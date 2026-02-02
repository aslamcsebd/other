<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
	public function handle(Request $request, Closure $next, $userType): Response
	{
		$typeArray = explode('|', $userType);
		if (Auth::check() && in_array(auth()->user()->role, $typeArray)) {
			return $next($request);
		}
		return response()->view('404');
	}
}
