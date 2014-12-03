<?php


class Translation extends Eloquent {

    protected $fillable = array();
    protected $table = 'translation';

    private $rules = array();

    public function language()
    {
        return $this->belongsTo('Language');
    }
}
?>