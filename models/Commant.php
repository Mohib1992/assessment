<?php

class Comment extends Eloquent
{

	protected $fillable = array('title','content','author_name','email','status');
	protected $table = 'commant';

	public function post()
	{
		return $this->belongsTo('post');
	}
}

?>