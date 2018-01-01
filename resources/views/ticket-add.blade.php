@extends('master')
@section('content')
<div class="ks-header">
                        <div class="ks-search">
                            <div class="input-icon icon-right icon icon-lg">
                                <h3>Add Request</h3>
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
                                            <label for="default-input" class="col-sm-2 form-control-label">Name of work</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="default-input" name="name" placeholder="Default input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Priority level</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="priority">
                                                        <option value="4">Emergency</option>
                                                        <option value="3">High</option>
                                                        <option value="2">Medium</option>
                                                        <option value="1">Low</option>                           
                                                    </select>
                                                </div>
                                                <label for="default-input" class="col-sm-1 form-control-label">Deadline</label>
                                                <div class="input-group date col-sm-4" id="datetimepicker1">
                                                    <input type="text" class="form-control" name="deadline"/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>                       
                                        </div>
                                        <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Team</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="team">
                                                        @foreach($listTeams as $team)
                                                            <option value="{{$team->team_id}}">{{$team->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <label for="default-input" class="col-sm-1 form-control-label">Relater</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="default-input" name="relater">
                                                </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">Content</label>
                                            <div class="col-sm-9">
                                                <textarea id="content" class="form-control" placeholder="Textare" name="content"></textarea>
                                            </div>
                                        </div>                                        
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">File Input</label>
                                            <div class="col-sm-9">
                                                <button class="btn btn-primary ks-btn-file">
                                                    <span class="fa fa-cloud-upload ks-icon"></span>
                                                    <span class="ks-text">Choose file</span>
                                                    <input type="file" name="file">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label"></label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-primary ks-rounded">Submit</button>
                                                <button type="submit" class="btn btn-danger ks-rounded">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection