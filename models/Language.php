<?php


class Language extends Eloquent {

    protected $fillable = array('id','code');
    protected $table = 'language';

    private $rules = array();

    public function translation()
    {
        return $this->hasMany('Translation');
    }
}
?>