<?php


class TranslationKey extends Eloquent {

    protected $fillable = array('id','key');
    protected $table = 'translation_key';

    private $rules = array();

    public function generateNewKey()
    {
        $this->code = rand();
        $this->save();
    }

    public function getKey()
    {
        return $this->code;
    }
}
?>