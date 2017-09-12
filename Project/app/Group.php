<?php

namespace App;

use App\Menu;
use App\User;
use App\LanguageMeta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
	use SoftDeletes;

	Protected $table = 'groups';
	protected $dates = ['deleted_at'];
	protected $fillable = ['name','note'];
	
	public function user(){
		return $this->hasMany(User::class);
	}

	public function menu(){
		return $this->belongsToMany(Menu::class)->withpivot('value','id');
	}

	public function language_meta(){
		return $this->hasOne(LanguageMeta::class);
	}
}
