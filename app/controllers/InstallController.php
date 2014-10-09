<?php

class InstallController extends BaseController {

	public function DefaultDB()
	{
		Schema::dropIfExists('user');
		Schema::create('user', function($table)
		{
		    $table->increments('id');
		    $table->string('email', 100)->unique();
		    $table->string('password', 64);
		    $table->string('role', 50);
		    $table->rememberToken();
		});

		//sample data:
		$user = new User;
		$user->email = 'domanhcp@gmail.com';
		$user->password = Hash::make('123456');
		$user->role = 'admin';
		$user->save();

		$user = new User;
		$user->email = 'ohyeah@gmail.com';
		$user->password = Hash::make('123456');
		$user->role = 'installer';
		$user->save();

		return "database installed!";
	}

}
