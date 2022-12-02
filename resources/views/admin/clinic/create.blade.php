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
                    <td><input  type="text" name="doctor[0]" placeholder="Enter doctor" class="form-control" id="doctor"/>
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
                    <td><input type="text" name="nurse[0]" placeholder="Enter nurse" class="form-control" id="nurse"/>
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

<!-- JavaScript -->

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></Script>
<script type="text/javascript">

 //doctor add

    //add more row
    var i = 0;
    $("#dynamic-ar-do").click(function () {
        ++i;
        
        $("#dynamicAddRemove-do").append('<tr><td><input  type="text" name="doctor[' + i +
            ']" placeholder="Enter doctor" class="form-control" id="doctor"/></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });

    //autocomlete doctor

    $(document).on('click', '#doctor', function(e) {
        console.log('hi');
        var route = "{{ url('autocomplete-search') }}";
        $(this).typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
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
        $("#dynamicAddRemove-nu").append('<tr><td><input type="text" name="nurse[' + j +
            ']" placeholder="Enter nurse" class="form-control" id="nurse"/></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    //autocomlete nurse

    $(document).on('click', '#nurse', function(e) {
        console.log('hi');
        var route = "{{ url('autocomplete-search') }}";
        $(this).typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    });

//remove row
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>

</html>

@endsection