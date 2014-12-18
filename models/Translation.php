<?php


/**
 * @property mixed language_id
 */
class Translation extends Eloquent {

    protected $fillable = array('translation_key_id','content','language_id');
    protected $table = 'translation';

    private $rules = array();

    public function language()
    {
        return $this->belongsTo('Language');
    }

    /**
     * @param $query
     * @param $key ( translation_key_id )
     * @param $language ( language of the content )
     * @return translation object
     */
    public function scopeGetTranslation($query, $key, $language)
    {
        return $query->where('translation_key_id',$key)
                ->where('language_id',$language)
                ->first();
    }
}
?>