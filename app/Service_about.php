<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_about extends Model
{
     protected $table = 'service_about';
    protected  $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
}
