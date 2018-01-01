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
                                                <option>Select</option>
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
                                                <option>Select</option>
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
                                        @if ($ticket->status == 0)
                                            New
                                        @elseif ($ticket->priority == 1)
                                            Inprogress
                                        @elseif ($ticket->priority == 2)
                                            Resolved
                                        @elseif ($ticket->priority == 3)
                                            Closed    
                                        @endif    
                                    </td>
                                </tr>
                                @endforeach
                                                       
                            </tbody>
                        </table>
                    </div>
@endsection