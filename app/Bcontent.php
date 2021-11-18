<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bcontent extends Model
{
    protected $table = 'bcontents';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
