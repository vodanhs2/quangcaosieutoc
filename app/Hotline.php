<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotline extends Model
{
    protected $table = 'hotline';
    protected  $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
}
