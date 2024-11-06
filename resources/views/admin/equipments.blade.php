@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Description</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </head>


@section('content')
<div class="content-wrapper">    
<div class="card shadow-lg">   
    <div class="card-body">
        
        <h4 class="card-title">DESCRIPTION</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            
            
            <!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create a new Service Description</button>
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
                    Create a New Service Description
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
                
              <form action="{{ route('admin/equipments/save') }}" method="POST" class="space-y-4 md:space-y-6" >
                @csrf

                
                <div>
                  <label for="service_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Service Name</label>
                  <select name="service_id" id="service_id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                      <option value="">Select a Service</option>
                      @foreach ($services as $service)
                          <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                      @endforeach
                  </select>
              </div>


                <div>
                  <label for="equipment_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description Name</label>
                  <input type="text" name="equipment_name" id="equipment_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
              </div>


              <div>
                <label for="equipment_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                <input type="integer" name="equipment_price" id="equipment_price" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

            <div>
                <label for="equipment_quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Quantity</label>
                <input type="integer" name="equipment_quantity" id="equipment_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

            <div>
              <label for="equipment_unit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unit</label>
              <input type="integer" name="equipment_unit" id="equipment_unit" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
          </div>
  
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
              <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
              <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
          </div>
      </div>

       
  
                  
                
        </form>



            </div>
         
          
          
            
<br><br>


            
            <thead>
              <tr>
                <th>
                ID
                </th>
                <th> Service</th>
                <th> Service Description </th>
                <th> Price </th>
                <th> Unit </th>
                <th> Quantity </th>
                <th> Date Modified</th>
                <th> Date Created</th>
                <th> Action </th>
                
              </tr>
            </thead>


            <tbody>
              @foreach ($equipments as $equipment)
                <tr>
                <td>{{ $equipment->id }}</td>
                <td>{{ $equipment->service->service_name }}</td>
                <td><span class="ps-2">{{ $equipment->equipment_name }}</span></td>
                <td> {{ $equipment->equipment_price }}  </td>
                <td> {{ $equipment->equipment_unit }}  </td>
                <td> {{ $equipment->equipment_quantity }}  </td>
                <td> {{ $equipment->created_at }}  </td>
                <td> {{ $equipment->updated_at }}  </td>
                
                
                <td>
                   <a  class="btn btn-warning "  aria-expanded="false" href="{{ route('admin/equipments/edit', ['id'=>$equipment->id]) }}">Edit</a>  
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
                              Are you sure you want to delete this service description?
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
      
                          <a data-modal-hide="second-modal" type="submit"   href="{{ route('admin/equipments/delete', ['id'=>$equipment->id]) }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Delete</a>
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



