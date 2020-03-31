<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    
    protected $table = 'customer';
    protected  $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
}
