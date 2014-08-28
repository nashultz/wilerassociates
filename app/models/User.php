<?php

// More to Come Here for Table Attachments (Since it's attached to ALL tables...)

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [ 'password', 'remember_token' ];

	protected $guarded = [ 'id' ];

	protected $fillable = [ 'username', 'password', 'email', 'protected', 'created_at', 'updated_at', 'created_by', 'updated_by', 'last_login', 'remember_token' ];

	public static function boot()
	{
		parent::boot();

		User::creating(function($user) {

			$user->password = Hash::make($user->password);

		});
	}

}
