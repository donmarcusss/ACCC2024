@extends('layouts.auth')

<head>
  <title> Autofixx Car Care Center | Schedule</title>
</head>

@section('content')
<div class="content-wrapper">
<div class="card shadow-lg">
    <div class="card-body">
        <h4 class="card-title">UPCOMING APPOINTMENTS</h4>
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
                <th> Reference Number</th>
                <th> Status </th>
            
              </tr>
            </thead>
          
             

              <tbody>
                @foreach ($bookings->filter(function($booking) {
                  return \Carbon\Carbon::parse($booking->booking_date)->isFuture() || \Carbon\Carbon::parse($booking->booking_date)->isToday();
              }) as $booking)
                  <tr>
                      <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('F-d-Y') }}</td>
                      <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('h:i A') }}</td>
                      <td>{{ $booking->user->first_name }} {{ $booking->user->last_name }}</td>
                      <td>{{ $booking->vehicle_manufacturer . ' ' . $booking->vehicle_model . ' ' . $booking->vehicle_type }}</td>
                      <td>{{ $booking->description }}</td>
                      <td>{{ $booking->formatted_id }}</td> 
                      <td>
                          <span aria-expanded="false" role="button" tabindex="0" 
                              class="{{ $booking->status == 'pending' ? 'status-pending' : ($booking->status == 'approved' ? 'status-approved' : ($booking->status == 'cancelled' ? 'status-cancelled' : '')) }}">
                              {{ ucfirst($booking->status) }} <!-- Capitalizes the first letter -->
                          </span>
                      </td>
                  </tr>
              @endforeach

                    
                    
                    
                  
                    
                  
                  
                  {{-- <td>
                     <a  class="btn btn-warning "  aria-expanded="false" href="{{ route('admin/appointments/edit', ['id'=>$booking->id]) }}">Edit</a>  
                     <a type="button" class="btn btn-danger " href="{{ route('admin/appointments/delete', ['id'=>$booking->id]) }}  aria-expanded="false">Delete</a>
                  </td> --}}
                  
                  
                 
                 
            
                </tr>  
             
               
  
  
  
                
              </tbody>
                




              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
    @endsection



