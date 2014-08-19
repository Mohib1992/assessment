<?php

class User extends Eloquent
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
}

?>