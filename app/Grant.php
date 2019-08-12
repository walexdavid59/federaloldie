<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    protected $table = 'grants';
    protected $fillable = ['id', 'image', 'amount', 'cashout', 'status'];
}