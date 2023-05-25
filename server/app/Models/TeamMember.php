<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table='team_member';
    protected $fillable=['id','del_flag','member_id','team_id','team_member_role','create_by','modified_by','create_at','update_at'];
    
}
