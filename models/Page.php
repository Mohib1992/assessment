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
        return Translation::getTranslation($this->page_title_id, Language::english())->content;
    }


    // this will return the title into german
    public function getPageTitleGerman()
    {
        return Translation::getTranslation($this->page_title_id, Language::german())->content;
    }


     // this will return the content into english
    public function getPageContentEnglish()
    {
        return Translation::getTranslation($this->page_content_id, Language::english())->content;
    }


    // this will return the content into german
    public function getPageContentGerman()
    {

        return Translation::getTranslation($this->page_content_id, Language::german())->content;
    }
    
    
    // auto translate the title
    public function autoTitleTranslation()
    {

            $content = Translation::getTranslation($this->page_title_id, Language::detectLanguage())->content;

            if (empty($content)) {

                $content = Translation::getTranslation($this->page_title_id, Language::english())->content;
            }

        return $content;
    }

    // auto translater the content
    public function autoContentTranslation()
    {

        $content = Translation::getTranslation($this->page_content_id, Language::detectLanguage())->content;

        if (empty($content)) {

            $content = Translation::getTranslation($this->page_content_id, Language::english())->content;
        }

        return $content;
    }
}
?>