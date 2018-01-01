<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Tickets;
use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Auth;

class TicketsViewCompanyRequestController extends Controller
{
    
    public function viewAllRequest(){
        $listTickets = Tickets::all();   
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function viewNewRequest(){
        $listTickets = Tickets::where('status',1)->get();
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function viewInprogressRequest(){
        $listTickets = Tickets::where('status',2)->get();
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function  viewResovedRequest(){
        $listTickets = Tickets::where('status',3)->get();
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function  viewFeedbackRequest(){
        $listTickets = Tickets::where('status',4)->get();
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function viewOutOfDateRequest(){
        $listTickets = Tickets::where('status',5)->get();
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }
    public function viewClosedRequest(){
        $listTickets = Tickets::where('status',6)->get();
        foreach ($listTickets as $ticket) {
            $ticket->performer = Users::where('user_id',$ticket->assigned_to)->first();
            $ticket->requester = Users::where('user_id',$ticket->created_by)->first();
        }
        return view('ticket-view',['listTickets'=>$listTickets]);
    }
}
