@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Job Order Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </head>


@section('content')
<div class="content-wrapper">
    
<div class="card shadow-lg">
    
    <div class="card-body">
        
        <h4 class="card-title">JOB ORDER FORM</h4>

        <br>
        <h5>Job Order ID: {{ $job_order_id ?? 'N/A' }}</h5>
         {{-- Get vehicle manufacturer and model from job_orders table --}}
         <td>{{ $job_orders && $job_orders->user ? $job_orders->user->first_name . ' ' . $job_orders->user->last_name : 'N/A' }}</td>
      <br>
     <td>{{ $job_orders ? $job_orders->vehicle_manufacturer : 'N/A' }}</td>
     <td>{{ $job_orders ? $job_orders->vehicle_model : 'N/A' }}</td>
     <td>{{ $job_orders ? $job_orders->vehicle_type : 'N/A' }}</td>
     


  


        
        
        <BR><br> <br>
        <div class="table-responsive">
          <table class="table">
            <div class="col-12 grid-margin stretch-card">


                



              <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-warning create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create a new Task</button>
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
                    Create a New Task
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
                
              <form action="{{ route('admin.joborder.task.save', $job_orders->id) }}" method="POST">
                @csrf



                <label for="service_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Service Name</label>
                <select name="service_name" id="service_name" required class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    <option value="">Choose a service</option>
                    @foreach($services as $service)
                        <option value="{{ $service->service_name }}" data-price="{{ $service->service_price }}">
                            {{ $service->service_name }}
                        </option>
                    @endforeach
                </select>

                <!-- Hidden input to hold the service price -->
                <input type="hidden" name="service_price" id="service_price">

                <script>
                    document.getElementById('service_name').addEventListener('change', function() {
                        // Get the selected option
                        var selectedOption = this.options[this.selectedIndex];
                        
                        // Get the price from data-price attribute
                        var servicePrice = selectedOption.getAttribute('data-price');

                        // Set the price to the hidden input
                        document.getElementById('service_price').value = servicePrice;
                    });
                </script>


<BR>
<label for="equipment_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
<select name="equipment_name" id="equipment_name" required class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
  <option value="">Choose a description</option>
  @foreach($equipments as $equipment)
      <option value="{{ $equipment->equipment_name }}" data-price="{{ $equipment->equipment_price }}">
          {{ $equipment->equipment_name }}
      </option>
  @endforeach
</select>

<!-- Hidden input to hold the service price -->
<input type="hidden" name="equipment_price" id="equipment_price">

<script>
  document.getElementById('equipment_name').addEventListener('change', function() {
      // Get the selected option
      var selectedOption = this.options[this.selectedIndex];
      
      // Get the price from data-price attribute
      var servicePrice = selectedOption.getAttribute('data-price');

      // Set the price to the hidden input
      document.getElementById('equipment_price').value = servicePrice;
  });
</script>
                    



<br>
<div>
  <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
  <select  name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
      <option value="PENDING"> PENDING  </option>
      <option value="FINISHED"> FINISHED </option>
      
    </select>
</div>
              
<br>
<div>
  <label for="note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Note</label>
  <input type="text" name="note" id="note" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
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
              <tr>
                <th> Service </th>
                <th> Description </th>
                <th> Unit </th>   
                <th> Quantity </th>
                <th> Unit Cost </th>
                <th> Note </th>
                <th> Mechanic </th>
                <th> Time Modifed </th>
                <th> Status </th>
                <th> Action </th>
              </tr>
            </thead>


            
            <tbody>
              
              @foreach ($tasks as $task)
                <tr>
                 
                </td>
                
                  {{-- <td>{{ $quotation->id  }}</td>  --}}
                  <td>  {{ $task->equipment && $task->equipment->service ? $task->equipment->service->service_name : 'N/A' }} </td>
                   <td>{{ $task->equipment_name  }}</td> 
                   <td> {{ $task->equipment ? ($task->equipment->equipment_unit) : 'N/A' }}</td>
                   <td> {{ $task->equipment ? ($task->equipment->equipment_quantity) : 'N/A' }}</td>
                   <td> {{ $task->equipment ? number_format($task->equipment->equipment_price, 2) : 'N/A' }}</td>
                   <td>{{ $task->note  }}</td> 
                   <td>{{ Auth::user()->first_name ?? 'Unknown User' }}</td>
                   <td>{{ $task->updated_at->format('h:i A') }}</td>
                   <td>{{ strtoupper($task->status) }}</td>
                
                   <td> <a class="btn btn-warning" href="">Edit</a> </td>
                    
                    {{-- <a class="btn btn-warning" 
   aria-expanded="false" 
   href="{{ route('admin/joborder/edit', [$task->id]) }}">
   Edit
</a> --}}
@endforeach 

              </tr>  
        
            </tbody>

          </table>
          <br>
          <td>Total: {{ number_format($job_orders->total, 2) }}</td> <!-- Display total here --><br><br>
         <!-- Display the Print button -->
@if (isset($tasks) && !$tasks->isEmpty())
<a href="{{ route('admin.job-order.print', ['jobOrderId' => $tasks->first()->job_order_id]) }}" target="_blank" class="btn btn-primary">Print</a>
@else
<span class="text-gray-500">No tasks available to print.</span>
@endif
          
        </div>
      </div>
      
    </div>
    </div>
    @endsection



