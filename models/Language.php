<?php


class Language extends Eloquent {

    protected $fillable = array('id','code');
    protected $table = 'language';

    private $rules = array();

    public function translation()
    {
        return $this->hasMany('Translation');
    }

    /**
     * @param $query
     * @return id of english language
     */
    public function scopeEnglish($query)
    {
        return $query->where('code','eng')->first()->id;
    }

    /**
     * @param $query
     * @return id of german language
     */
    public function scopeGerman($query)
    {
        if(!empty($query->where('code','ger')->first()->id))
            return $query->where('code','ger')->first()->id;
        else return '';
    }

    public function scopeDetectLanguage($query)
    {
        return $query->where('code',App::getLocale())->first()->id;
    }
}
?>