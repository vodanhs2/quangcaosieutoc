<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
      protected $table = 'blog';
    protected  $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
}
