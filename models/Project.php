<?php


class Project extends Eloquent
{
	protected $fillable = array('project_title','description','cover_image','status');	
	private $rules = array();
	
	protected $table = 'project';


	public function validate($data)
	{

		$validate = Validator::make($data,$rules);

		return $validate->passes();

	}
}
?>