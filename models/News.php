<?php

class News extends Eloquent{
	
	public $table = 'newses';
	public static $accessable = array('title','description','image','status','publication_date');
	
}
