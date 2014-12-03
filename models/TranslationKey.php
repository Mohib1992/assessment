<?php


class TranslationKey extends Eloquent {

    protected $fillable = array('id','key');
    protected $table = 'translation_key';

    private $rules = array();
}
?>