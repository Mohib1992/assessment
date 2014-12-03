<?php


class Page extends Eloquent
{
	protected $fillable = array('page_title_id','page_content_id','image','video','status');

	private $rules = array();

	public function validate($data)
	{

		$validate = Validator::make($data,$rules);

		return $validate->passes();

	}

    // this will return the title into english
    public function getPageTitleEnglish()
    {
        $id = Language::where('code','eng')->first()->id;
        $tra = Translation::where('translation_key_id', $this->page_title_id)
                    ->where('language_id', $id)
                        ->first(array('content'));
        return $tra['content'];
    }


    // this will return the title into german
    public function getPageTitleGerman()
    {
        $id = Language::where('code','ger')->first()->id;
        return Translation::where('translation_key_id', $this->page_title_id)
            ->where('language_id', $id)->first()->content;
    }


     // this will return the content into english
    public function getPageContentEnglish()
    {
        $id = Language::where('code','eng')->first()->id;
        return Translation::where('translation_key_id', $this->page_content_id)
            ->where('language_id', $id)->first()->content;
    }


    // this will return the content into german
    public function getPageContentGerman()
    {
        $id = Language::where('code','ger')->first()->id;
        try {
            $content = Translation::where('translation_key_id', $this->page_content_id)
                ->where('language_id', $id)->first()->content;
        }catch (Exception $e){

            $content = '';
        }

        return $content;
    }
    
    
    // auto translate the title
    public function autoTitleTranslation()
    {
        $id = Language::where('code',App::getLocale())->first()->id;
        try {
            $content = Translation::where('translation_key_id', $this->page_title_id)
                ->where('language_id', $id)->first()->content;
        }catch (Exception $e){

            $id = Language::where('code','eng')->first()->id;
            $content = Translation::where('translation_key_id', $this->page_title_id)
                ->where('language_id', $id)->first()->content;
        }

        return $content;
    }

    // auto translater the content
    public function autoContentTranslation()
    {
        $id = Language::where('code',App::getLocale())->first()->id;
        try {
            $content = Translation::where('translation_key_id', $this->page_content_id)
                ->where('language_id', $id)->first()->content;
            }catch (Exception $e){

            $id = Language::where('code','eng')->first()->id;
            $content = Translation::where('translation_key_id', $this->page_content_id)
                ->where('language_id', $id)->first()->content;
        }

        return $content;
    }



	
}
?>