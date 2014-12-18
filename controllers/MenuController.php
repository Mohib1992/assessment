<?php

class MenuController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $english = Language::where('code','eng')->first()->id;
        $englishMenu = Translation::where('translation_key_id','<','12')
                ->where('language_id',$english)
                ->get();

        $german = Language::where('code','ger')->first()->id;
        $germanMenu = Translation::where('translation_key_id','<','12')
                ->where('language_id',$german)
                ->get();

        return View::make('menus.list')
            ->with('menusEnglish',$englishMenu)
            ->with('menusGerman',$germanMenu);

        /*return View::make('menus.list')
            ->with('menusEnglish',Translation::where('translation_key_id','<','13')->get());*/

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//update menu bar title by translation key
        $key = Input::get('key');
        $englishTitle = Input::get('menuNameEnglish');
        $germanTitle = Input::get('menuNameGerman');
        $translationId = Translation::where('translation_key_id',$key)
                        ->where('language_id',Language::where('code','eng')->first()->id)
                        ->first()
                        ->id;
        $translationContent = Translation::find($translationId);
        $translationContent->content = $englishTitle;
        $translationContent->save();

        try{
            $translationId = Translation::where('translation_key_id',$key)
                ->where('language_id',Language::where('code','ger')->first()->id)
                ->first()
                ->id;
        }catch(Exception $ex)
        {
            $translation = new Translation();
            $translation->translation_key_id = $key;
            $translation->content = '';
            $translation->language_id = Language::where('code','ger')->first()->id;
            $translation->save();

            $translationId = Translation::where('translation_key_id',$key)
                ->where('language_id',Language::where('code','ger')->first()->id)
                ->first()
                ->id;
        }
        $translationContent = Translation::find($translationId);
        $translationContent->content = $germanTitle;
        $translationContent->save();

        return Redirect::back();

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
	}


}
