@extends('admin.layouts.app')

@section('content')
<div class="container-fluid"><a class="btn btn-link link-primary mb-3" role="button" href="services.html"><i class="fas fa-arrow-left"></i>&nbsp;Back</a>
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Nurse</h3>
    </div>
    <form>
        <div class="card shadow mb-3">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Fill in the details</p>
            </div>
            <div class="card-body" style="margin-bottom: 5px;padding-bottom: 0px;">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="mb-3"><label class="form-label" for="service_name"><strong>Name&nbsp;</strong></label><input class="form-control" type="text" id="service_name" placeholder="Name service" name="service_name" required=""></div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="mb-3"><label class="form-label" for="service_price"><strong>Age</strong><br></label><input class="form-control" type="number"></div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-4">
                        <div class="mb-3"><label class="form-label" for="service_price"><strong>Password</strong><br></label><input class="form-control" type="password"></div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-8">
                        <div class="mb-3"><label class="form-label" for="service_name"><strong>Position</strong><br></label><input class="form-control" type="text" id="service_name-2" placeholder="Name service" name="service_name" required=""></div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="mb-3"></div>
                    </div>
                </div>
                <div class="mb-3"><label class="form-label" for="client_description"><strong>Address</strong><br></label><textarea class="form-control" id="service_description" rows="4" name="service_description" placeholder="Description service" required=""></textarea></div>
                <div class="mb-3"><label class="form-label" for="service_client_payment_validated"><strong>Gender</strong><br></label>
                    <div class="form-group mb-3">
                        <div class="form-check"><input class="form-check-input" type="radio" id="service_client_payment_validated-1" name="RadioOption" required=""><label class="form-check-label" for="service_client_payment_validated-1">Female</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="service_client_payment_validated-2" name="RadioOption" required=""><label class="form-check-label" for="service_client_payment_validated-2">Male</label></div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div class="mb-3"><label class="form-label" for="service_client_start_date"><strong>Blood Group</strong><br></label><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select></div>
                    </div>
                    <div class="col">
                        <div class="mb-3"></div>
                    </div>
                </div>
                <div class="mb-3"><label class="form-label" for="service_client_payment_validated"><strong>Status</strong><br></label>
                    <div class="form-group mb-3">
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Active</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Inactive</label></div>
                    </div>
                </div>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3"><label class="form-label" for="service_client_start_date"><strong>Password</strong><br></label><input class="form-control" type="password"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3"><label class="form-label" for="service_client_start_date"><strong>Confirm Password</strong><br></label><input class="form-control" type="password"></div>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-3"><label class="form-label" for="service_client_start_date"><strong>photo</strong><br></label><input class="form-control" type="file"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="text-end mb-3"><button class="btn btn-primary btn-lg" type="submit">Save&nbsp;</button><a class="btn btn-danger btn-lg" role="button" href="services.html">Reset</a></div>
    </form>
</div>
</div>
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
@endsection