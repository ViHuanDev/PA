<?php

namespace App;

use App\User;
use App\CheckList;
use App\LanguageMeta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $table = 'organizations';

	public function user(){
		return $this->hasMany(User::class);
	}

	public function checklist(){
		return $this->hasMany(CheckList::class);
	}

	public function language_meta(){
		return $this->hasOne(LanguageMeta::class);
	}
}
