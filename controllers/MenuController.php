<?php

class MenuController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
    {
        $englishMenu = Translation::where('translation_key_id', '<', '12')
            ->where('language_id', Language::english())
            ->get();

        $germanMenu = Translation::where('translation_key_id', '<', '12')
            ->where('language_id', Language::german())
            ->get();

        return View::make('menus.list')
            ->with('menusEnglish', $englishMenu)
            ->with('menusGerman', $germanMenu);

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
        $menuNameInEnglish = Translation::getTranslation($id,Language::english());
        $menuNameInGerman = Translation::getTranslation($id,Language::german());
        try{

            $data['key'] = $id;
            $data['english'] = $menuNameInEnglish->content;
            $data['german'] = $menuNameInGerman->content;

        }catch (Exception $ex)
        {
            $data['key'] = $id;
            $data['english'] = $menuNameInEnglish->content;
            $data['german'] = '';
        }
        return View::make('menus.edit')
          ->with('translation',$data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 *
	 * @return Response
	 */
	public function update()
	{
		//update menu bar title by translation key
        $key = Input::get('key');
        $englishTitle = Input::get('englishMenuName');
        $germanTitle = Input::get('germanMenuName');

        $menuInEnglish = Translation::getTranslation($key,Language::english());

        $translation = Translation::find($menuInEnglish->id);
        $translation->content = $englishTitle;
        $translation->save();

        $menuInGerman = Translation::getTranslation($key,Language::german());

        if (!empty($menuInGerman->id)) {
            $translation = Translation::find($menuInGerman->id);
            $translation->content = $germanTitle;
            $translation->save();
        }else{
            $translation = new Translation();
            $translation->translation_key_id = $key;
            $translation->content = $germanTitle;
            $translation->language_id = Language::german();
            $translation->save();
        }

        return Redirect::back();

    }

}
