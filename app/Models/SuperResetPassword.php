<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperResetPassword extends Model
{
    use HasFactory;

    public function adminInfo (){
        return $this->hasOne(SuperAdmin::class , 'id' ,'admin_id');
    }
}
