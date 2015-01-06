<?php


class TranslationKey extends Eloquent {

    protected $fillable = array('id','code');
    protected $table = 'translation_key';

    public $code;

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