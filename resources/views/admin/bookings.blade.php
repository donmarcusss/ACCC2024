@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Booking List</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </head>
<style>
   .status-pending {
    color: yellow;
    text-transform: uppercase;
    font-weight: bold;
}

.status-approved {
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
        
        <h4 class="card-title">List of Bookings</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            



            


            
        


            
           

        

        

      

      

    
       
                  
            <!-- Modal toggle -->
{{-- <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create an Appointment</button>
</button> --}}
<br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          
            <!-- Modal header -->
            
           
            {{-- <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create a New Appointment
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div> --}}


            
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                
              <form action="{{ route('admin.appointments.save') }}" method="POST" class="space-y-4 md:space-y-6" >
                
                @csrf

                


              <div>
                <label for="vehicle_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Type</label>
                <input type="text" name="vehicle_type" value="{{ $booking->vehicle_type ?? '' }}" id="vehicle_type" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

              <div>
                <label for="vehicle_manufacturer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Manufacturer</label>
                <input type="text" name="vehicle_manufacturer" value="{{ $booking->vehicle_manufacturer ?? '' }}" id="vehicle_manufacturer" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

            <div>
                <label for="vehicle_model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Model</label>
                <input type="text" name="vehicle_model" value="{{ $booking->vehicle_model ?? '' }}" id="vehicle_model" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

            <div>
              <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
              <input type="text" name="description" id="description" value="{{ $booking->vehicle_model ?? '' }}"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
          </div>

          @php
    // Get today's date and format it for min attribute
    $today = \Carbon\Carbon::now();
    $minDateTime = $today->copy()->setTime(9, 0)->format('Y-m-d\TH:i'); // Set to today at 9:00 AM
@endphp

<div>
    <label for="booking_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
    <input type="datetime-local" id="booking_date" name="booking_date" 
           value="{{ $booking->booking_date ?? '' }}" 
           min="{{ $minDateTime }}" 
           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
           placeholder="" required="">
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const bookingDateInput = document.getElementById('booking_date');

        // Function to validate time and set max
        bookingDateInput.addEventListener('change', function() {
            const selectedDateTime = new Date(bookingDateInput.value);
            const selectedDate = selectedDateTime.toISOString().split('T')[0]; // Get the date part
            const minDateTime = new Date(selectedDate + 'T09:00'); // Min time for the selected date
            const maxDateTime = new Date(selectedDate + 'T17:00'); // Max time for the selected date
            
            // Get current date and time
            const now = new Date();
            const nowDate = now.toISOString().split('T')[0]; // Current date

            // Set the min attribute dynamically to prevent past date selection
            if (selectedDate < nowDate) {
                alert('Please choose a date that is today or in the future.');
                bookingDateInput.value = ''; // Clear the input
                return;
            }

            // Ensure the selected time is within the valid range
            if (selectedDateTime < minDateTime || selectedDateTime > maxDateTime) {
                alert('Please choose a time between 9:00 AM and 5:00 PM.');
                bookingDateInput.value = ''; // Clear the input
            }
        });
    });
</script>
                  
     
            
         
          
            
            



            
            <thead>
              <tr>
               
                <th> Status </th>
                <th> Booking ID </th>
                <th> Name </th>
                <th> Vehicle </th>
                <th> Description </th>
                <th> Date </th>
                <th> Time </th>
                
                <th> Action </th>
              
              </tr>
            </thead>

            <tbody>
              @foreach ($bookings as $booking)
                <tr>
                  <td>
                    <span aria-expanded="false" role="button" tabindex="0" 
    class="{{ $booking->status == 'pending' ? 'status-pending' : ($booking->status == 'approved' ? 'status-approved' : ($booking->status == 'cancelled' ? 'status-cancelled' : '')) }}">
    {{ ucfirst($booking->status) }} <!-- Capitalizes the first letter -->
</span>
                </td>
                  <td>{{ $booking->formatted_id  }}</td> 
                  <td>{{ $booking->user->first_name }} {{ $booking->user->last_name }}</td>
                  <td> {{ $booking->vehicle_manufacturer . ' ' . $booking->vehicle_model . ' ' . $booking->vehicle_type }}  </td>
                  <td> {{ $booking->description }}  </td>
                  <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('F-d-Y') }}</td>
                  <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('h:i A') }}</td>
                  
                  
                  
                  
                
                  
                
                
                <td>
                  <a class="btn btn-warning" href="{{ route('admin.bookings.edit', $booking->id) }}" aria-expanded="false">Edit</a>
                  <a type="button" data-modal-target="second-modal" data-modal-toggle="second-modal" class="btn btn-danger " href=""  id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false">Delete</a>
                </td>
                
                
                <!-- Main modal -->
            <div id="second-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-2xl max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    
                      <!-- Modal header -->
                      
                     
                      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Are you sure you want to delete this booking?
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
    
                        <a data-modal-hide="second-modal" type="submit"  href="{{ route('admin.bookings.delete', ['id'=>$booking->id]) }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Delete</a>
                        <button data-modal-hide="second-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                    </div>
                </div>
               
          
              </tr>  
              @endforeach 
             


              
           
            
                   
              
                              
                            
                
            


              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>




 
    


  
      
            </div>
          </div>
          </div>

    









    @endsection



