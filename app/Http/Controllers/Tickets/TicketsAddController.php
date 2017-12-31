<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Tickets;
use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Auth;

class TicketsAddController extends Controller
{
	public function add(){
    	return view('ticket-add');
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
	        return redirect('add')
	                ->withErrors($validator)
	                ->withInput();
        }

    	$subject=$request->input('name');
    	$priority=$request->input('priority');
    	$deadline=$request->input('deadline');
    	$team=$request->input('team');
    	$content=$request->input('content');

    		//Creat ticket
    	$newTicket = new Tickets();
	   		$newTicket->subject = $subject;
	    	$newTicket->created_by = 1;
	    	$newTicket->priority = $priority;
	    	$newTicket->deadline = $deadline;
	    	$newTicket->team_id = $team;
	    	$newTicket->content = $content;
	    	$newTicket->status = 0;
    	$newTicket->save();
    }
   
}
