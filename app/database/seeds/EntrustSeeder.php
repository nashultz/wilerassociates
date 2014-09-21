<?php

class EntrustSeeder extends Seeder {

	public function run()
	{
		DB::table('roles')->delete();
		DB::table('permissions')->delete();

		// Roles
			$sysAdmin = new Role;
			$sysAdmin->name = 'System Administrator';
			$sysAdmin->save();

			$admin = new Role;
			$admin->name = 'Administrator';
			$admin->save();

			$user = new Role;
			$user->name = 'User';
			$user->save();

		// Users
			DB::table('users')->delete();

			$roman = User::create(
				[ 
					'username'	=>	'roman',
					'password'	=>	'roman',
					'email'		=>	'RomanL@systemsedgeonline.com',
					'protected'	=>	true
				]
			);

			$nathon = User::create(
				[ 
					'username'	=>	'nathon',
					'password'	=>	'nathon',
					'email'		=>	'NathonS@systemsedgeonline.com',
					'protected'	=>	true
				]
			);	

			$paul = User::create(
				[
					'username'	=>	'paul',
					'password'	=>	'paul',
					'email'		=>	'Paul@somewhere.com',
					'protected'	=>	true			
				]
			);				

		// User CRUD Permissions
			$listUsers = Permission::create( [ 'name' => 'list_users', 'display_name' => 'List Users' ] );
			$createUser = Permission::create( [ 'name' => 'create_user', 'display_name' => 'Create User' ] );
			$readUser = Permission::create( [ 'name' => 'read_user', 'display_name' => 'View/Read User' ] );
			$updateUser = Permission::create( [ 'name' => 'update_user', 'display_name' => 'Update User' ] );
			$deleteUser = Permission::create( [ 'name' => 'delete_user', 'display_name' => 'Delete User' ] );
			$resetUser  = Permission::create( [ 'name' => 'reset_user', 'display_name' => 'Reset User Password' ] );

		// Assign Permissions to Each Role
			$sysAdmin->perms()->sync( [ 
				$listUsers->id, $createUser->id, $updateUser->id, 
				$deleteUser->id, $resetUser->id, $readUser->id ] );

			$admin->perms()->sync( [ $listUsers->id, $createUser->id, $updateUser->id, $deleteUser->id, $resetUser->id, $readUser->id ] );
			$user->perms()->sync( [ $listUsers->id, $createUser->id ] );

		// Assign Roles to Users
			$roman->attachRole($sysAdmin);
			$nathon->attachRole($admin);
			$paul->attachRole($user);
	}

}