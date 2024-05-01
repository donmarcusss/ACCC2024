@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Services</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </head>


@section('content')
<div class="content-wrapper">
    


  
<div class="card shadow-lg">
    
    <div class="card-body">
        
        <h4 class="card-title">SERVICES</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            
            
            <!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create Job Order</button>
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
                    Create a New Service
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
                
              <form class="space-y-4 md:space-y-6" action="#">


                <div>
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Service Name</label>
                  <input type="email" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
              </div>


              <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Service Price</label>
                <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>
  
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
              <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
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
                <th> Service Name </th>
                <th> Price </th>
                <th> Date Modified</th>
                <th> Date Created</th>
                <th> Action </th>
                <th> </th>
              </tr>
            </thead>


            <tbody>
              <tr>
                <td> 1 </td>
                <td> Change Oil </td>
                <td> 899.00 </td>
                <td> April 25, 2024</td>
                <td> March 24, 2024</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>

             
              <tr>
                <td> 2 </td>
                <td> Alignment </td>
                <td> 3,200.00 </td>
                <td> April 25, 2024</td>
                <td> March 24, 2024</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>

              <tr>
                <td> 3 </td>
                <td> Brake Fluids </td>
                <td> 2,000.00 </td>
                <td> April 26, 2024</td>
                <td> March 24, 2024</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>

              <tr>
                <td> 4 </td>
                <td> Shocks & Struts </td>
                <td> 4,500.00 </td>
                <td> April 20, 2024</td>
                <td> March 24, 2024</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>

              <tr>
                <td> 5 </td>
                <td> Cylinders & Calipers </td>
                <td> 6,500.00 </td>
                <td> April 1, 2024</td>
                <td> March 24, 2024</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>




              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>




    <div class="content-wrapper">
    


  
      <div class="card shadow-lg">
          
          <div class="card-body">
              
              <h4 class="card-title">EQUIPMENT</h4>
              
              <BR>
              <div class="table-responsive">
                <table class="table">
                  
                  
                  <!-- Modal toggle -->
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
      <!-- Main modal -->
      <div id="equipment-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Create a New Equipment
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="equipment-modal">
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
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Equipment Name</label>
                        <input type="email" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
      
      
                    <div>
                      <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Equipment Price</label>
                      <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                  </div>
        
          
        
                        
                      
              </form>
      
      
      
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-hide="equipment-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                      <button data-modal-hide="equipment-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                  </div>
              </div>
          </div>
      </div>
      
      
      <br>
      
      
                  <!-- Modal toggle -->
                  <button data-modal-target="equipment-modal" data-modal-toggle="equipment-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create a New Equipment</button>
                </button>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
                <!-- Main modal -->
                <div id="equipment-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Create a New Service
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="equipment-modal">
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
                                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Equipment Name</label>
                                  <input type="email" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                              </div>
                
                
                              <div>
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Equipment</label>
                                <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                            </div>
                  
                    
                                       
                              
                
                
                                
                
                
                            
                                  
                                
                        </form>
                
                
                
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="equipment-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                <button data-modal-hide="equipment-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                
      
      
      
      <br><br>
      
      
                  
                  <thead>
                    <tr>
                      <th>
                      ID
                      </th>
                      <th> Service Name </th>
                      <th> Price </th>
                      <th> Date Modified</th>
                      <th> Date Created</th>
                      <th> Action </th>
                      <th> </th>
                    </tr>
                  </thead>
      
      
                  <tbody>
                    <tr>
                      <td> 1 </td>
                      <td> Change Oil </td>
                      <td> 899.00 </td>
                      <td> April 25, 2024</td>
                      <td> March 24, 2024</td>
                      <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                      </button>
                      <button type="button" class="btn btn-success  ">
                          <i class="mdi "></i> Submit </button>
                      <td>
                    </tr>
      
                   
                    <tr>
                      <td> 2 </td>
                      <td> Alignment </td>
                      <td> 3,200.00 </td>
                      <td> April 25, 2024</td>
                      <td> March 24, 2024</td>
                      <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                      </button>
                      <button type="button" class="btn btn-success  ">
                          <i class="mdi "></i> Submit </button>
                      <td>
                    </tr>
      
                    <tr>
                      <td> 3 </td>
                      <td> Brake Fluids </td>
                      <td> 2,000.00 </td>
                      <td> April 26, 2024</td>
                      <td> March 24, 2024</td>
                      <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                      </button>
                      <button type="button" class="btn btn-success  ">
                          <i class="mdi "></i> Submit </button>
                      <td>
                    </tr>
      
                    <tr>
                      <td> 4 </td>
                      <td> Shocks & Struts </td>
                      <td> 4,500.00 </td>
                      <td> April 20, 2024</td>
                      <td> March 24, 2024</td>
                      <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                      </button>
                      <button type="button" class="btn btn-success  ">
                          <i class="mdi "></i> Submit </button>
                      <td>
                    </tr>
      
                    <tr>
                      <td> 5 </td>
                      <td> Cylinders & Calipers </td>
                      <td> 6,500.00 </td>
                      <td> April 1, 2024</td>
                      <td> March 24, 2024</td>
                      <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                      </button>
                      <button type="button" class="btn btn-success  ">
                          <i class="mdi "></i> Submit </button>
                      <td>
                    </tr>
      
      
      
      
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>

    









    @endsection



