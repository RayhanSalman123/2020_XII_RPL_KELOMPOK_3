<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolActivitiesAgenda extends Model
{
    use SoftDeletes;
    protected $table	   	= 'school_activities_agenda';
	protected $primaryKey	= 'sa_id';
	protected $dates       	= ['deleted_at'];
    protected $guarded		=[];
}
