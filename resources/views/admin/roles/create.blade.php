@extends('admin.layouts.app')


@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}">Back</a>
        </div><br>

        <div class="pull-left">
            <h2>Create New Role</h2>
        </div>
    </div>
</div>

<section>
<div class="card shadow mb-3">
    <div class="card-body" style="margin-bottom: 5px; padding-bottom: 0px;">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Role name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Add your role name here...','class' => 'form-control')) !!}
                </div><br>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group ">
                    <strong>Permissions:</strong>
                    <div class="mt-1 p-3 bd-highlight ">
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                            <br/>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
</section>

@endsection