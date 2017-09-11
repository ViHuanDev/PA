<?php

namespace App;

use App\CheckList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log_Checklist extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    
    public function checklist(){
    	return $this->belongsTo(CheckList::class);
    }
}
