<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'categories';
    protected $fillable = array('name', 'created_at_ip', 'updated_at_ip');
    //Add this property if you want to turn down the created_at and updated_at column
    //public $timestamps = false;
}
