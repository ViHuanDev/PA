<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;
	
    const YES = 'yes';
    const NO = 'no';
    const RECOMMEND = 'recommend';
    const RECOMMEND_OVERDUE = 'recommend overdue';
    const NOT_APPLICABLE = 'not applicable';
    const COMMENT = 'comment';

	protected $dates = ['deleted_at'];
    protected $guarded = array();
	protected $table = 'statuses';
    
}
