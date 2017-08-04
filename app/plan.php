<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    //
    protected $table = 'plan';
    protected $fillable = ['id', 'date', 'activity_id', 'unit', 'output' , 'machine' , 'man_power' , 'round' , 'hour' , 'field_no'];

}
