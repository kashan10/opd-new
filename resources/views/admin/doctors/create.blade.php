@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    
    <div class="container">
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('doctor.index') }}"> Back</a>
         </div><br>

        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Nurse Details</h3>
        </div>
    </div>

    <!-- Form creation -->
    <section>
    <div class="container">    
    <form>
        <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold" style="align:center">Nurse Registration</p>
                </div>

                <div class="card-body" style="margin-bottom: 5px; padding-bottom: 0px;">

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="mb-3"><label class="form-label" for="name"><strong>Name with Initials:&nbsp;</strong></label>
                            <input class="form-control" type="text" id="service_name" placeholder="A.B.C.Perera" name="name" required>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="mb-3"><label class="form-label" for="NIC"><strong>NIC:&nbsp;</strong></label>
                            <input class="form-control" type="text" id="NIC" placeholder="751584753v" name="NIC" maxlength="12" required>
                        </div>
                        @error('NIC')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="mb-3">
                            <label class="form-label" for="age"><strong>Age:</strong><br></label>
                            <input class="form-control" type="number" placeholder="25 years" min="20" max="80" name="age">
                        </div>
                        @error('age')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3"><label class="form-label" for="gender"><strong>Gender:</strong><br></label>
                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="service_client_payment_validated-2" name="RadioOption" required>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="service_client_payment_validated-1" name="RadioOption" required>
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="client_description"><strong>Address:</strong><br></label>
                        <textarea class="form-control" id="service_description" rows="5" name="service_description" placeholder="No.31, Market Road, Main-Street, Matara." required=""></textarea>
                    </div><br>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="mb-3"><label class="form-label" for="email"><strong>Email:&nbsp;</strong></label>
                            <input class="form-control" type="email" id="email" placeholder="pathirana@gmail.com" name="email" required>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="mb-3"><label class="form-label" for="telephone_no"><strong>Telephone Number:&nbsp;</strong></label>
                            <input class="form-control" type="telno" id="telno" placeholder="07X XXX XXXX" name="telno" maxlength="12" required>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="mb-3"><label class="form-label" for="Position"><strong>Position</strong><br></label>
                            <input class="form-control" type="text" id="position" placeholder="Grade I" name="position" required>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="mb-3"><label class="form-label" for="qualification"><strong>Qualification:</strong><br></label>
                            <input class="form-control" type="text" id="qualification" placeholder="GCE A/L Qualified" name="qualification" required>
                        </div>
                    </div>
                    
                    <div class="mb-3"><label class="form-label" for="service_client_payment_validated"><strong>Status:</strong><br></label>
                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="formCheck-1">
                                <label class="form-check-label" for="formCheck-1">Active</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" id="formCheck-2">
                              <label class="form-check-label" for="formCheck-2">Inactive</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3"><label class="form-label" for="service_client_start_date"><strong>Uplaod a Photo:</strong><br></label>
                        <input class="form-control" type="file">
                    </div>

                </div>

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3"><label class="form-label" for="service_client_start_date"><strong>Set Password:</strong><br></label><input class="form-control" type="password"></div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3"><label class="form-label" for="service_client_start_date"><strong>Confirm Password:</strong><br></label><input class="form-control" type="password"></div>
                            </div>
                        </div>
                    </div>
                </section>

        </div>
        
        <div class="text-center mb-3">
            <button class="btn btn-primary btn-lg" type="submit">Save&nbsp;</button>
            <button class="btn btn-danger btn-lg" type="reset">Reset&nbsp;</button>
        </div>
        
    </form>
    </div>
    </section>

</div>
</div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
@endsection