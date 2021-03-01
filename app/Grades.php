<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grades extends Model
{
    use SoftDeletes;
    protected $table	   = 'grades';
	protected $primaryKey= 'grade_id';
	protected $dates       = ['deleted_at'];
    protected $guarded=[];
}
