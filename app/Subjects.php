<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subjects extends Model
{
	use SoftDeletes;
	protected $dates       = ['deleted_at'];
    protected $primaryKey='sch_id';
     protected $guarded = [];
}
