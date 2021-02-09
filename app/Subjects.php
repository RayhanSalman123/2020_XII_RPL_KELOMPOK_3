<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subjects extends Model
{
	use SoftDeletes;
	protected $table = 'subjects';
	protected $primaryKey= 'subject_id';
	protected $dates       = ['deleted_at'];
     protected $guarded = [];
}
