<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Tickets;
use App\Users;
use App\Teams;
use App\TicketThread;
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
        $listComment = TicketThread::where('ticket_id','=',$id)->get();
        foreach ($listComment as $comment){
            $comment->userComment = Users::find($comment->employee_id);
        }
    	return view('ticket-update')->with(['ticket'=>$ticket, 'listTeams'=>$listTeams, 'listEmployees'=>$listEmployees, 'listComment'=>$listComment]);
	}

	public function requestUpdate(Request $request, $id){
    		
    	
            $team=$request->input('team');
            $priority=$request->input('priority');
            $deadline=$request->input('deadline');

            $teamId=$request->input('team');

            $assignId=$request->input('assign');

            $status=$request->input('status');

                //Creat ticket
            $updateTicket = Tickets::find($id);
                if($priority){
                    $updateTicket->priority = $priority;
                }
                if($deadline){
                    $updateTicket->deadline = $deadline;
                }
                if($teamId){
                    $team=Teams::find($teamId);
                    if(isset($team)){
                        $leaderId=$team->leader_id;
                        $updateTicket->assigned_to = $leaderId;
                    }
                 $updateTicket->team_id = $teamId;
                }
                if($assignId){
                    $userAssign=Users::find('$assignId');
                    if(isset($userAssign)){
                        $teamAssign=$userAssign->team_id;
                        $updateTicket->teamId = $teamAssign;
                    }
                    $updateTicket->assigned_to = $assignId;
                }
                if($status){
                    $updateTicket->status = $status;
                }
            $updateTicket->save();
            return redirect()->route('myAllRequest');

    }

    public function addComment(Request $request, $id){
        $content = $request->input('content-comment');
        $ticketThread = new TicketThread();
            $ticketThread->ticket_id = $id;
            $ticketThread->employee_id = Auth::user()->user_id;
            $ticketThread->content = $content;
        $ticketThread->save();
        return redirect("ticket-update-$id");
    }
   
}
