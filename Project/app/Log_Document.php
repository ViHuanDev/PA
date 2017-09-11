<?php

namespace App;

use App\Document;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log_Document extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    
    public function document(){
    	return $this->belongsTo(Document::class);
    }
}
