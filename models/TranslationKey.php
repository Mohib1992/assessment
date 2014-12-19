<?php


class TranslationKey extends Eloquent {

    protected $fillable = array('id','key');
    protected $table = 'translation_key';

    public $code;

    private $rules = array();

    /**
     * Generate new key and store into TranslationKey table
     */
    public function generateNewKey()
    {
        $this->code = rand();
        $this->save();
    }

    /**
     * @return perticuller key
     */
    public function getKey()
    {
        return $this->code;
    }
}
?>