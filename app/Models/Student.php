<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function document(){
        return $this->hasOne(Document::class);
    }
    public function stipend(){
        return $this->hasOne(Stipend::class);
    }
    public function supervisor(){
        return $this->Group->supervisor();
    }

    protected $guarded=false;
}
