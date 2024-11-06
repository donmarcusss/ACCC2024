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
        
        <BR>
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
                
              <form action="{{ route('admin.job-order.task.save', $job_orders->id) }}" method="POST" class="space-y-4 md:space-y-6" >
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
  <label for="equipment_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Equipment Name</label>
  <select name="equipment_name" id="equipment_name" required class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
      <option value="">Choose an equipment</option>
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
  <label for="equipment_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
  <select  name="status" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
      <option value="PENDING"> PENDING  </option>
      <option value="FINISHED"> FINISHED </option>
      
    </select>
</div>
              
<br>
<div>
  <label for="note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Note</label>
  <input type="text" name="note" id="note" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
</div>


               {{-- <div>
                <label for="equipment_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Equipment</label>
                <input type="text" name="equipment_id" id="equipment_id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div> --}}

            
            {{--
              <div>
                <label for="vehicle_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Type</label>
                <input type="text" name="vehicle_type" id="vehicle_type" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

              <div>
                <label for="vehicle_manufacturer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Manufacturer</label>
                <input type="text" name="vehicle_manufacturer" id="vehicle_manufacturer" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

            <div>
                <label for="vehicle_model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Model</label>
                <input type="text" name="vehicle_model" id="vehicle_model" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

            <div>
              <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
              <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
          </div>

          
        

      

      <div>
        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
        <select  name="status" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
            <option value="pending"> Pending  </option>
            <option value="approved"> Approved </option>
            <option value="cancelled">Cancelled </option>
          </select>
    </div> --}}
  
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
                
                <th> Equipment </th>
                <th> Equipment Price </th>
                <th> Service </th>
                <th> Service Price </th>
                <th> Note </th>
                <th> Status </th>
                <th> Total </th>
                <th> Action </th>
              </tr>
            </thead>


            
            <tbody>
              {{-- @foreach ($tasks as $task) --}}
                <tr>
                 
                </td>
                  {{-- <td>{{ $quotation->id  }}</td>  --}}
                  {{-- <td>{{ $task->equipment_name  }}</td> 
                  <td>{{ $task->equipment_price  }}</td>
                  <td>{{ $task->service_name  }}</td> 
                  <td>{{ $task->service_price  }}</td>  
                  <td>{{ $task->note  }}</td> 
                  <td>{{ $task->status  }}</td> 
                  <td>{{ $task->service_price + $task->equipment_price }}</td> --}}
                
                  {{-- <td>
                    <a class="btn btn-warning" aria-expanded="false" href="{{ route('admin/job-order/task/edit', ['id' => $task->id]) }}">Edit</a>
                    
  
                    <a type="button" class="btn btn-danger " href="{{ route('admin/job-order/task/delete', ['id'=>$task->id]) }}  aria-expanded="false">Delete</a>
                 </td>
                   --}}
                  
                  
                  
                  
                
                  
                
                
               
                
                
               
               
          
              </tr>  
              {{-- @endforeach 
              --}}



              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
    @endsection



