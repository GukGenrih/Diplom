<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use App\Models\Supervisor;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SuperVisorController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $supervisors = Supervisor::all();
        return view('Supervisor.Supervisors',compact('supervisors'));
    }
    public function formCreate(){
            return view('Supervisor.SuperForm');
    }
    public function create(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'nullable',
            'telephone'=>'nullable'
        ]);
        Supervisor::create($request->all());
        return redirect('/');
    }
    public function formEdit($id){
        $supervisor=Supervisor::find($id);
        return view('Supervisor.superFormEdit',compact('supervisor'));
    }
}
