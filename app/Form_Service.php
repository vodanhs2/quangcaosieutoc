<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_Service extends Model
{
        protected $table = 'form_service';
    protected  $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
}
