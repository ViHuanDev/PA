<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
	const CREATE = 'create';
    const PENDING = 'pending';
    const APPROVAL = 'approval';
    const REFUSE = 'refuse';
    const FIXING = 'fixing';
}
