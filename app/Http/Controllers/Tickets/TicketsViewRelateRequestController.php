<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Tickets;
use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Auth;

class TicketsViewRelateRequestController extends Controller
{
    public function viewAllRequest(){
        $listTickets = Tickets::join('users', 'tickets.created_by', '=', 'users.user_id')
                    ->select('tickets.*','users.first_name','users.last_name')
                    ->where('created_by',Auth::user()->user_id)
                    ->orwhere('assign_to',1)->get();
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function viewNewRequest(){
        $listTickets = Tickets::join('users', 'tickets.created_by', '=', 'users.user_id')
                    ->select('tickets.*','users.first_name','users.last_name')
                    ->where('created_by',Auth::user()->user_id)
                    ->orwhere('assign_to',Auth::user()->user_id)
                    ->where('status',1)
                    ->get();
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function viewInprogressRequest(){
        $listTickets = Tickets::join('users', 'tickets.created_by', '=', 'users.user_id')
                    ->select('tickets.*','users.first_name','users.last_name')
                    ->where('created_by',Auth::user()->user_id)
                    ->orwhere('assign_to',Auth::user()->user_id)
                    ->where('status',2)
                    ->get();
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function  viewResovedRequest(){
        $listTickets = Tickets::join('users', 'tickets.created_by', '=', 'users.user_id')
                    ->select('tickets.*','users.first_name','users.last_name')
                    ->where('created_by',Auth::user()->user_id)
                    ->orwhere('assign_to',Auth::user()->user_id);
                    ->where('status',3)
                    ->get();
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function viewOutOfDateRequest(){
        $listTickets = Tickets::join('users', 'tickets.created_by', '=', 'users.user_id')
                    ->select('tickets.*','users.first_name','users.last_name')
                    ->where('created_by',Auth::user()->user_id)
                    ->orwhere('assign_to',Auth::user()->user_id)
                    ->where('status',4)
                    ->get();
        return view('ticket-view',['listTickets'=>$listTickets]);
    }
   
}
