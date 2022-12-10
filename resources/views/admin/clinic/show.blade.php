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
                           <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($clinic->doctor as $doctors)
                              <tr>
                                <th scope="row">1</th>
                                <td>{{ $doctors->user->name}}</td>
                                <td>{{ $doctors->phone}}</td>
                                
                              </tr>
                              @endforeach
                              
                            </tbody>
                          </table> 
                            
                            <p> </p>
                            <p> </p>
                            
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