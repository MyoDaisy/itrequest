@extends('master')
@section('content')
                    <div class="ks-header">
                        <div class="ks-search">
                            <div class="input-icon icon-right icon icon-lg">
                                <h3>List request work</h3>
                            </div>
                        </div>
                        <div class="ks-actions">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary-outline ks-light ks-no-text">
                                    <span class="fa fa-angle-left ks-icon"></span>
                                </button>
                                <button type="button" class="btn btn-primary-outline ks-light ks-no-text">
                                    <span class="fa fa-angle-right ks-icon"></span>
                                </button>
                            </div>
                            <button class="btn btn-primary-outline ks-light ks-no-text">
                                <span class="fa fa-refresh ks-icon"></span>
                            </button>
                            <button class="btn btn-primary">
                                <span class="ks-text">Reset</span>
                            </button>
                            <button class="btn btn-primary">
                                <span class="ks-text">Search</span>
                            </button>
                        </div>
                        
                                             
                    </div>
                    <div class="ks-body ks-scrollable" data-auto-height>
                        <table class="ks-table table table-hover">
                            <thead>
                                <tr class="ks-unread ks-selected">
                                    <th class="ks-checkbox">
                                        STT
                                    </th>
                                    <th class="ks-sender">
                                        Name of Work
                                    </th>
                                    <th class="ks-sender">         
                                        <span class="ks-name">Priority level</span>
                                    </th>
                                    <th class="ks-sender">
                                        <span class="ks-name">Requester</span>
                                    </th>
                                    <th class="ks-sender">
                                        <span class="ks-name">Performer</span>
                                    </th>
                                    <th class="ks-sender">Deadline</th>
                                    <th class="ks-sender">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="ks-unread ks-selected">
                                    <td class="ks-checkbox">
                                        
                                    </td>
                                    <td class="ks-message">
                                        <div class="input-icon icon-right icon icon-lg">
                                            <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search">
                                            <span class="icon-addon">
                                                <span class="fa fa-search"></span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ks-sender">
                                        <div class="input-icon icon-right icon icon-lg">
                                            <select class="form-control">
                                                <option></option>
                                                <option value="4">Emergency</option>
                                                <option value="3">High</option>
                                                <option value="2">Medium</option>
                                                <option value="1">Low</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td class="ks-sender">
                                        <div class="input-icon icon-right icon icon-lg">
                                            <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search">
                                            <span class="icon-addon">
                                                <span class="fa fa-search"></span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ks-sender">
                                        <div class="input-icon icon-right icon icon-lg">
                                            <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search">
                                            <span class="icon-addon">
                                                <span class="fa fa-search"></span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ks-datetime">
                                        <div class="input-icon icon-right icon icon-lg">
                                            <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search">
                                            <span class="icon-addon">
                                                <span class="fa fa-search"></span>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ks-datetime">
                                        <div class="input-icon icon-right icon icon-lg">
                                            <select class="form-control">
                                                <option></option>
                                                <option value="6">Closed</option>
                                                <option value="5">Cancel</option>
                                                <option value="4">Feedback</option>
                                                <option value="3">Resolved</option>
                                                <option value="2">Progress</option>
                                                <option value="1">New</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                @foreach($listTickets as $ticket)
                                <tr class="ks-unread ks-selected">
                                    <td class="ks-checkbox">
                                        {{$ticket->ticket_id}}
                                    </td>
                                    <td class="ks-message">
                                        <a href="{{ url("ticket-update-$ticket->ticket_id")}}">{{$ticket->subject}}</a>
                                    </td>
                                    <td class="ks-sender">
                                        <span class="ks-name">
                                            @if ($ticket->priority == 1)
                                                Low
                                            @elseif ($ticket->priority == 2)
                                                Medium
                                            @elseif ($ticket->priority == 3)
                                                High
                                            @elseif ($ticket->priority == 4)
                                                Emergency    
                                            @endif
                                        </span>
                                    </td>
                                    <td class="ks-sender">
                                        <span class="ks-name">{{$ticket->requester['first_name']}} {{$ticket->requester['last_name']}}</span>
                                    </td>
                                    <td class="ks-sender">
                                        <span class="ks-name">{{$ticket->performer['first_name']}} {{$ticket->performer['last_name']}}</span>
                                    </td>
                                    <td class="ks-sender">
                                        {{$ticket->deadline}}
                                    </td>
                                    <td class="ks-sender">
                                        @if ($ticket->status == 1)
                                            New
                                        @elseif ($ticket->status == 2)
                                            Inprogress
                                        @elseif ($ticket->status == 3)
                                            Resolved
                                        @elseif ($ticket->status == 4)
                                            Feedback
                                        @elseif ($ticket->status == 5)
                                            Cancel
                                        @elseif ($ticket->status == 6)
                                            Closed   
                                        @endif    
                                    </td>
                                </tr>
                                @endforeach
                                                       
                            </tbody>
                        </table>
                    </div>
@endsection