<?php namespace DawWiki\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Support\Facades\Hash;
use Eloquent;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['username', 'email', 'password', 'role'];
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
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute ($password) {
		$this->attributes['password'] = Hash::make($password);
	}

	public function hasRole($role)
	{
		return ($this->role == $role);
	}

	public function favoritedReddits()
	{
		return $this->hasMany('DawWiki\Reddits\FavoritedReddit');
	}
}
