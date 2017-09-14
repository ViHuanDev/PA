<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_Group extends Model
{
	protected $table = "group_menu";
	protected $fillable = ['menu_id','groupuser_id','value'];

}
