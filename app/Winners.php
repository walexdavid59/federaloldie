<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winners extends Model
{
    protected $fillable = ['name', 'gender', 'status'];
}