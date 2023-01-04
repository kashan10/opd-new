@extends('admin.layouts.app')

@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

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

                    @foreach ($appoinment as $key =>$appoinment)  
                      
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="{{asset('images/'.$appoinment->patient->photo_path)}}">{{$appoinment->patient->user->name}}</td>

                            <td><address></address></td>
                            <td></td>
                            <td>     
                                <a class="btn btn-xs btn-primary" href="">
                                    View History
                                </a>
                            
                                <a class="btn btn-xs btn-info" href="#ex{{+$key}}" rel="modal:open">
                                    Prescription
                                </a>
                           
                                
                          
                                <form action="" method="POST" onsubmit="" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Done">
                                </form>
                           </td>
                        </tr>

                        {{-- prescriptons --}}
                        <!-- Modal HTML embedded directly into document -->
                            <div id="ex{{$key}}" class="modal">
                                <div class="container">
                                    <h1>Medical Prescription  </h1>
                                  
                                  
                                    <form action="{{ route('record.store') }}" enctype="multipart/form-data" method="POST">
                                  
                                  
                                      <div class="alert alert-danger print-error-msg" style="display:none">
                                          <ul></ul>
                                      </div>
                                  
                                  
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  
                                    <input type="hidden" name="appointment_id"  value="{{ $appoinment->id }}">
                                    <input type="hidden" name="patient_id"  value="{{ $appoinment->patient_id}}">
                                       
                                  
                                  
                                      <div class="form-group">
                                        <label>Image:</label>
                                        <input type="file" name="prescriptons" class="form-control">
                                      </div>
                                  
                                  
                                      <div class="form-group">
                                        <button class="btn btn-success upload-image" type="submit">Upload Image</button>
                                      </div>
                                  
                                  
                                    </form>
                                  
                                  
                                  </div>
                                  
                                  
                                  <script type="text/javascript">
                                    $("body").on("click",".upload-image",function(e){
                                      $(this).parents("form").ajaxForm(options);
                                    });
                                  
                                  
                                    var options = { 
                                      complete: function(response) 
                                      {
                                          if($.isEmptyObject(response.responseJSON.error)){
                                              $("input[name='title']").val('');
                                              alert('Image Upload Successfully.');
                                          }else{
                                              printErrorMsg(response.responseJSON.error);
                                          }
                                      }
                                    };
                                  
                                  
                                    function printErrorMsg (msg) {
                                      $(".print-error-msg").find("ul").html('');
                                      $(".print-error-msg").css('display','block');
                                      $.each( msg, function( key, value ) {
                                          $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                                      });
                                    }
                                  </script>
                                  
                                <a href="#" rel="modal:close">Close</a>
                            </div>
                          {{--end prescriptons --}}
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