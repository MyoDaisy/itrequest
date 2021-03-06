@extends('master')
@section('content')
                    <div class="ks-header">
                        <div class="ks-search">
                            <div class="input-icon icon-right icon icon-lg row">
                                <h3 class="col-md-3"><i class="fa fa-tags" aria-hidden="true"></i> {{$ticket->subject}}</h3>
                                
                                @if(Auth::user()->authority > 1 && ($ticket->status ==1 || $ticket->status ==2 || $ticket->status ==4))
                                <button style="margin: 8px 5px" type="button" class="btn btn-primary ks-light" data-toggle="modal" data-target="#team">Team</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="team" role="dialog">
                                        <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Team</h4>
                                            </div>
                                        <form class="form-container" action="{{url("ticket-update-$ticket->ticket_id")}}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <select class="form-control" name="team">
                                                    <option value="{{$ticket->team_id}}"" selected="selected">{{$ticket->team['name']}}</option>
                                                    @foreach($listTeams as $team)
                                                        <option value="{{$team->team_id}}">{{$team->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                        </div>
                                          
                                        </div>
                                    </div>
                                @endif

                                @if(Auth::user()->authority > 1 && ($ticket->status ==1 || $ticket->status ==2 || $ticket->status ==4))
  
                                <button style="margin: 8px 5px" type="button" class="btn btn-primary ks-light" data-toggle="modal" data-target="#priority">Priority</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="priority" role="dialog">
                                        <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Priority</h4>
                                            </div>
                                        <form class="form-container" action="{{url("ticket-update-$ticket->ticket_id")}}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <select class="form-control" name="priority">
                                                    <option value="{{$ticket->priority}}" selected="selected">
                                                        @if ($ticket->priority == 1)
                                                            Low
                                                        @elseif ($ticket->priority == 2)
                                                            Medium
                                                        @elseif ($ticket->priority == 3)
                                                            High
                                                        @elseif ($ticket->priority == 4)
                                                            Emergency    
                                                        @endif
                                                    </option>
                                                    <option value="4">Emergency</option>
                                                    <option value="3">High</option>
                                                    <option value="2">Medium</option>
                                                    <option value="1">Low</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                        </div>
                                          
                                        </div>
                                    </div>
                                @endif

                                @if(Auth::user()->authority > 1 && ($ticket->status ==1 || $ticket->status ==2 || $ticket->status ==4))
                                <button style="margin: 8px 5px" type="button" class="btn btn-primary ks-light" data-toggle="modal" data-target="#deadline">Deadline</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deadline" role="dialog">
                                        <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Deadline</h4>
                                            </div>
                                        <form class="form-container" action="{{url("ticket-update-$ticket->ticket_id")}}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <div class="input-group date col-sm-9" id="datetimepicker1">
                                                    <input type="text" class="form-control" name="deadline" value="{{$ticket->deadline}}" />
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                        </div>
                                          
                                        </div>
                                    </div>
                                @endif

                                @if(Auth::user()->authority > 1 && ($ticket->status ==1 || $ticket->status ==2 || $ticket->status ==4))
                                <button style="margin: 8px 5px" type="button" class="btn btn-primary ks-light" data-toggle="modal" data-target="#relater">Relater</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="relater" role="dialog">
                                        <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Relater</h4>
                                            </div>
                                        <form class="form-container" action="{{url("ticket-update-$ticket->ticket_id")}} "method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                              <input type="text" class="form-control" id="default-input" name="relater" placeholder="Default input"/>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                        </div>
                                          
                                        </div>
                                    </div>
                                @endif

                                @if(Auth::user()->authority > 1 && ($ticket->status ==1 || $ticket->status ==2 || $ticket->status ==4))
                                <button style="margin: 8px 5px" type="button" class="btn btn-primary ks-light" data-toggle="modal" data-target="#assign">Assign</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="assign" role="dialog">
                                        <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Assign</h4>
                                            </div>
                                        <form class="form-container" action="{{url("ticket-update-$ticket->ticket_id")}}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <select class="form-control" name="assign">
                                                    <option value="{{$ticket->assigned_to}}" selected="selected">{{$ticket->performer['first_name']}} {{$ticket->performer['last_name']}}</option>
                                                    @foreach($listEmployees as $employee)
                                                        <option value="{{$employee->user_id}}">{{$employee->first_name}} {{$employee->last_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                        </div>
                                          
                                        </div>
                                    </div>
                                @endif

                                <button style="margin: 8px 5px" type="button" class="btn btn-primary ks-light" data-toggle="modal" data-target="#status">Status</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="status" role="dialog">
                                        <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Status</h4>
                                            </div>
                                        <form class="form-container" action="{{url("ticket-update-$ticket->ticket_id")}}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <select class="form-control" name="status">
                                                    <option value="{{$ticket->status}}" selected="selected">
                                                        @if ($ticket->status == 1)
                                                            New
                                                        @elseif ($ticket->priority == 2)
                                                            Inprogress
                                                        @elseif ($ticket->priority == 3)
                                                            Resolved
                                                        @elseif ($ticket->priority == 4)
                                                            Feedback
                                                        @elseif ($ticket->priority == 5)
                                                            Cancel
                                                        @elseif ($ticket->priority == 6)
                                                            Closed      
                                                        @endif
                                                    </option>
                                                    <option value="6">Closed</option>
                                                    <option value="5">Cancel</option>
                                                    <option value="4">Feedback</option>
                                                    <option value="3">Resolved</option>
                                                    <option value="2">Progress</option>
                                                    <option value="1">New</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                        </div>
                                          
                                        </div>
                                    </div>
                                

                            </div>
                        </div>
                                                     
                    </div>
                    <div class="ks-body ks-scrollable" data-auto-height>
                        <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <form class="form-container" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <div class="col-sm-1"><b style="color: red">Creat at:</b></div>
                                            <div class="col-sm-3">
                                                {{$ticket->created_at}}
                                            </div>
                                            <div class="col-sm-1"><b style="color: red">Deadline:</b></div>
                                            <div class="col-sm-3">
                                                {{$ticket->deadline}}
                                            </div>               
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-1"><b style="color: red">Requester:</b></div>
                                            <div class="col-sm-3">
                                                {{$ticket->requester['first_name']}} {{$ticket->requester['last_name']}}
                                            </div>
                                            <div class="col-sm-1"><b style="color: red">Performer:</b></div>
                                            <div class="col-sm-3">
                                                {{$ticket->performer['first_name']}} {{$ticket->performer['last_name']}}
                                            </div>
                                            <div class="col-sm-1"><b style="color: red">Team:</b></div>
                                            <div class="col-sm-3">
                                                {{$ticket->team['name']}}
                                            </div>               
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-1"><b style="color: red">Priority:</b></div>
                                            <div class="col-sm-3">
                                                @if ($ticket->priority == 1)
                                                Low
                                                @elseif ($ticket->priority == 2)
                                                    Medium
                                                @elseif ($ticket->priority == 3)
                                                    High
                                                @elseif ($ticket->priority == 4)
                                                    Emergency    
                                                @endif
                                            </div>
                                            <div class="col-sm-1"><b style="color: red">Status:</b></div>
                                            <div class="col-sm-3">
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
                                                    closed
                                                @endif 
                                            </div>
                                            <div class="col-sm-1"><b style="color: red">Relater:</b></div>
                                            <div class="col-sm-3">
                                                Nguyễn Văn Toàn
                                            </div>               
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <h3><i class="fa fa-user" aria-hidden="true"></i> Content</h3>
                                    <div class="row ks-user">
                                                <span class="col-md-1 ks-avatar">
                                                    <img src="{{Auth::user()->profile_picture}}" width="40" height="40">
                                                </span>
                                                <div class="col-sm-3">
                                                    <b style="color: blue">{{$ticket->requester['first_name']}} {{$ticket->requester['last_name']}}</b>
                                                </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            {{$ticket->content}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <h3><i class="fa fa-comment" aria-hidden="true"></i> Comment</h3>
                                    @foreach($listComment as $comment)
                                        <div class="row ks-user">
                                            <span class="col-md-1 ks-avatar">
                                                <img src="{{$comment->userComment['profile_picture']}}" width="40" height="40">
                                            </span>
                                        <div class="col-sm-3">
                                            <b style="color: blue">{{$comment->userComment['first_name']}} {{$comment->userComment['last_name']}}</b>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{$comment->content}}
                                            </div>
                                        </div>
                                    @endforeach

                                @if(Auth::user()->authority > 1 && $ticket->status < 2)                                 
                                    <form class="form-container" action="{{url("ticket-add-comment-$ticket->ticket_id")}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                        <div class="col-sm-9">
                                            <textarea id="content" class="form-control" placeholder="Textare" name="content-comment"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div> 
                                    </form>
                                @endif         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection