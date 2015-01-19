<?php
class ContentController extends \BaseController {

	private $log;

	function __construct()
	{
		$this->log = new LogController('content channel','content.log');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$content1 = Translation::getTranslation(ContentKey::$HOW_WE_ARE);
		$content2 = Translation::getTranslation(ContentKey::$OUR_ADVANTAGE);

		return View::make('content.view')
			->with('contents',array($content1,$content2));
	}


	public function create()
	{

	}


	public function store(){

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @param $language
	 * @return Response
	 */
	public function show($id,$language)
	{
		//
		$content = Translation::getTranslation($id,$language)->content;

		if (empty($content)) {
			$content = Translation::getTranslation($id,Language::english())->content;
		}

		return $content;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		return View::make('content.edit')
				->with('key',$id)
				->with('contentInEnglish',Translation::getTranslation($id,Language::english()))
				->with('contentInGerman',Translation::getTranslation($id,Language::german()));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		//

		$this->log->printLog('Start Stack');
		$key = Input::get('key');
		$contentInEnglish = Input::get('descriptionInEnglish');
		$contentInGerman = Input::get('descriptionInGerman');

		$getEnglishTranslationId = Translation::getTranslation($key,Language::english())->id;

		$findEnglishTranslation = Translation::find($getEnglishTranslationId);
		$findEnglishTranslation->content = $contentInEnglish;
		$findEnglishTranslation->translation_key_id = $key;
		$findEnglishTranslation->language_id = Language::english();
		$findEnglishTranslation->save();
		$this->log->printLog($findEnglishTranslation);


		$getGermanTranslationId = Translation::getTranslation($key,Language::german())->id;

		if (!empty($getGermanTranslation)) {

			$findGermanTranslation = Translation::find($getGermanTranslationId);
			$findGermanTranslation->content = $contentInGerman;
			$findGermanTranslation->translation_key_id = $key;
			$findGermanTranslation->language_id = Language::german();
			$findGermanTranslation->save();
		}else{

			$findGermanTranslation = new Translation();
			$findGermanTranslation->content = $contentInGerman;
			$findGermanTranslation->translation_key_id = $key;
			$findGermanTranslation->language_id = Language::german();
			$findGermanTranslation->save();
			$this->log->printLog($findGermanTranslation);
		}

		Session::flash('Message','Content Updated Successfully!');
		return Redirect::back();
	}
}
