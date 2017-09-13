<?php

namespace App;

use App\Log_Faq;
use App\GroupFaq;
use App\CheckList;
use App\DocumentItem;
use App\LanguageMeta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $table = 'faqs';
    protected $guarded = array();
	

	public function log_faq(){
		return $this->hasMany(Log_Faq::class);
	}

	public function checklist(){
		return $this->belongsToMany(CheckList::class,'checklist_faq','faq_id','checklist_id')->withpivot('status_id');
	}

	public function documentitem(){
		return $this->belongsToMany(DocumentItem::class,'documentitem_faq','faq_id','documentitem_id');
	}

	public function groupfaq(){
		return $this->belongsTo(GroupFaq::class);
	}

	public function language_meta(){
		return $this->hasOne(LanguageMeta::class);
	}
}
