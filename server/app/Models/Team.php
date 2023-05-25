<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table='team';
    protected $fillable=['id','del_flag','name','leader','description','create_by','modified_by','create_at','update_at'];
}
