<?php

namespace App\Http\Controllers\Menu;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Auth\validate;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use App\Http\Requests\Menu\CreateMenuRequest;
use App\Http\Requests\Menu\UpdateMenuRequest;

class MenuController extends ApiController
{
    public function __construct(){
        $this->middleware('LanguageSwitcher');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $menus = Menu::all();
        $menu = new Menu;
        return $language = $this->check_langugane($menu);
        $menus = DB::table('menus')->whereIn('id',$language)->get();
        return $this->showAll($menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMenuRequest $request)
    {
        // $data = $request->all();
        // $data['name'] = $request->name;
        // $data['parent_id'] = $request->parent_id;
        // $data['nameroute'] = $request->nameroute;
        // $data['order'] = $request->order;

        // $menu = Menu::create($data);

        // return $this->showOne($menu);
        $menu = Menu::create($request->all());
        return $this->showOne($menu, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return $this->showOne($menu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->name = $request->name;
        $menu->parent_id = $request->parent_id;
        $menu->nameroute = $request->nameroute;
        $menu->order = $request->order;
        $menu->save();
        return $this->showOne($menu, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return $this->showOne($menu);
    }
}
