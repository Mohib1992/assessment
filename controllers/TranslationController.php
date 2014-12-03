<?php


class TranslationController extends \BaseController
{


    //return content in particular language
    //return content in all language
    //update content in particular language
    //update content in all language
    //get content language
    function __construct($model)
    {
        $this->model = $model;
    }

    public function getContentLanguage()
    {
      $description_id =  $this->model->employee_description_id;
    }

}
