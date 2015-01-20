<?php


class NewsController extends \BaseController
{
	private $log;

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/

	public $restfull = true;

	function __construct()
	{
		$this->log = new LogController('News','news.log');
	}


	public function index()
	{
		//
		$news = News::orderBy('created_at','desc')->get();
		return View::make('newses.view')
		->with('newses',$news);
	}
	
	public function getNewsById($id)
	{
		return View::make('newses.userView')
				->with('news',News::find($id))
				->with('archive',News::get(array('id','created_at','updated_at','status')));
	}

	public function getAllNews()
	{
		$n = array();
		foreach (News::orderBy('created_at','desc')->where('status','=','publish')->paginate(2) as $news)
		{
			$n[] = array(
					'cover_image' => $news->cover_image,
					'title' => Translation::getTranslation($news->title_id,Language::detectLanguage())->content,
					'description' =>  Translation::getTranslation($news->description_id,Language::detectLanguage())->content,
					'id' => $news->id
				);
		}
		return $n;

	}
	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
		//return the view for inserting news
        return View::make('newses.insert');
	}


	/**
	* Store a newly created resource in storage.
	*
	* @return Response
	*/
	public function store()
	{
		//
		$messages = array(
			'title.required'=> 'Title Should not be empty!.',
			'description.required'=> 'Description Should not be empty!.',			
			'status.required'=> 'Publish the news or not!.',					
		);
		
		$rules = array(
			'title'      => 'required',
			'description'=> 'required',			
			'status'     => 'required'
		);
		
		$inputs = array(
			'title' => Input::get('title'),
			'description' => Input::get('description'),
			'cover_image' => Input::file('cover_image'),
			'status' => Input::get('status')
		
		);
		$validator = Validator::make($inputs,$rules,$messages);


		if($validator->fails()):
			return Redirect::to('/admin/news/new')
					->withErrors($validator)
					->withInput(Input::all());
		else :

			$news = new News;
            $key = new TranslationKey();
            $key->generateNewKey();

			$this->log->printLog('Start Stack');
			$news->title_id = $key->getKey();
            $translation = new Translation();
			$translation->translation_key_id = $key->getKey();
            $translation->content = Input::get('title');
            $translation->language_id = Language::english();
            $translation->save();
			$this->log->printLog($translation);

			$translation = new Translation();
            $translation->translation_key_id = $key->getKey();
            $translation->content = Input::get('titleGerman');
            $translation->language_id = Language::german();
            $translation->save();
			$this->log->printLog($translation);

			$translation = new Translation();
            $key->generateNewKey();
			$news->description_id = $key->getKey();

            $translation->translation_key_id = $key->getKey();
            $translation->content = Input::get('description');
            $translation->language_id = Language::english();
            $translation->save();
			$this->log->printLog($translation);

			$translation = new Translation();
            $translation->translation_key_id = $key->getKey();
            $translation->content = Input::get('descriptionGerman');
            $translation->language_id = Language::german();
            $translation->save();
			$this->log->printLog($translation);

			$image = Input::file('cover_image');
			$news->cover_image = $image->getClientOriginalName();

			if(Input::get('status') < 1)
				$news->status = 0;
			else
				$news->status = 1;

			$image->move('images/',$news->cover_image);

			$news->save();
			$this->log->printLog($news);
			$this->log->printLog('End Stack');



			Session::flash('Message','News Created Successfully!');
			return Redirect::to('/admin/news');
		endif;

	}


	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function show($id)
	{
		//
		return View::make('newses.show')
				->with('news',News::find($id));
	}


	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function edit($id)
	{
		$news = News::find($id);
		$title['english'] = Translation::getTranslation($news->title_id,Language::english())->content;
		$description['english'] = Translation::getTranslation($news->description_id,Language::english())->content;
		$title['german'] = Translation::getTranslation($news->title_id,Language::german())->content;
		$description['german'] = Translation::getTranslation($news->description_id,Language::german())->content;

		return View::make('newses.edit')
				->with('news',$news)
				->with('title',$title)
				->with('description',$description);
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
		$id = Input::get('id');
		$messages = array(
			'title.required'=> 'Title Should not be empty!.',
			'description.required'=> 'Description Should not be empty!.',			
			'status.required'=> 'Publish the news or not!.',					
		);
		
		$rules = array(
			'title'      => 'required',
			'description'=> 'required',			
			'status'     => 'required'
		);
		
		$inputs = array(
			'title' => Input::get('titleInEnglish'),
			'description' => Input::get('descriptionInEnglish'),
			'cover_image' => Input::file('cover_image'),
			'status' => Input::get('status')
		
		);
		$validator = Validator::make($inputs,$rules,$messages);


		if($validator->fails()):
			return Redirect::to('/admin/news/'.$id.'/edit')
					->withErrors($validator)
					->withInput(Input::all());
		else :


			$title['english'] = Input::get('titleInEnglish');
			$title['german'] = Input::get('titleInGerman');
			$description['english'] = Input::get('descriptionInEnglish');
			$description['german'] = Input::get('descriptionInGerman');

			$news = News::find($id);

			$titleInEnglish = Translation::getTranslation($news->title_id,Language::english());
			$titleInEnglish->content = $title['english'];
			$titleInEnglish->save();

			$titleInGerman = Translation::getTranslation($news->title_id,Language::german());
			$titleInGerman->content = $title['german'];
			$titleInGerman->save();

			$descriptionInEnglish = Translation::getTranslation($news->description_id,Language::english());
			$descriptionInEnglish->content = $title['german'];
			$descriptionInEnglish->save();

			$descriptionInGerman = Translation::getTranslation($news->description_id,Language::german());
			$descriptionInGerman->content = $title['german'];
			$descriptionInGerman->save();

			$image = Input::file('cover_image');

			if(!empty($image)) :
				$news->cover_image = $image->getClientOriginalName();			
				$image->move('images/',$news->cover_image);
			endif;
				
			$news->status = Input::get('status');								
			$news->save();									

			Session::flash('Message','News Updated Successfully!');
			return Redirect::to('/admin/news');
		endif;
	}


	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function destroy($id)
	{
		//
        $news = News::find($id);
        Translation::getTranslation($news->title_id)->delete();
        Translation::getTranslation($news->description_id)->delete();

        $news->delete();

        Session::flash('Message','News Delete Successfully');
        return Redirect::back();
	}

	public function changeNewsStatus($id)
	{
		if(Request::ajax())
		{
			$news = News::find($id);

			if($news->status == 'not publish') :
				$news->status = 'publish';
				Session::flash('Message','News Published Successfully!');
				$news->save();
				return $news->status;
			endif;

			if($news->status == 'publish') :
				$news->status = 'not publish';
				Session::flash('Message','News Unpublished Successfully!');
				$news->save();
				return $news->status;
			endif;
		}
	}
}
