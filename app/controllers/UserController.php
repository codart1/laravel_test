<?php

class UserController extends BaseController {

	public function Auth()
	{
		$email = Input::get('email', '');
		$password = Input::get('password', '');

		$credential = ['email' => $email, 'password' => $password];
		$isValid = Auth::attempt($credential);

		$data = ['email' => $email, 'password' => $password, 'isValid' => $isValid];

		return View::make('pages.login_result', $data);
	}

	public function Logout() {
		Auth::logout();
		return Redirect::to('/check_auth');
	}

	public function getAll() {
		$users = User::role('admin')->get();
		$respon = '';

		foreach($users as $user) {
			$respon .= $user->email . ', ';
		}
		return $respon;
	}

}
