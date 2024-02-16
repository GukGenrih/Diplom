<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentsController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function student($id){
        $student = Student::find($id);
        return view('Student',compact('student',));
    }

}
