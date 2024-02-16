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

class GroupsController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $groups = Group::all();
        return view('index',compact('groups',));
    }
    public function group($group){
        $group = Group::find($group);
        return view('Group',compact('group',));
    }
    public function formCreate(){
        $supervisors=Supervisor::all();
        return view('GroupForm',compact('supervisors'));
    }
    public function create(Request $request){
        $groups = Group::all();
        $this->validate($request, [
            'title' => 'required',
            'super_id' => 'required',
        ]);
        Group::create([
            'title' => $request->get('title'),
            'supervisor_id' => $request->get('super_id')
        ]);
        return redirect('/');
    }


}
