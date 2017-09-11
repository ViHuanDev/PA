<?php

namespace App;

use App\DocumentItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log_DocumentItem extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	
	public function documentitem(){
		return $this->belongsTo(DocumentItem::class);
	}

	public function language_meta(){
		return $this->hasOne(LanguageMeta::class);
	}
}
