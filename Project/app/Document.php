<?php

namespace App;

use App\DocumentItem;
use App\Log_Document;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $table = 'documents';
    protected $guarded = array();
    

    public function documentitems(){
    	return $this->hasMany(DocumentItem::class);
    }

    public function log_document(){
        return $this->hasMany(Log_Document::class);
    }
}
