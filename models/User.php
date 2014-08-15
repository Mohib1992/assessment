<?php

class User extends Eloquent
{
	protected $fillable = array('name','link','picture_link','role');
	protected $table = 'user';

	public function post()
	{
		return $this->hasMany('post');
	}
}

?>