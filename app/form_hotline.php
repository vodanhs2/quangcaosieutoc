<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form_hotline extends Model
{
    //

    protected $table = 'form_hotline';
    protected  $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
}
