<?php

class PageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	//initializing Regirect Routes
	
	private $pageHome = '/admin/page';
	private $pageEdit = '/admin/page/edit' ;
	private $pageNew  = '/admin/page/create' ;
	 
	 
	public function index()
	{
		//
		return View::make('page.pageList')
			 	->with('page',Page::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('page.insert');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$messages = array(
			'page_title.required'=> 'Page Title Should not be empty!.',
			'page_content.required'=> 'Page Content Should not be empty!.',
			'status.required'=> 'Publish the PAge or not!.',					
		);
		
		$rules = array(
			'page_title'  => 'required',
			'page_content'=> 'required',
			'status'      => 'required'
		);
		
		$inputs = array(
			'page_title' => Input::get('page_title'),
			'page_content' => Input::get('page_content'),
			'status' => Input::get('status')
		
		);
		$validator = Validator::make($inputs,$rules,$messages);


		if($validator->fails()):
			return Redirect::back()
					->withErrors($validator)
					->withInput(Input::all());
		else :

            $english = Language::where('code','=','eng')->first();
            $german = Language::where('code','=','ger')->first();

            $page = new Page;
            $key = new TranslationKey;
            $key->code = rand();
            $key->save();

            //print_r($key);

            // storing english version of title
            $englishTranslation = new Translation;
			$englishTranslation->translation_key_id = $key->code;
            $englishTranslation->content = Input::get('page_title');
            $englishTranslation->language_id = $english->id;
            $englishTranslation->save();

            //print_r($englishTranslation);

            // storing german version of title
            $germanTranslation = new Translation;
			$germanTranslation->translation_key_id = $key->code;
            $germanTranslation->content = Input::get('page_title_german');
            $germanTranslation->language_id = $german->id;
            $germanTranslation->save();
           // print_r($germanTranslation);


            $page->page_title_id = $key->code;

            $key->code = rand();
            $key->save();
           // print_r($key);

            // store english version of description
            $descriptionEnglish = new Translation;
            $descriptionEnglish->translation_key_id = $key->code;
            $descriptionEnglish->content = Input::get('page_content');
            $descriptionEnglish->language_id = $english->id;
            $descriptionEnglish->save();
            //print_r($descriptionEnglish);

            // store english version of description
            $descriptionGerman = new Translation;
            $descriptionGerman->translation_key_id = $key->code;
            $descriptionGerman->content = Input::get('page_content_german');
            $descriptionGerman->language_id = $german->id;
            $descriptionGerman->save();
            //print_r($descriptionGerman);


			$page->page_content_id = $key->code;

            $this->uploadStaff($page,'image');
			$this->uploadStaff($page,'video');										
			$page->status = Input::get('status');		
			$page->save();
            //print_r($page);

			Session::flash('Message','News Created Successfully!');
			return Redirect::to($this->pageHome);
		endif;
		
	}
	
	private function uploadStaff($object,$staffName)
	{

		$staff = Input::file($staffName);		
		if(!empty($staff)) :
			$object->$staffName = $staff->getClientOriginalName();								
			$staff->move('images/',$object->$staffName);			
		endif;


		//return $object;		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('page.pages')
                  ->with('page',Page::find($id));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {

		return View::make('page.edit')
				->with('page',Page::find($id));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$messages = array(
			'page_title.required'=> 'Page Title Should not be empty!.',
			'page_content.required'=> 'Page Content Should not be empty!.',			
			'status.required'=> 'Publish the page or not!.',
		);

        $rules = array(
            'page_title'  => 'required',
            'page_content'=> 'required',
        );

        if($id > 7):
            echo array_push($_rules,array('status'=>'required'));
        endif;
		
		$inputs = array(
			'page_title' => Input::get('page_title'),
			'page_content' => Input::get('page_content'),
			'status' => Input::get('status')
		
		);
		$validator = Validator::make($inputs,$rules,$messages);


		if($validator->fails()):
			return Redirect::back()
					->withErrors($validator)
					->withInput(Input::all());
		else :

			$page = Page::find($id);

            $english = Language::where('code','eng')->first()->id;
            $german = Language::where('code','ger')->first()->id;

            $translation = Translation::where('translation_key_id', $page->page_title_id)->where('language_id', $english)->first();
            $translation->content = Input::get('page_title');
            $translation->save();
            //var_dump($translation);


            $translation = Translation::where('translation_key_id', $page->page_title_id)->where('language_id', $german)->first();
            $translation->content = Input::get('page_title_german');
            $translation->save();
            //var_dump($translation);

            $translation = Translation::where('translation_key_id', $page->page_content_id)->where('language_id', $english)->first();
            $translation->content = Input::get('page_content');
            $translation->save();
            //var_dump($translation);

            $germanContent = Translation::where('translation_key_id', $page->page_content_id)->where('language_id', $german)->first();
            $germanContent->content = Input::get('page_content_german');
            $germanContent->save();
            //var_dump($translation);


			$this->uploadStaff($page,'image');										
			$this->uploadStaff($page,'video');										
			$page->status = Input::get('status');		
			$page->save();

			Session::flash('Message','Page Updated Successfully!');
			return Redirect::to($this->pageHome);

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

		$page = Page::find($id);
        Translation::where('translation_key_id',$page->page_title_id)->delete();
        Translation::where('translation_key_id',$page->page_content_id)->delete();

		$page->delete();

        Session::flash('Message','Page Delete Successfully');
		return Redirect::back();
		
	}	
}
