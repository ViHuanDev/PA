<?php

namespace App\Http\Controllers\DocumentItem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use App\DocumentItem;
use App\Http\Requests\DocumentItem\CreateDocumentItemRequest;
use App\Http\Requests\DocumentItem\UpdateDocumentItemRequest;
class DocumentItemController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DocumentItem=DocumentItem::all();
        return $this->showAll($DocumentItem);
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
    public function store(CreateDocumentItemRequest $request)
    {
        $documentitem=DocumentItem::create($request->all());
        return $this->showOne($documentitem);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentItem $documentitem)
    {
        return $this->showOne($documentitem);
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
    public function update(UpdateDocumentItemRequest $request, DocumentItem $documentitem)
    {
        $documentitem->update($request->all());
        return $this->showOne($documentitem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentItem $documentitem)
    {
        $documentitem->update($request->all());
        return $this->showOne($documentitem);
    }
}
