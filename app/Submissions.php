<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Submissions extends Model
{
    use SoftDeletes;
    protected $table	   = 'submissions';
	protected $primaryKey= 'submission_id';
	protected $dates       = ['deleted_at'];
    protected $guarded=[];
}
