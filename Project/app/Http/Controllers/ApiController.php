<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ApiController extends Controller
{
	use ApiResponser;

	public function __construct(){
		$this->middleware('LanguageSwitcher');
	}

	public function check_langugane($table){
		$nametable = $table->getTable();
		$language = Session::get('locale');
		$language_id = DB::table('languages')->where('code',$language)->pluck('id');
		return $language_meta = DB::table('language_metas')->where('language_id',$language_id)->pluck('content_id');
	}
}
