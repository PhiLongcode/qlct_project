<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    protected $table='interviewer';
    protected $fillable=['id','del_flag','status','evaluation','candidate_id','position_id','date','note','create_by','modified_by','create_at','update_at'];
}
