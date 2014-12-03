<?php

class Employee extends Eloquent
{

    protected $fillable = array('name', 'description', 'image');

    protected $table = 'employee';

    public function team()
    {
        return $this->belongsTo('team');
    }

    // return content in all language

    public function getAllContent()
    {
        $translations = Translation::where('translation_key_id','=', $this->employee_description_id)->get();
        return $translations;
    }


    // this will return the content into english
    public function getContentEnglish()
    {
        $id = Language::where('code','eng')->first()->id;
        $content = Translation::where('translation_key_id', $this->employee_description_id)
                ->where('language_id',$id)->first();
        return $content['content'];
    }


    // this will return the content into german
    public function getContentGerman()
    {
        $id = Language::where('code','ger')->first()->id;
        try {
            $content = Translation::where('translation_key_id', $this->employee_description_id)
                ->where('language_id', $id)->first()->content;
        }catch (Exception $e){

            $content = 'No Translation found';
        }

        return $content;
    }

    // auto translater the content
    public function autoContentTranslation()
    {
        $id = Language::where('code',App::getLocale())->first()->id;
        try {
            $content = Translation::where('translation_key_id', $this->empployee_description_id)
                ->where('language_id', $id)->first()->content;
        }catch (Exception $e){
            $id = Language::where('code','eng')->first()->id;
            $content = Translation::where('translation_key_id', $this->employee_description_id)
                ->where('language_id', $id)->first()->content;
        }

        return $content;
    }
}
?>