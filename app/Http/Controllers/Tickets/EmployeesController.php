<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Tickets;
use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Auth;

class EmployeesController extends Controller
{
    
    public function show(){
        $listEmployees = Users::leftjoin('teams','users.team_id','=','teams.team_id' )->select('users.*','teams.name')->get();
        return view('employees',['listEmployees'=>$listEmployees]);
    }

    public function update(Request $requests){

    }

    
}
