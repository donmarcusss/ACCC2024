@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Vehicles</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </head>


@section('content')
<div class="content-wrapper">
    
<div class="card shadow-lg">
    
    <div class="card-body">
        
        <h4 class="card-title">VEHICLES</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            <div class="col-12 grid-margin stretch-card">






<!-- Modal toggle for the second modal -->
<button data-modal-target="second-modal" data-modal-toggle="second-modal" class="nav-link btn btn-primary create-new-button" id="createSecondModalButton" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create Another Vehicle Type</button>

<!-- Second Modal -->
<div id="second-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create Another Vehicle Type
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
                <!-- Add your form fields or content here for the second modal -->
               
                      
              <form action="{{ route('admin.vehicleType.save') }}" method="POST" class="space-y-4 md:space-y-6" >
                
                @csrf


                <div>
                  <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Type</label>
                  <input type="text" name="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
              </div>
                    <!-- Add more fields as necessary -->
                
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2" data-modal-hide="second-modal">Create Vehicle</button>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm px-5 py-2.5" data-modal-hide="second-modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
</form>



<!-- Modal toggle for the second modal -->
<button data-modal-target="third-modal" data-modal-toggle="third-modal" class="nav-link btn btn-primary create-new-button" id="createThirdModalButton" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create Vehicle Brand</button>

<!-- Second Modal -->
<div id="third-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create Vehicle Brand
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="third-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form action="{{ route('admin.vehicleManufacturer.save') }}" method="POST" class="space-y-4 md:space-y-6">
                    @csrf

            


                    <div>
                        <label for="manufacturer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Brand</label>
                        <input type="text" name="manufacturer" id="manufacturer" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                    <!-- Add more fields as necessary -->
               
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2" data-modal-hide="third-modal">Create Vehicle</button>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm px-5 py-2.5" data-modal-hide="third-modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
</form>




<!-- Modal toggle for the fourth modal -->
<button data-modal-target="fourth-modal" data-modal-toggle="fourth-modal" class="nav-link btn btn-primary create-new-button" id="createFourthModalButton" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create Vehicle Model</button>

<!-- Second Modal -->
<div id="fourth-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create Vehicle Model
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="third-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form action="{{ route('admin.vehicleModel.save') }}" method="POST" class="space-y-4 md:space-y-6">
                    @csrf

                    <div>
                      <label for="vehicle_type_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Type</label>
                      <select name="vehicle_type_id" id="vehicle_type_id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                          <option value="" disabled selected>Select a vehicle type</option>
                          @foreach($vehicleTypes as $vehicleType)
                              <option value="{{ $vehicleType->id }}">{{ $vehicleType->type }}</option>
                          @endforeach
                      </select>
                  </div>


                  <div>
                    <label for="vehicle_manufacturer_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Brand</label>
                    <select name="vehicle_manufacturer_id" id="vehicle_manufacturer_id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="" disabled selected>Select a vehicle type</option>
                        @foreach($vehicleManufacturers as $vehicleManufacturer)
                            <option value="{{ $vehicleManufacturer->id }}">{{ $vehicleManufacturer->manufacturer }}</option>
                        @endforeach
                    </select>
                </div>

                  


                    <div>
                        <label for="model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Model</label>
                        <input type="text" name="model" id="model" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                    <!-- Add more fields as necessary -->
               
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2" data-modal-hide="third-modal">Create Vehicle</button>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm px-5 py-2.5" data-modal-hide="third-modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
</form>












<br>



                

<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create a Vehicle</button>
</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create a Vehicle
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
                
              {{-- <form action="{{ route('admin.vehicles.save') }}" method="POST" class="space-y-4 md:space-y-6" > --}}
                
                @csrf


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

                      </select>
                </div>

            <br>
                       
                
        



            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
            </div>
        </div>
    </div>
</div>

</form>
                
                        
            
            <thead>
              <tr>
                <th>
                    Vehicle ID
                </th>
                <th> Vehicle Type	  </th>
                <th> Vehicle Brand & Model </th>
                <th> Date Created </th>
                <th> Action & Link</th>
              </tr>
            </thead>


            <tbody>
              Sedan
              @foreach($vehicles as $vehicle)
              <tr>
                  <td class="py-2 px-4 border-b">{{ $vehicle->id }}</td>
                  <td class="py-2 px-4 border-b">{{ $vehicle->vehicle_type }}</td>
                  <td class="py-2 px-4 border-b">{{ $vehicle->vehicle_manufacturer }}  {{ $vehicle->vehicle_model }}</td>
                  <td class="py-2 px-4 border-b">{{ $vehicle->created_at->format('Y-m-d') }}</td>
                  <td>
                    <a class="btn btn-warning" href="{{ route('admin.vehicles.edit', $vehicle->id) }}" aria-expanded="false">Edit</a>
                     <a type="button" class="btn btn-danger " href="{{ route('admin.vehicles.delete', ['id'=>$vehicle->id]) }}  aria-expanded="false">Delete</a>
                  </td>

                  
              </tr>
          @endforeach
              {{-- <tr>
                <td> <div class="badge badge-outline-warning">Pending</div> </td>
                <td> 23,500.00</td>
                <td> 45,300.00</td>
                <td> <span class="ps-2">Hev Abi</span> </td>
                <td> May 1, 2024</td>
                <td> 10:00 AM</td>
                <td><button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i>
                </td>
              </tr>

             
              <tr>
                <td> <div class="badge badge-outline-success">Paid</div> </td>
                <td> 0</td>
                <td> 22,300.00</td>
                <td> <span class="ps-2">Arne Bana</span> </td>
                <td> April 26, 2024</td>
                <td> 11:00 AM</td>
                <td><button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i>
                </td>
              </tr>



              <tr>
                <td> <div class="badge badge-outline-success">Paid</div> </td>
                <td> 0</td>
                <td> 5,300.00</td>
                <td> <span class="ps-2">Sa Ad</span> </td>
                <td> April 20, 2024</td>
                <td> 02:00 PM</td>
                <td><button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i>
                </td>
              </tr>


              <tr>
                <td> <div class="badge badge-outline-success">Paid</div> </td>
                <td> 0</td>
                <td> 45,950.00</td>
                <td> <span class="ps-2">Josh UE</span> </td>
                <td> April 5, 2024</td>
                <td> 10:30 AM</td>
                <td><button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i>
                </td>
              </tr>


              <tr>
                <td> <div class="badge badge-outline-success">Paid</div> </td>
                <td> 0 </td>
                <td> 27,300.00</td>
                <td> <span class="ps-2">Saad Lechon</span> </td>
                <td> April 3, 2024</td>
                <td> 11:30 AM</td>
                <td><button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i>
                </td>
              </tr> --}}



              <!-- Modal toggle -->
 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- Main modal -->
    <div id="edit-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit Billing
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    
                  <form class="space-y-4 md:space-y-6" action="#">
    

                    <div>
                      <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                      <select  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
                        <option> Pending  </option>
                        <option> Paid </option>
                   
        
                      </select>
                    </div>

    
                    <div>
                      <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount to be Paid</label>
                      <input type="name" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                  
    
                    <div>
                      <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total</label>
                      <input type="name" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
    
    
                      
    
                <br>
                           
                    
            </form>
    
    
    
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="edit-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    <button data-modal-hide="edit-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                </div>
            </div>
        </div>
    </div>

                
             
                




              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
    @endsection



