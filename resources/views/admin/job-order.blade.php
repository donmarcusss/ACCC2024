@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Job Order</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </head>
  <style>
    .status-pending {
     color: yellow;
     text-transform: uppercase;
     font-weight: bold;
 }


 .status-on-going {
     color: orange;
     text-transform: uppercase;
     font-weight: bold;
 }

 
 .status-finished {
     color: green;
     text-transform: uppercase;
     font-weight: bold;
 }
 
 .status-cancelled {
   color: red;
   text-transform: uppercase;
   font-weight: bold;
 }
 </style>

@section('content')
<div class="content-wrapper">
    
<div class="card shadow-lg">
    
    <div class="card-body">
        
        <h4 class="card-title">LIST OF JOB ORDERS</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            <div class="col-12 grid-margin stretch-card">


                



              <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create a new Job Order</button>
</button>
<br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          
            <!-- Modal header -->
            
           
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create a New Job Order
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>



            

            
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                
              <form action="{{ route('admin/job-order/save') }}" method="POST" class="space-y-4 md:space-y-6" >
                @csrf

                
                {{-- <div>
                  <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User ID</label>
                  <input type="text" name="user_id" id="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
              </div> --}}

             

              <label for="booking_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Booking</label>
<select name="booking_id" id="booking_id" required class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option value="">Choose an appointment</option>
    @foreach($bookings as $booking)
        @if($booking->status === 'approved') <!-- Only include pending status -->
            <option value="{{ $booking->id }}"> 
                {{ $booking->formatted_id }} - {{ $booking->user->first_name }} {{ $booking->user->last_name }} - {{ $booking->vehicle_manufacturer }} {{ $booking->vehicle_model }}
            </option>
        @endif
    @endforeach
</select>

  
      

      <div>
        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
        <select  name="status" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
            <option value="pending"> PENDING </option>
            <option value="on-going"> ON-GOING </option>
            <option value="finished">FINISHED </option>
            <option value="cancelled">CANCELLED </option>
          </select>
    </div>
  
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
              <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
              <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
          </div>
      </div>

       
  
                  
                
        </form>



            </div>
         
            
            
            <thead>
                <th>Link</th>
                <th> Name </th>
                <th> Vehicle </th>
                <th> Status </th>
                <th> Date </th>
                <th> Status </th>
                <th> Action </th>            
            </thead>


                <tbody>
                    <form method="GET" action="{{ route('admin/job-order') }}" class="mb-4">
                        <label for="status" class="mr-2">Filter by Status:</label> <br>
                        <select name="status" id="status" class="form-control d-inline w-auto" onchange="this.form.submit()" style="color: white;">
                            <option value="" {{ request('status') == '' ? 'selected' : '' }}>All</option> <!-- Add "All" option -->
                            
                            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="on-going" {{ request('status') == 'on-going' ? 'selected' : '' }}>On-Going</option>
                            <option value="finished" {{ request('status') == 'finished' ? 'selected' : '' }}>Finished</option>
                            <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </form>
                    
                        
                    <br><br>
                    <tr>


                      @foreach ($job_orders as $job_order)
    @if (is_null($job_order->booking_id))
        <tr>
            <td colspan="5">No booking ID available for this job order.</td>
        </tr>
    @else
        <tr>
          <td>{{ $job_order->booking->formatted_id }}</td>
            <td>
                <a href="{{ route('admin/joborder/task', ['job_order_id' => $job_order->id]) }}" class="btn btn-info btn-icon-text">Job Order <i class="badge badge-info"></i></a>
            </td>
            
            <td>{{ optional($job_order->booking->user)->first_name }} {{ optional($job_order->booking->user)->last_name }}</td>
            <td>
                {{ $job_order->booking->vehicle_manufacturer }} {{ $job_order->booking->vehicle_model }} {{ $job_order->booking->vehicle_type }}
            </td>
            <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('F-d-Y') }}</td>
                  
            
            <td>
                <span aria-expanded="false" role="button" tabindex="0" 
                      class="{{ 
                          $job_order->status == 'pending' ? 'status-pending' : 
                          ($job_order->status == 'on-going' ? 'status-on-going' : 
                          ($job_order->status == 'finished' ? 'status-finished' : 
                          ($job_order->status == 'cancelled' ? 'status-cancelled' : '')))
                      }}">
                    {{ ucfirst($job_order->status) }} <!-- Capitalizes the first letter -->
                </span>
            </td>


            <td>
                <a class="btn btn-warning" href="{{ route('admin.joborder.edit', $job_order->id) }}">Edit</a>
                <a type="button" data-modal-target="second-modal" data-modal-toggle="second-modal" class="btn btn-danger " href=""  id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false">Delete</a>
            </td>
        </tr>

        

    
    
    <!-- Main modal -->
<div id="second-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        
          <!-- Modal header -->
          
         
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Are you sure you want to delete this Job Order?
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="second-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>

          <!-- Modal footer -->
          <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

            <a data-modal-hide="second-modal" type="submit"  href="{{ route('admin/joborder/delete', ['id' => $job_order->id]) }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Delete</a>
            <button data-modal-hide="second-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
        </div>
    </div>





    @endif
@endforeach



                    
                      
                      
                     {{-- <td>{{ $job_order->booking->user->name }}</td> --}}
                      
                      
                      {{-- <td>{{ \Carbon\Carbon::parse($job_order->date_created_at)->format('F-d-Y') }}</td>
                      <td> {{ $job_order->description }}  </td>
                      <td>
                        <span aria-expanded="false" role="button" tabindex="0" 
        class="{{ $job_order->status == 'pending' ? 'status-pending' : ($job_order->status == 'approved' ? 'status-approved' : ($job_order->status == 'cancelled' ? 'status-cancelled' : '')) }}">
        {{ ucfirst($job_order->status) }} <!-- Capitalizes the first letter -->
    </span>
                    </td> 
                    
                     
                      
                      
                      
                      
                    
                      
                    
                    
                    {{-- <td>
                       <a  class="btn btn-warning "  aria-expanded="false" href="{{ route('admin/appointments/edit', ['id'=>$booking->id]) }}">Edit</a>  
                       <a type="button" class="btn btn-danger " href="{{ route('admin/appointments/delete', ['id'=>$booking->id]) }}  aria-expanded="false">Delete</a>
                    </td> --}}
                    
                    
                   
                   
              
                  </tr>  
                 
                 
    
    
    
                  
                </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
    @endsection



