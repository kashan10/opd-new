@extends('admin.layouts.app')


@section('content')

    <div class="container-fluid">
        <h3>Clinic Add</h3>
        <form action="{{ route('clinic.store')}}" method="POST">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <p>{{ Session::get('success') }}</p>
            </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>Clinic Name</th>
                    
                </tr>
                <tr>
                    <td><input  type="text" name="name" placeholder="Enter clinic" class="form-control" />
                    </td>
                    
                </tr>
            </table>
            <table class="table table-bordered" id="dynamicAddRemove-do">
                <tr>
                    <th>Doctors</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><input  type="text"  placeholder="Enter doctor" class="form-control doctor" id="doctor"/>
                        <input type="hidden" name="doctor[0]" id='doctorid' >
                    </td>
                    <td><button type="button" name="add" id="dynamic-ar-do" class="btn btn-outline-primary">Add Doctor</button></td>
                </tr>
            </table>
            <table class="table table-bordered" id="dynamicAddRemove-nu">
                <tr>
                    <th>Nurse</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><input type="text" name="nurse[0]" placeholder="Enter nurse" class="form-control nurse" id="nurse"/>
                        <input type="hidden" name="nurse[0]" id='nurseid' >
                    </td>
                    <td><button type="button" name="add" id="dynamic-ar-nu" class="btn btn-outline-primary">Add Nurse</button></td>
                </tr>
            </table>
            <table class="table table-bordered">
                <tr>
                    <th>Held on</th>
                    
                </tr>
                <tr>
                    <td><input  type="date" name="date" placeholder="Enter date" class="form-control" />
                    </td>
                    
                </tr>
            </table>
            <table class="table table-bordered" >
                <tr>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
                <tr>
                    <td><input type="time" name="start" placeholder="Enter Start time" class="form-control" />
                    </td>
                    <td><input type="time" name="end" placeholder="Enter End time" class="form-control" />
                    </td>
                    
                </tr>
            </table>
            <button type="submit" class="btn btn-outline-success btn-block">Save</button>
        </form>
    </div>
    @endsection
    @section('search-scripts')
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">

 //doctor add

    //add more row
    var i = 0;
    $("#dynamic-ar-do").click(function () {
        ++i;
        
        $("#dynamicAddRemove-do").append('<tr><td><input  type="text"  placeholder="Enter doctor" class="form-control doctor" id="doctor'+ i +'"/><input type="hidden" name="doctor[' + i +
            ']" id="doctor'+ i +'id" ></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });

    //autocomlete doctor

    $(document).on('click', '.doctor', function(e) {
        var route = "{{ url('doctorlist') }}";
        $(this).autocomplete({
            source: function( request, response ) {
               // Fetch data
                $.ajax({
                    url:route,
                    type: 'get',
                    dataType: "json",
                    data: {
                        query: request.term
                    },
                    success: function( data ) {
                    response( data );
                    }
                });
            },
            select: function (event, ui) {
                // Set selection
                var id = event.target.id
                $('#'+id).val(ui.item.label); // display the selected text
                $('#'+id+'id').val(ui.item.value); // save selected id to input
                return false;
            }
        });
    });

    //remove row
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
   

//nurse add

 //add more row
    var j = 0;
    $("#dynamic-ar-nu").click(function () {
        ++j;
        $("#dynamicAddRemove-nu").append('<tr><td><input type="text" name="nurse' + j +
            '" placeholder="Enter nurse" class="form-control nurse" id="nurse'+ j +'"/><input type="hidden" name="nurse[' + j +
            ']" id="nurse'+ j +'id" ></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });

    //autocomlete nurse

    $(document).on('click', '.nurse', function(e) {
        
        var route = "{{ url('nurselist') }}";
        $(this).autocomplete({
            source: function( request, response ) {
               // Fetch data
                $.ajax({
                    url:route,
                    type: 'get',
                    dataType: "json",
                    data: {
                        query: request.term
                    },
                    success: function( data ) {
                    response( data );
                    }
                });
            },
            select: function (event, ui) {
                // Set selection
                var id = event.target.id
                $('#'+id).val(ui.item.label); // display the selected text
                $('#'+id+'id').val(ui.item.value); // save selected id to input
                return false;
            }
        });
    });

    //remove row
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@stop
