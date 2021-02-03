<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Classes extends Model
{
	use SoftDeletes;
    protected $table	   = 'classes';
	protected $primaryKey= 'class_id';
	protected $dates       = ['deleted_at'];
    protected $guarded=[];
}
