@extends('master')
@section('content')
                    <div class="ks-header">
                        <div class="ks-search">
                            <div class="input-icon icon-right icon icon-lg">
                                <h3>User</h3>
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
                        </div>
                        
                                             
                    </div>
                    <div class="ks-body ks-scrollable" data-auto-height>
                        <table class="ks-table table table-hover">
                            <thead>
                                <tr class="ks-unread ks-selected">
                                    <th class="ks-sender">
                                        STT
                                    </th>
                                    <th class="ks-message">
                                        Username
                                    </th>
                                    <th class="ks-message">
                                        <span class="ks-name">Name</span>
                                    </th>
                                    <th class="ks-sender">
                                        <span class="ks-name">Team</span>
                                    </th>
                                    <th class="ks-sender">Authority</th>
                                    <th class="ks-sender">Edit Authority</th>
                                    <th class="ks-sender">Submit</th>

                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($listEmployees as $employee)
                                <form class="form-container" method="POST">
                                    {{csrf_field()}}
                                    <tr class="ks-unread ks-selected">
                                        <td class="ks-sender">
                                            {{$employee->user_id}}
                                        </td>
                                        <td class="ks-message">
                                            {{$employee->username}}
                                        </td>
                                        <td class="ks-message">
                                            {{$employee->first_name}} {{$employee->last_name}}
                                        </td>
                                        <td class="ks-sender">
                                            {{$employee->name}}
                                        </td>
                                        <td class="ks-sender">
                                            <span class="ks-name">
                                                @if ($employee->authority == 0)
                                                    Requester
                                                @elseif ($employee->authority == 1)
                                                    Employes
                                                @elseif ($employee->authority == 2)
                                                    Sub-Leader
                                                @elseif ($employee->authority == 3)
                                                    Leader
                                                @endif
                                            </span>
                                        </td>
                                        <td class="ks-sender">
                                            <div class="input-icon icon-right icon icon-lg">
                                                <select class="form-control">
                                                    <option value="{{$employee->authority}}"></option>
                                                    <option value="0">Requester</option>
                                                    <option value="1">Employee</option>
                                                    <option value="2">Sub-Leader</option>
                                                    <option value="3">Leader</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="ks-sender">
                                            <button type="submit">OK</button>
                                        </td>
                                    </tr>
                                </form>
                                @endforeach
                                                       
                            </tbody>
                        </table>
                    </div>
@endsection