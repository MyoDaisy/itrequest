<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Tickets;
use App\Users;
use App\Teams;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Auth;

class TicketsAddController extends Controller
{
    
	public function add(){
        $listTeams = Teams::all();
    	return view('ticket-add',['listTeams'=>$listTeams]);
	}

	public function requestAdd(Request $request){
    		
    	$rule = [
    		'name'=>'required',
    		'deadline'=>'required',
    		'content'=>'required',
			'team'=>'required',
 		];

		$message = [
			'name.required'=>"Enter name of work",
    		'deadline.required'=>"Enter deadline",
    		'content.required'=>"Enter content"
    	];

    	$validator = Validator::make($request->all(), $rule, $message);

    	if ($validator->fails()) {
	        return redirect()->route('addTicket')
	                ->withErrors($validator)
	                ->withInput();
        }

        else{
            $subject=$request->input('name');
            $priority=$request->input('priority');
            $deadline=$request->input('deadline');
            $teamId=$request->input('team');
            $content=$request->input('content');

            $team = Teams::find($teamId);
            $assign = $team->leader_id;

                //Creat ticket
            $newTicket = new Tickets();
                $newTicket->subject = $subject;
                $newTicket->created_by = Auth::user()->user_id;
                $newTicket->priority = $priority;
                $newTicket->deadline = $deadline;
                $newTicket->team_id = $teamId;
                $newTicket->assigned_to = $assign;
                $newTicket->content = $content;
                $newTicket->status = 0;
            $newTicket->save();
            return redirect()->route('myAllRequest');
        }

    }
   
}
