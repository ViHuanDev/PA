<?php

namespace App;

use App\Faq;
use App\Menu;
use App\Group;
use App\GroupFaq;
use App\Language;
use App\CheckList;
use App\DocumentItem;
use App\Organization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LanguageMeta extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $table = 'languagemetas';
    protected $guarded = array();
    
    public function languages(){
    	return $this->belongsTo(Language::class);
    }

    public function documentitem(){
    	return $this->hasOne(DocumentItem::class);
    }

    public function faq(){
    	return $this->hasOne(Faq::class);
    }

    public function groupfaq(){
    	return $this->hasOne(GroupFaq::class);
    }

    public function organization(){
    	return $this->hasOne(Organization::class);
    }

    public function checklist(){
    	return $this->hasOne(CheckList::class);
    }

    public function group(){
    	return $this->hasOne(Group::class);
    }

    public function menu(){
    	return $this->hasOne(Menu::class);
    }
}
