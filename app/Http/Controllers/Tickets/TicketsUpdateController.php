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

class TicketsUpdateController extends Controller
{
    
	public function update($id){
        $ticket = Tickets::find($id);
        $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
        $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        $ticket->team = Teams::where('team_id',$ticket->team_id)->first();
        $listTeams = Teams::all();
        $listEmployees = Users::where('authority','>','0')->get();
    	return view('ticket-update')->with(['ticket'=>$ticket, 'listTeams'=>$listTeams, 'listEmployees'=>$listEmployees]);
	}

	public function requestUpdate(Request $request){
    		
    	
            $team=$request->input('team');
            $priority=$request->input('priority');
            $deadline=$request->input('deadline');
            $team=$request->input('team');
            $assigne=$request->input('assign');
            $status=$request->input('status');

                //Creat ticket
            $updateTicket = Tickets::find($id);
                $updateTicket->subject = $subject;
                $updateTticket->created_by = Auth::user()->user_id;
                $updateTicket->priority = $priority;
                $updateTicket->deadline = $deadline;
                $updateTicket->team_id = $team;
                $updateTicket->content = $content;
                $updateTicket->status = 0;
            $newTicket->save();
            return redirect()->route('myAllRequest');

    }
   
}
