@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Billing</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </head>


@section('content')
<div class="content-wrapper">
    
<div class="card shadow-lg">
    
    <div class="card-body">
        
        <h4 class="card-title">BILLING</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            <div class="col-12 grid-margin stretch-card">


                

<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create an Invoice Form</button>
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
                    Invoice Form
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
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job Order ID</label>
                  <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
              </div>
    
                       
                <div>
                    <label for="vehicle_manufacturer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
                        <option>  </option>
                        <option> Pending </option>
                        <option>Paid </option>




                      </select>
                   
                </div>

                <div>
                    <label for="vehicle_manufacturer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount to be Paid</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">




                      </select>
                </div>





                <div>
                    <label for="vehicle_model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Price</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                
               


                


            <br>
                       
                
        </form>



            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
            </div>
        </div>
    </div>
</div>


                
                        
            
            <thead>
              <tr>
                <th>
                    Status
                </th>
                <th> Amount to be Paid	  </th>
                <th> Total Price </th>
                <th> Name </th>
                <th> Date</th>
                <th> Time </th>
                <th> Action & Link</th>
              </tr>
            </thead>


            <tbody>
              <tr>
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
              </tr>



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



