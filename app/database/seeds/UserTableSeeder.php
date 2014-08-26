<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(
			[ 
				'username'	=>	'roman',
				'password'	=>	'roman',
				'email'		=>	'RomanL@systemsedgeonline.com',
				'protected'	=>	true
			]
		);

		User::create(
			[ 
				'username'	=>	'nathon',
				'password'	=>	'nathon',
				'email'		=>	'NathonS@systemsedgeonline.com',
				'protected'	=>	true
			]
		);	

		User::create(
			[
				'username'	=>	'paul',
				'password'	=>	'paul',
				'email'		=>	'Paul@somewhere.com',
				'protected'	=>	true			
			]
		);	
	}

}