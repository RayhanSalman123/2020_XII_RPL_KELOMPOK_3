<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hours extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'hour_id';
    protected $table = 'hours';
}
