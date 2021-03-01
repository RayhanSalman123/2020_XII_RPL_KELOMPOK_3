<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Majors extends Model
{
    use SoftDeletes;
    protected $table	   = 'majors';
	protected $primaryKey= 'major_id';
	protected $dates       = ['deleted_at'];
    protected $guarded=[];

}
