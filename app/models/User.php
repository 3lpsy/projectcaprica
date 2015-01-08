<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

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
	protected $fillable = array('username', 'password', 'is_admin', 'email', 'vendor_id');

	protected $hidden = array('password', 'remember_token');

	public static $rules = array(
		'username'=> 'required|min:2|alpha',
		'email'=> 'required|min:2|unique:users',
		'password'=> 'required|min:6|alpha_num | confirmed',
		'password_confirmation'=> 'required|min:6|alpha_num',
		'is_admin'=> 'integer'

		);

	public function product() {
        return $this->hasMany('Product');
    }

}
