<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryEducation extends Model
{
    protected $table = 'cate_education';
    protected  $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
}
