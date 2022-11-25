@extends('admin.layouts.app')

@section('content')
<div class="container">
    @can('role-create')
        <div style="align:center">
            <a  class="btn btn-success" href="{{ route('nurse.create') }}"> Add New Nurse</a>
        </div>
     @endcan
     <br>
     
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Nurse Details</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show &nbsp;<select class="d-inline-block form-select form-select-sm">
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>&nbsp;</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label">
                        <input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label>
                    </div>
                </div>
            </div>

            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Nurse ID</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Mobile_No</th>
                            <th>Qualification</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($user_nurse as $index =>$nurse)      
                        <tr>
                            
                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">{{$nuser[$index]->name}}</td>
                            <td>id</td>
                            <td>{{$nurse->phone}}</td>
                            <td>{{$nurse->gender}}</td>
                            <td>{{$nurse->address}}</td>
                            <td>{{$nuser[$index]->email}}</td>
                            <td>{{$nurse->phone}}</td>
                            <td>{{$nurse->qualification}}</td>
                            <td>{{$nurse->position}}</td>
                            <td>     
                                <a class="btn btn-xs btn-primary" href="">
                                    view
                                </a>
                            
                                <a class="btn btn-xs btn-info" href="">
                                    edit 
                                </a>
                           

                          
                                <form action="" method="POST" onsubmit="" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="delete">
                                </form>
                           </td>
                        </tr>
                    @endforeach   

                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Name</strong></td>
                            <td><strong>Nurse ID</strong></td>
                            <td><strong>Age</strong></td>
                            <td><strong>Gender</strong></td>
                            <td><strong>Address</strong></td>
                            <td><strong>Email</strong></td>
                            <td><strong>Mobile_No</strong></td>
                            <td><strong>Qualification</strong></td>
                            <td><strong>Position</strong></td>
                            <td><strong>Action</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                             
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection