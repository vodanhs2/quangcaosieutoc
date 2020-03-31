<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form_education extends Model
{
protected $table = 'form_education';
    protected  $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
}
