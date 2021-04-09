<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use SoftDeletes;
    protected $table	   	= 'notes';
	protected $primaryKey	= 'nt_id';
	protected $dates       	= ['deleted_at'];
    protected $guarded		=[];
}
