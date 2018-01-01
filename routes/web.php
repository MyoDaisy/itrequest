<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('signup', 'Auth\SignupController@register');
Route::post('signup', 'Auth\SignupController@requestRegister');
Route::get('/signup/update', 'Auth\RegisterController@update');
Route::get('/', ['as'=>'login', 'uses' => 'Auth\LoginController@login']);
Route::post('/', 'Auth\LoginController@requestLogin');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix'=>'/'], function (){

    	// My request
        Route::get('my-all-request',['as'=>'myAllRequest', 'uses'=>'Tickets\TicketsViewMyRequestController@viewAllRequest']);
        Route::get('my-new-request',['as'=>'myNewRequest', 'uses'=>'Tickets\TicketsViewMyRequestController@viewNewRequest']);
        Route::get('my-inprogress-request',['as'=>'myInprogressRequest','uses'=>'Tickets\TicketsViewMyRequestController@viewInprogressRequest']);
        Route::get('my-resolved-request',['as'=>'myResolvedRequest','uses'=>'Tickets\TicketsViewMyRequestController@viewResolvedRequest']);
        Route::get('my-outofdate-request',['as'=>'myOutOfDateRequest','uses'=>'Tickets\TicketsViewMyRequestController@viewOutOfDateRequest']);

        // Relate request
        Route::get('relate-all-request',['as'=>'relateAllRequest', 'uses'=>'Tickets\TicketsViewRelateRequestController@viewAllRequest']);
        Route::get('relate-new-request',['as'=>'relateNewRequest', 'uses'=>'Tickets\TicketsViewRelateRequestController@viewNewRequest']);
        Route::get('relate-inprogress-request',['as'=>'relateInprogressRequest', 'uses'=>'Tickets\TicketsViewRelateRequestController@viewInprogressRequest']);
        Route::get('relate-resolved-request',['as'=>'relateResolvedRequest', 'uses'=>'Tickets\TicketsViewRelateRequestController@viewResolvedRequest']);
        Route::get('relate-outofdate-request',['as'=>'relateOutOfDateRequest', 'uses'=>'Tickets\TicketsViewRelateRequestController@viewOutOfDateRequest']);

        // My was assigned request
        Route::get('assigned-all-request',['as'=>'assignedAllRequest', 'uses'=>'Tickets\TicketsViewMyAssignedRequestController@viewAllRequest']);
        Route::get('assigned-new-request',['as'=>'assignedNewRequest', 'uses'=>'Tickets\TicketsViewMyAssignedRequestController@viewNewRequest']);
        Route::get('assigned-inprogress-request',['as'=>'assignedInprogressRequest', 'uses'=>'Tickets\TicketsViewMyAssignedRequestController@viewInprogressRequest']);
        Route::get('assigned-outofdate-request',['as'=>'assignedOutOfDateRequest', 'uses'=>'Tickets\TicketsViewMyAssignedRequestController@viewOutOfDateRequest']);

        // My team request
        Route::get('team-all-request',['as'=>'teamAllRequest', 'uses'=>'Tickets\TicketsViewTeamRequestController@viewAllRequest']);
        Route::get('team-new-request',['as'=>'teamNewRequest', 'uses'=>'Tickets\TicketsViewTeamRequestController@viewNewRequest']);
        Route::get('team-inprogress-request',['as'=>'teamInprogressRequest', 'uses'=>'Tickets\TicketsViewTeamRequestController@viewInProgressRequest']);
        Route::get('team-resolved-request',['as'=>'teamResolvedRequest', 'uses'=>'Tickets\TicketsViewTeamRequestController@viewResolvedRequest']);
        Route::get('team-outofdate-request',['as'=>'teamOutOfDateRequest', 'uses'=>'Tickets\TicketsViewTeamRequestController@viewOutOfDateRequest']);
        Route::get('team-closed-request',['as'=>'teamClosedRequest', 'uses'=>'Tickets\TicketsViewTeamRequestController@viewClosedRequest']);

        // Add new request
		Route::get('ticket-add',['as'=>'addTicket', 'uses'=>'Tickets\TicketsAddController@add']);
		Route::post('ticket-add',['as'=>'addTicket', 'uses'=>'Tickets\TicketsAddController@requestAdd']);

		// Update request
		Route::get('ticket-update-{id}',['as'=>'updateTicketId', 'uses'=>'Tickets\TicketsUpdateController@update']);
		Route::post('ticket-update-{id}',['as'=>'updateTicketId', 'uses'=>'Tickets\TicketsUpdateController@requestUpdate']);

        //Employees
		Route::get('empolyee',['as'=>'employee', 'uses'=>'Tickets\EmployeesController@show']);
        });

        //Log out
    	Route::get('logout', ['as'=>'getLogout', 'uses' => 'Auth\LoginController@getLogout']);
    });