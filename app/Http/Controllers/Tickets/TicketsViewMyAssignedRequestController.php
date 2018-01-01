<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Tickets;
use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Auth;

class TicketsViewMyAssignedRequestController extends Controller
{
    
    public function viewAllRequest(){
        $listTickets = Tickets::where('assigned_to',Auth::user()->user_id)->get();
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function viewNewRequest(){
        $listTickets = Tickets::where('assigned_to',Auth::user()->user_id)->where('status',0)->get();
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function viewInprogressRequest(){
        $listTickets = Tickets::where('assigned_to',Auth::user()->user_id)->where('status',1)->get();
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function viewOutOfDateRequest(){
        $listTickets = Tickets::where('assigned_to',Auth::user()->user_id)->where('status',3)->get();
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }   
}
