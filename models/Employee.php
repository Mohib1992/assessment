<?php

class Employee extends Eloquent
{

	protected $fillable = array('name','description','image');

	protected $table = 'employee';

	public function team()
	{
		return	$this->belongsTo('team');
	}
}
?>