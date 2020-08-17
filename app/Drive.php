<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
    protected $fillable = [
    	'user_id',
    	'file_name',
    	'file_type',
    	'file_size',
    	'is_star',
    	'is_trash',
    ];
}
