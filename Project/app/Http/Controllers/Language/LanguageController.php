<?php

namespace App\Http\Controllers\Language;

use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use App\Http\Requests\Language\CreateLanguageRequest;
use App\Http\Requests\Language\UpdateLanguageRequest;

class LanguageController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();

        return $this->showAll($languages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLanguageRequest $request)
    {
        dd($request);
        $data = $request->all();
        $data['code'] = $request->code;
        $data['name'] = $request->name;
        if($request->hasFile('imagelanguage'))
        {
            $file=$request->file('imagelanguage');
            $filename = $file->getClientOriginalName();
        }   
        else {
            $filename = "";

        }
        $data['imagelanguage'] = $request->imagelanguage;
        $language = Language::create($data);

        return $this->showOne($language);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        return $this->showOne($language);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $language->name = $request->name;
        $language->code = $request->code;
        $language->imagelanguage = $request->imagelanguage;
        
        $language->save();

        return $this->showOne($language);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        $language->delete();

        return $this->showOne($language);
    }
}
