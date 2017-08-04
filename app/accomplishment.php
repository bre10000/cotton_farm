<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accomplishment extends Model
{
    //
    protected $table = 'accomplishment';
    protected $fillable = ['id', 'date', 'activity_id', 'unit', 'output' , 'machine' , 'man_power' , 'round' , 'hour' , 'field_no' , 'approval' ];

}
