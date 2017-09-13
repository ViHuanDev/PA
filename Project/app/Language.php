<?php

namespace App;

use App\LanguageMeta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
	use SoftDeletes;

	const VIETNAMESE = 'việt nam';
	const ENGLISH = 'english';
	const VI = 'vi';
	const EN = 'en';

	protected $table = 'languages';
	protected $dates = ['deleted_at'];
    protected $guarded = array();
	

	public function languagemeta(){
		return $this->hasMany(LanguageMeta::class);
	}
}
