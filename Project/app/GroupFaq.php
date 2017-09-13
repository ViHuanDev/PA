<?php

namespace App;

use App\Faq;
use App\LanguageMeta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupFaq extends Model
{
	use SoftDeletes;

	protected $table = 'groupfaqs';
	protected $dates = ['deleted_at'];
    protected $guarded = array();
	
	
	public function faq(){
		return $this->hasMany(Faq::class);
	}

	public function language_meta(){
		return $this->hasOne(LanguageMeta::class);
	}
}
