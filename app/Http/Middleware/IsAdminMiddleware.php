<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdminMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$user = Auth::user();

		if ($user) {
			if (User::find($user->id)->role->name === 'administrator') {
				return $next($request);
			} else {
				return redirect('/home', 303);
			}
		} else {
			return redirect('/home', 303);
		}


	}
}
