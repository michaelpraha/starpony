<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $guarded = ['id'];
    //
    protected $table = 'actor';

    public $timestamps = false;

}
