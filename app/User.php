<?php namespace Wiler;

use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Contracts\Auth\User as UserContract;
use Illuminate\Contracts\Auth\Remindable as RemindableContract;
use Illuminate\Support\Facades\Hash;

class User extends Model implements UserContract, RemindableContract {

	use UserTrait, RemindableTrait;

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
	protected $hidden = ['password', 'remember_token'];

  protected $guarded = [ 'id' ];

  protected $filterable = [ 'id', 'username', 'email', 'created_at', 'updated_at', 'last_login' ];

  protected $fillable = [ 'username', 'password', 'email', 'protected', 'created_at', 'updated_at', 'created_by', 'updated_by', 'last_login', 'remember_token' ];

  public static function boot()
  {
    parent::boot();

    User::creating(function($user) {

      $user->password = Hash::make($user->password);

    });
  }

  public function getFilterable()
  {
    return $this->filterable;
  }

}
