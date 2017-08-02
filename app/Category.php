<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'categories';

    //Add this property if you want to turn down the created_at and updated_at column
    //public $timestamps = false;
}
