@extends('admin.layouts.app')

<div class="container">
    @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('patient.index') }}"> Back</a>
            </div><br>

            <div class="pull-left">
                <h2>{{ $puser->name }}</h2>
            </div>
        </div>
    </div><br>

    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold" style="align:center">Personal Details</p>
        </div>

        <div class="card-body" style="margin-bottom: 5px; padding-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <table class="table-borderless">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>
                                    <strong>NIC:</strong>
                                </td>
                                <td>
                                    {{ $patient->nic }}
                                </td>
                            </tr>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>
                                    <strong>Address:</strong>
                                </td>
                                <td>
                                    {{ $patient->address }}
                                </td>
                            </tr>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>
                                    <strong>Age:</strong>
                                </td>
                                <td>
                                    {{ $patient->age }}
                                </td>
                            </tr>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>
                                    <strong>Gender:</strong>
                                </td>
                                <td>
                                    {{ $patient->gender }}
                                </td>
                            </tr>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>
                                    <strong>Telephone No:</strong>
                                </td>
                                <td>
                                    {{ $patient->phone }}
                                </td>
                            </tr>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>
                                    <strong>Email:</strong>
                                </td>
                                <td>
                                    {{ $patient->user->email }}
                                </td>
                            </tr>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>
                                    <strong>Blood Group:</strong>
                                </td>
                                <td>
                                    {{ $patient->bloodgroup }}
                                </td>
                            </tr>
                        </div>
                    </div>

                    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>
                                    <strong>Specialization:</strong>
                                </td>
                                <td>
                                    {{ $patient->specialization }}
                                </td>
                            </tr>
                        </div>
                    </div> -->

                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection