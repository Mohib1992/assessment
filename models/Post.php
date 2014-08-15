<?php
class Post extends Eloquent
{

	protected $fillable = array('title','description','tages','status');
	protected $table = 'post';

	public function user()
	{
		return $this->belongsTo('user');
	}

	public function comment()
	{
		return $this->hasMany('command');
	}
}
?>