<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function supervisor(){
        return $this->belongsTo(Supervisor::class,'supervisor_id','id');
    }
    public function students(){
        return $this->HasMany(Student::class,'group_id','id');
    }
    public function taloncounter(){
        return $this->students()->with('document')->get()->pluck('document')->where('doc','=','1')->count();
    }
    public function taloncountertrue(){
        return $this->students()->with('document')->get()->pluck('document')->where('doc','=','1')->where('doc_maked','>',Carbon::now()->addMonth(-6))->count();
    }
    public function stipendcounter(){
        return $this->students()->with('stipend')->get()->pluck('stipend')->where('stipend','=','1')->count();
    }
    public function stipendcountertrue(){
        return $this->students()->with('stipend')->get()->pluck('stipend')->where('stipend','=','1')->where('stipend_maked','>',Carbon::now()->addMonth(-12))->count();
    }
    protected $guarded=false;
}
