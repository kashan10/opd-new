@extends('admin.layouts.app')

<div class="container">
    @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nurse.index') }}"> Back</a>
            </div><br>

            <div class="pull-left">
                <h2> Show nurse</h2>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="card shadow mb-3">
        <div class="card-body" style="margin-bottom: 5px; padding-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $nuser->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>nurse number:</strong><br>
                            {{ $nurse->phone }}
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection