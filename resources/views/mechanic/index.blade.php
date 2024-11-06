@extends('layouts.auth')

<head>
  <title> Autofixx Car Care Center | Dashboard</title>
</head>

@section('content')
<div class="content-wrapper">
  
    <div class="row">
      
      <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
          <div class="card-body py-0 px-0 px-sm-3">
            <div class="row align-items-center">
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Scheduled Appointments</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0"></h2>
                
                </div>
                <h6 class="text-muted font-weight-normal"></h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Pending Job Order</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0"></h2>
                  <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                </div>
                <h6 class="text-muted font-weight-normal"> </h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Pending Appointments</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0"></h2>
                  <p class="text-danger ms-2 mb-0 font-weight-medium"> </p>
                </div>
                <h6 class="text-muted font-weight-normal"></h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-12 grid-margin">
      
        <div class="card shadow-lg">
          <div class="card-body">
              <h4 class="card-title">UPCOMING BOOKINGS</h4>
              <BR>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                     
                      <th> Date </th>
                      <th> Time </th>
                      <th> Name </th>
                      <th> Vehicle</th>
                      <th> Description </th>
                    </tr>
                  </thead>
                  <tbody>
                   

                    <tbody>
                      {{-- @foreach ($bookings as $booking) --}}
                        <tr>
                          {{-- <td>
                            <span aria-expanded="false" role="button" tabindex="0" 
                                  class="{{ $booking->status == 'pending' ? 'status-pending' : ($booking->status == 'approved' ? 'status-approved' : ($booking->status == 'cancelled' ? 'status-cancelled' : '')) }}">
                                  {{ ucfirst($booking->status) }} <!-- Capitalizes the first letter -->
                            </span>
                          </td> --}}
                          {{-- <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('F-d-Y') }}</td>
                          <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('h:i A') }}</td>
                          <td>{{ $booking->user->first_name }} {{ $booking->user->last_name }}</td>
                          <td> {{ $booking->vehicle_manufacturer . ' ' . $booking->vehicle_model . ' ' . $booking->vehicle_type }}  </td>
                          <td> {{ $booking->description }}  </td> --}}
                          
                          
                          
                          
                          
                        
                          
                        
                        
                       
                        
                       
                       
                  
                      </tr>  
                   



                </table>
              </div>
            </div>
          </div>


      </div>
    </div>
  </div>
@endsection