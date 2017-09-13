<?php

namespace App;

use App\Faq;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log_Faq extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $guarded = array();
    
    public function faq(){
    	return $this->belongsTo(Faq::class);
    }
}
