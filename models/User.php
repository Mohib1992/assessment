<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{
	protected $fillable = array('email','password','role');
	protected $table = 'user';
	
	private $rules = array(
		'email' => 'required|email',
		'password' => 'required|min:5'
	);

	public function post()
	{
		return $this->hasMany('post');
	}
	
	public function validate($data)
	{

		$validate = Validator::make($data,$rules);

		return $validate->passes();

	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		// TODO: Implement getAuthIdentifier() method.
		return $this->getkey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		// TODO: Implement getAuthPassword() method.
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		// TODO: Implement getRememberToken() method.
		return $this->role;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		// TODO: Implement setRememberToken() method.
		$this->role = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		// TODO: Implement getRememberTokenName() method.
		return 'role';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		// TODO: Implement getReminderEmail() method.
		return $this->email;
	}
}

?>