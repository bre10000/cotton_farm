<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fuel_report_table extends Model
{
    //
    protected $table = 'fuel_report_table';
    protected $fillable = ['id', 'name', 'machine_id', 'month', 'week' , 'fuel_consumption'];

}
