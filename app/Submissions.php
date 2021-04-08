<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    use SoftDeletes;
    protected $table	   = 'submissions';
	protected $primaryKey= 'submission_id';
	protected $dates       = ['deleted_at'];
    protected $guarded=[];
}
