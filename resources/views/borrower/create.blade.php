@extends('layouts.app')

@section('title','Dashboard')


@section('content')


    <div class="wrapper ">

        <div class="content-wrapper p-4">


            <br/>

            <div class="card card-info col-10">

                <div class="card-header">
                    <h3 class="card-title">Borrower Create Form</h3>
                </div>

                <form class="form-horizontal" action="{{ route('borrowerstore') }} " method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="step">Step</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="step" name="step" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="login_id">Login Id</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="login_id" name="login_id" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="monthly_sales">Monthly Sales</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="monthly_sales" name="monthly_sales" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="monthly_expenses">Monthly Expenses</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="monthly_expenses" name="monthly_expenses" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="other_financing">Other Financing</label>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-check-input" type="checkbox" id="other_financing" name="other_financing" value=1>
                                 </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="other_financing_amount">Other Financing Amount</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="other_financing_amount" name="other_financing_amount" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="legal_business_name">Legal Business Name</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="legal_business_name" name="legal_business_name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="business_physical_address">Business Physical Address</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="business_physical_address" name="business_physical_address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="business_physical_city">Business Physical City</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="business_physical_city" name="business_physical_city" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="business_physical_province">Business Physical Province</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="business_physical_province" name="business_physical_province" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="business_physical_postal">Business Physical Postal</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="business_physical_postal" name="business_physical_postal" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="dob">DOB</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>

                    </div>

                </form>
            </div>


        </div>

    </div>

@endsection;
