<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    public function group(){
        return $this->hasMany(Group::class, 'supervisor_id', 'id');
    }
    protected $guarded=false;
}
