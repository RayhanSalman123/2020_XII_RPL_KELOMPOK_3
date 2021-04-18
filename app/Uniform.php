<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Uniform extends Model
{
    use SoftDeletes;
    protected $table	   	= 'uniforms';
	protected $primaryKey	= 'urm_id';
	protected $dates       	= ['deleted_at'];
    protected $guarded		=[];
}
