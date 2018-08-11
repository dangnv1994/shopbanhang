<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
// use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Admin extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	// use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admins';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	protected $fillable = array('email', 'password', 'id', 'username');
    protected $dates = ['deleted_at'];

    public static function isAdmin()
    {
    	if(Auth::admin()->get()->id == ADMIN){
			return true;
		}
		else{
			return false;
		}
    }
    public static function isEditor()
    {
    	if(Auth::admin()->get()->id == EDITOR){
			return true;
		}
		else{
			return false;
		}
    }
    public static function isSeo()
    {
    	if(Auth::admin()->get()->id == SEO){
			return true;
		}
		else{
			return false;
		}
    }
}
