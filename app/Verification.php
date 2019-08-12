<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'email', 'mother', 'job', 'income', 'nextofkin'];
}