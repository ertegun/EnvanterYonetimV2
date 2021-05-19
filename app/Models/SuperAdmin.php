<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authendicatable;

class SuperAdmin extends Authendicatable
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'user_name',
        'email'
    ];
}
