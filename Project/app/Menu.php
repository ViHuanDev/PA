<?php

namespace App;

use App\Group;
use App\LanguageMeta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    protected $table = 'menus';
	protected $dates = ['deleted_at'];
	protected $fillable = [
		'name',
		'parent_id',
		'nameroute',
		'order',
	];
    
    public function group(){
    	return $this->belongsToMany(Group::class)->withpivot('value','id');
    }

    public function language_meta(){
    	return $this->hasOne(LanguageMeta::class);
    }
}
