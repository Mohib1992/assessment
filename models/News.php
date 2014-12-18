<?php

class News extends Eloquent
{

	public $table = 'news';
	//	public static $accessable = array('title','description','image','status','publication_date');

    public function autoDescriptionTranslation()
    {
        $id = Language::where('code',App::getLocale())->first()->id;
        echo $id;
        try {
            $content = Translation::where('translation_key_id', $this->descripiton_id)
                ->where('language_id', $id)->first()->content;
        }catch (Exception $e){

            $content = 'No Translation found';
            /*
            $id = Language::where('code','eng')->first()->id;
            $content = Translation::where('translation_key_id', $this->description_id)
                ->where('language_id', $id)->first()->content;
            */
        }

        return $content;
    }

    public function autoTitleTranslation()
    {
        $id = Language::where('code',App::getLocale())->first()->id;
        echo $id;
        try {
            $content = Translation::where('translation_key_id', $this->title_id)
                    ->first();
        }catch (Exception $e){

            $content = 'No Translation found';
            /*
            $id = Language::where('code','eng')->first()->id;
            $content = Translation::where('translation_key_id', $this->title_id)
                ->where('language_id', $id)->first();
            */
        }

        return $content;
    }


}
