@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Appointment List</title>
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
        
        <h4 class="card-title">LIST OF APPOINTMENTS</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            




<!-- Second modal -->
<div id="second-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                  Create a New Online Appointment
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="second-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>

          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
              <form action="{{ route('admin.appointments.save') }}" method="POST" class="space-y-4 md:space-y-6">
                  @csrf

                  

              

                  <div>
                    <label for="booking_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Booking</label>
                    <select name="booking_id" id="booking_id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        <option value="" disabled selected>Select a booking</option>
                        @foreach ($bookings as $bookingOption)
                            <option value="{{ $bookingOption->id }}">
                                {{ $bookingOption->formatted_id }} - {{ $bookingOption->vehicle_manufacturer }} {{ $bookingOption->vehicle_model }} - {{ $bookingOption->user->first_name }} {{ $bookingOption->user->last_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            
                <div>
                    <label for="online_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select name="online_status" id="online_status" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>

                  <!-- Modal footer -->
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

            


            
            <!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create for Walk In</button>
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
                    Create a New Appointment
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
                
              <form action="{{ route('admin.bookings.save') }}" method="POST" class="space-y-4 md:space-y-6" >
                
                @csrf

                

                <div>
                  <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" name="first_name" value="{{ $booking->user->first_name ?? '' }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
              </div>

                <div>
                  <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                  <input type="text" name="last_name"  value="{{ $booking->user->last_name ?? '' }}" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
              </div>

              <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" name="email" value="{{ $booking->user->email ?? '' }}"  id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

            <div>
              <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
              <input type="text" name="phone_number"  value="{{ $booking->user->phone_number ?? '' }}" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
          </div>

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
        

      

      <div>
        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
        <select  name="status"  value="{{ $booking->status ?? '' }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
            <option value="pending"> Approved  </option>
            <option value="approved"> Pending </option>
            <option value="cancelled">Cancelled </option>
          </select>
    </div>  

    
  
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> submit </button>
              {{-- <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
              <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button> --}}
          </div>
      </div>

       
  
                  
                
        </form>



 

            </div>
            
         
          
          
            
<br><br>


            
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

                       <!-- Status Filter Field -->
<form method="GET" action="{{ route('admin/appointments') }}" class="mb-4">
  <label for="status" class="mr-2">Filter by Status:</label> <br>
  <select name="status" id="status" class="form-control d-inline w-auto" onchange="this.form.submit()" style="color: white;">
      
      <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
      <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
      <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
  </select>
</form> <br><br>
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
                   <a type="button" class="btn btn-danger " href="{{ route('admin.bookings.delete', ['id'=>$booking->id]) }}  aria-expanded="false">Delete</a>
                </td>
                
                
               
               
          
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



