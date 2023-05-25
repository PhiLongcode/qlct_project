<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table='member';
    protected $fillable=['id','del_flag','username','password','fullname','is_male','birthday','email','phone','picture','access_level','create_by','modified_by','create_at','update_at'];
    protected $hidden=['password'];
}
