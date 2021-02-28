<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curriculum extends Model
{
    use SoftDeletes;
    protected $table	   = 'curriculums';
	protected $primaryKey= 'curriculum_id';
	protected $dates       = ['deleted_at'];
    protected $guarded=[];
}
