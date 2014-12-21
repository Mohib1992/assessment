<?php


/**
 * @property mixed language_id
 */
class Translation extends Eloquent {

    protected $fillable = array('translation_key_id','content','language_id');
    protected $table = 'translation';

    private $rules = array();
    private $log;

    function __construct()
    {
        $this->log = new LogController('Translation','translation.log');
    }


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
    public function scopeGetTranslation($query, $key, $language = null)
    {
        if(empty($language)) $language = Language::detectLanguage();

        $this->log->printLog('Start Stack');

        $query = $query->where('translation_key_id',$key)
            ->where('language_id',$language)
            ->first();
        $this->log->printLog($query);

        if (empty($query)) {

            $query = new Translation();
            $query->content = '';
            $this->log->printLog($query);
            $this->log->printLog('End Stack');
        }

        return $query;
    }
}
?>