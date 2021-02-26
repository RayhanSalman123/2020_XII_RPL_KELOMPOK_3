<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'schedule_id';
    protected $table = 'Schedules';
}
