<?php

namespace App\Http\Controllers\GroupFaq;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use App\GroupFaq;
use App\Http\Requests\GroupFaq\CreateGroupFaqRequest;
use App\Http\Requests\GroupFaq\UpdateGroupFaqRequest;
class GroupFaqController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(GroupFaq::all());
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
    public function store(CreateGroupFaqRequest $request)
    {
        $groupfaq=GroupFaq::create($request->all());
        return $this->showOne($groupfaq);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(GroupFaq $groupfaq)
    {
        return $this->showOne($groupfaq);
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
    public function update(UpdateGroupFaqRequest $request, GroupFaq $groupfaq)
    {
        $groupfaq->update($request->all());
        return $this->showOne($groupfaq);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupFaq $groupfaq)
    {
        $groupfaq->delete();
        $this->showOne($groupfaq);
    }
}
