<?php

namespace App;

use App\Faq;
use App\User;
use App\LanguageMeta;
use App\Organization;
use App\Log_Checklist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckList extends Model
{
	use SoftDeletes;

	const PENDING = 'pending';
	const APPROVAL = 'approval';
	const REFUSE = 'resfuse';
	const CLOSED = 'closed';

	protected $dates = ['deleted_at'];
	protected $table = 'checklists';

	public function log_checklist(){
		return $this->hasMany(Log_Checklist::class);
	}

	public function user(){
		return $this->belongsToMany(User::class,'checklist_user','checklist_id','user_id')->withpivot('status');
	}

	public function faq(){
		return $this->belongsToMany(Faq::class,'checklist_faq','checklist_id','faq_id')->withpivot('status_id');
	}

	public function organization(){
		return $this->belongsTo(Organization::class);
	}

	public function language_meta(){
		return $this->hasOne(LanguageMeta::class);
	}
}
