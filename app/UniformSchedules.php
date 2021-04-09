<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UniformSchedules extends Model
{
    use SoftDeletes;
    protected $table	   	= 'uniform_schedules';
	protected $primaryKey	= 'unf_id';
	protected $dates       	= ['deleted_at'];
    protected $guarded		=[];
}
