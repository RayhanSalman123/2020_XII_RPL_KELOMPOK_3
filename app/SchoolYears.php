<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolYears extends Model
{
    use SoftDeletes;
    protected $table	   = 'school_years';
	protected $primaryKey= 'school_year_id';
	protected $dates       = ['deleted_at'];
    protected $guarded=[];
}
