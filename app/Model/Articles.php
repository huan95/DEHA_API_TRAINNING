<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
//    protected $table = 'article';
        protected $fillable = ['name', 'dob', 'email'];
}
