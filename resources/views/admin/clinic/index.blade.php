@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Clinic</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success" href="{{ route('clinic.create') }}"> Create New Product</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Doctor</th>
            <th>Time</th>
            <th>Date</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($clinics as $clinic)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $clinic->name }}</td>
	        <td>{{ $clinic->start }}</td>
            <td>{{ $clinic->date }}</td>
	        <td>
                <form action="{{ route('clinic.destroy',$clinic->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('clinic.show',$clinic->id) }}">Show</a>
                    
                    <a class="btn btn-primary" href="{{ route('clinic.edit',$clinic->id) }}">Edit</a>
                    


                    @csrf
                    @method('DELETE')
                   
                    <button type="submit" class="btn btn-danger">Delete</button>
                   
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $clinics->links() !!}


@endsection