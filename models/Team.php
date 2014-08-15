<?php

class Team extends Eloquent  {
	
	protected $fillable = array('name','description');
	
	protected $table = 'team';
	
	public function employee()
	{
		return $this->hasMany('employee');
	}
	
}

?>