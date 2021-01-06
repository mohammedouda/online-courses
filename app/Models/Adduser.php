<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adduser extends Model
{
    protected $table = 'users';
    protected $fillable = ['id','name','phone','email','password'] ;
}
