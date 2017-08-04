<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    //
    protected $table = 'activities';
    protected $fillable = ['id', 'name', 'type', 'unit', 'per' , 'norm' , 'rounds'];
}
