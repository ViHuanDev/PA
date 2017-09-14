<?php

namespace App\Http\Controllers\Menu_Group;

use App\Menu;
use App\User;
use App\Menu_Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;

class Menu_GroupController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menugroup = Menu_Group::all();
        return $this->showAll($menugroup);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        // $user = Auth::user();
        $group_id = $user->group_id;
        $menu = new Menu;
        $language = $this->check_langugane($menu);
        $menu_id = Menu_Group::where([['group_id','=',$group_id],['value','=','1'],['display','=','1']])->pluck('menu_id');
        $menuObject = Menu::whereIn('id',$menu_id)->get();
        $menulanguage = $menuObject->whereIn('id',$language);
        $menusort = $this->sortmenu($menulanguage);
        $array = array();
        foreach ($menusort as $key => $value) {
            if($value->parent_id == 0){
                $array[] = [$value];
                // $this->showsubmenu($menu,$parent_id=$value->id,$array);
            }
        }
        return $array;
    }

    public function sortmenu($menu)
    {
        $collection = collect($menu);
        $sorted = $collection->sortBy(function ($menu, $key) {
            return $menu['order'];
        });

        return $sorted->values()->all();
    }
    function showsubmenu($menu, $parent_id)
    {
        $cate_data = array();
        foreach ($menu as $key => $item)
        {
            if ($item['parent_id'] == $parent_id)
            {
                $cate_data[] = $item;
                unset($menu[$key]); //hủy 1 biến giá trị
            }
        }
        $cate_data_sort = $this->sortmenu($cate_data);
        if ($cate_data_sort)
        {
            foreach ($cate_data as $key => $item)
            {
                $array[] = [$item];
                $this->showsubmenu($menu, $item['id']);
            }
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
