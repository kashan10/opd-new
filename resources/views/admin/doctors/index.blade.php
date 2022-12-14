@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    {{-- @can('doctor-create') --}}
    <div class="pull-left">
        <h2>Doctor Management</h2><br>
    </div>

    <div style="align:center">
        <a class="btn btn-success" href="{{ route('doctor.create') }}">Add New Doctor</a>
    </div>
     {{-- @endcan --}}
     <br>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Doctor Details</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                        <label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                            <option value="5">5</option>
                            <option value="10" selected="">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label">
                        <input type="search" id="myInput" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search" onkeyup="myFunction()"></label>
                    </div>
                </div>
            </div>

            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="myTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile_No</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($user_doctors as $doctor)    
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="{{asset('images/'.$doctor->photo_path)}}">{{$doctor->name}}</td>

                            <td><address>{{$doctor->address}}</address></td>
                            <td>{{$doctor->phone}}</td>
                            <td>     
                                <a class="btn btn-xs btn-primary" href="{{ route('doctor.show',$doctor->id) }}">
                                    View
                                </a>
                            
                                <a class="btn btn-xs btn-info" href="{{ route('doctor.edit',$doctor->id) }}">
                                    Edit 
                                </a>
                           
                                
                          
                                <form action="{{ route('doctor.destroy',$doctor->user_id) }}" method="POST" onsubmit="" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                </form>
                           </td>
                        </tr>
                    @endforeach   

                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Name</strong></td>
                           
                        
                            <td><strong>Address</strong></td>
                            <td><strong>Mobile_No</strong></td>
                            
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
                 {!! $user_doctors->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
@section('search-scripts')
<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
@stop