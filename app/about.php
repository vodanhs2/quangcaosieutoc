<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    //
      protected $table = 'about';
    protected  $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
}
