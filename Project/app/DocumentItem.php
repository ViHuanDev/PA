<?php

namespace App;

use App\Faq;
use App\Document;
use App\LanguageMeta;
use App\Log_DocumentItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentItem extends Model
{
	use SoftDeletes;

	protected $table = 'documentitems';
	protected $dates = ['deleted_at'];
    protected $guarded = array();
	

	public function log_documentitem(){
		return $this->hasMany(Log_DocumentItem::class);
	}

	public function faq(){
		return $this->belongsToMany(Faq::class,'documentitem_faq','documentitem_id','faq_id');
	}

	public function document(){
		return $this->belongsTo(Document::class);
	}

	public function languagemeta(){
		return $this->hasOne(LanguageMeta::class);
	}

}
