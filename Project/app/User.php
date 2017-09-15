<?php

namespace App;
use App\Group;
use App\Comment;
use App\Log_User;
use App\CheckList;
use App\Organization;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;
    const PENDING = 'pending';
    const APPROVAL = 'approval';
    const REFUSE = 'resfuse';
    const BAN = 'ban';

    protected $dates = ['deleted_at'];
    protected $table = 'users';
    protected $guarded = array();
     protected $hidden = [
        'password', 'remember_token',
    ];
    public function groupuser(){
    	return $this->belongsTo(Group::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function log_user(){
        return $this->hasMany(Log_User::class);
    }

    public function checklist(){
        return $this->belongsToMany(CheckList::class,'checklist_user','user_id','checklist_id')->withpivot('status');
    }

    public function organization(){
        return $this->belongsTo(Organization::class);
    }
}
