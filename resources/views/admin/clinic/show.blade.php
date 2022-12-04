@extends('admin.layouts.app')

@section('content')
<section>
    <div class="card shadow mb-3">
        <div class="card-body" style="margin-bottom: 5px; padding-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h1>Clinic Details</h1> 
                            
                             <p> {{ $clinic}}</p>
                            
                            
                         </div>
                        <div class="form-group">
                           <h1>doctors</h1> 
                            @foreach ($clinic->doctor as $doctors)
                            <p> {{ $doctors->user}}</p>
                            <p> {{ $doctors}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <h1>nurses</h1>
                       
                            @foreach ($clinic->nurse as $nurses)
                            <p> {{ $nurses->user}}</p>
                            <p> {{ $nurses}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection