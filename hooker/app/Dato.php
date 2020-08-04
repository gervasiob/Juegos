<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    //
        protected $fillable = ['id','data'];
        protected $table = 'datos';
}
