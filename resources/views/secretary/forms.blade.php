@extends('layouts.sec')

<head>
    <title> Autofixx Car Care Center | Job Order</title>
  </head>


@section('content')
<div class="content-wrapper">
    
   
        <div class="content-wrapper">
        
            <h3 class="page-title"> FORM ELEMENTS </h3>
            <nav aria-label="breadcrumb">
           
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Account</h4>
                  <br>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">First Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Last Name">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="09201199728">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                   <br>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Book an Appointment</h4>
                    <br>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">First Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="First Name">
                      </div>
  
                      <div class="form-group">
                          <label for="exampleInputUsername1">Last Name</label>
                          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Last Name">
                        </div>
  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
  
                      <div class="form-group">
                          <label for="exampleInputEmail1">Phone Number</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="0920119978">
                        </div>
  
                      <div class="form-group">
                        <label for="exampleInputPassword1">Date and Time</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="27-04-2024 11:00 AM">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Vehicle Manufacturer</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Toyota">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Vehicle Type</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="SUV">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Vehicle Model</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Fortuner">
                      </div>

                     <br>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  
    </div>
    @endsection



