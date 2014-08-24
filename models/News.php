<?php

class News extends Eloquent
{

	public $table = 'news';
	//	public static $accessable = array('title','description','image','status','publication_date');

	public $rules = array(
		'title'=> 'required',
		'description'=>'required',
		'cover_image'=> 'required',
		'status' => 'required'	
	);

	public static function validate($data,$r = null)
	{
		if($r == NULL) :
		$validate = Validator::make($data,$rules);
		else :
		$validate = Validator::make($data,$r);
		endif;

		return $validate->passes();

	}

}
