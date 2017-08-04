<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fields_table extends Model
{
    //
    protected $table = 'fields_table';
    protected $fillable = ['id', 'name', 'hectare'];

}
