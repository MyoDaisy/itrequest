<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Tickets;
use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Auth;

class TicketsViewController extends Controller
{
    public function __construct() {
        if (Auth::check()) {
            $user = Auth::user();
        }
        else{
            return redirect()->intended('/');
        }
    }

	public function view(){
		$listTickets = Tickets::all();
    	return view('ticket-view',['listTickets'=>$listTickets]);
	}

    public function viewRequest(){
        $listTickets = Tickets::join('users', 'tickets.created_by', '=', 'users.user_id')
                    ->select('tickets.*','users.first_name','users.last_name')
                    ->where('created_by',1)->get();
        return view('ticket-view',['listTickets'=>$listTickets]);
    }

    public function viewRalate(){
        $listTickets = Tickets::join('users', 'tickets.created_by', '=', 'users.user_id')
                    ->select('tickets.*','users.first_name','users.last_name')
                    ->where('created_by',1)
                    ->orwhere('assign_to',1)->get();
        return view('ticket-view',['listTickets'=>$listTickets]);
    }
   
}
