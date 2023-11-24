<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function register(UserCreateRequest $request)
	{
		$credentials = $request->only(['email', 'password']);
		if (!Auth::attempt($credentials)) {
			$user = new User();
			$user->name = $request->input('name');
			$user->email = $request->input('email');
			$user->password = Hash::make($request->input('password'));
			$user->save();
		}
		
		if (Auth::attempt($credentials)) {
			$user = Auth::user();
			$adminToken = $user->createToken('admin-token', ['create', 'update', 'delete']);
			$updateToken = $user->createToken('update-token', ['create', 'update']);
			$basicToken = $user->createToken('basic-token');
			return [
				'admin' => $adminToken->plainTextToken,
				'update' => $updateToken->plainTextToken,
				'basic' => $basicToken->plainTextToken,
			];
		}
	}
}
