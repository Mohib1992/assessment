<?php


class Project extends Eloquent {
 protected $fillable = array();

 private $rules = array();

 public function validate($data){

 $validate = Validator::make($data,$rules);

 return $validate->passes();

 } 
}
?>