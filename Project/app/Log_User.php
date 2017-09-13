<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log_User extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $guarded = array();
    
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
