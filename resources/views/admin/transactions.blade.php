@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Transaction</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />



    <style>
        .status-pending {
         color: yellow;
         text-transform: uppercase;
         font-weight: bold;
     }
    
    
     .status-down-payment {
         color: orange;
         text-transform: uppercase;
         font-weight: bold;
     }
    
     
     .status-paid {
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
  </head>


@section('content')
<div class="content-wrapper">
    
<div class="card shadow-lg">
    
    <div class="card-body">
        
        <h4 class="card-title">TRANSACTION</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            <div class="col-12 grid-margin stretch-card">


                

                
                        
            
            <thead>



                
                                           <!-- Status Filter Field -->
<form method="GET" action="{{ route('admin.transactions') }}" class="mb-4">
    <label for="status" class="mr-2">Filter by Status:</label> <br>
    <select name="status" id="status" class="form-control d-inline w-auto" onchange="this.form.submit()" style="color: white;">
        <option value="" {{ request('status') == '' ? 'selected' : '' }}>All</option> <!-- Add "All" option -->
        
        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>PENDING</option>
        <option value="paid" {{ request('status') == 'paid' ? 'paid' : '' }}>PAID</option>
        <option value="down_payment" {{ request('status') == 'down-payment' ? 'selected' : '' }}>DOWN PAYMENT</option>
        <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>CANCELLED</option>
    </select>
  </form>




              <tr>
                
                <th>
                    Status
                </th>
                <th> Total </th>
                <th> Balance </th>
                <th> Down Payment </th>
                <th> Name </th>
                <th> Vehicle </th>
                <th> Date</th>
                <th> Action </th>
                <th> Link to Job Order </th>
              </tr>
            </thead>


            <tbody>
                @foreach ($transactions as $transaction)
                <tr>
                    <td>
                        <span aria-expanded="false" role="button" tabindex="0"
                            class="{{ 
                                $transaction->status == 'pending' ? 'status-pending' : 
                                ($transaction->status == 'paid' ? 'status-paid' : 
                                ($transaction->status == 'down-payment' ? 'status-down-payment' : 
                                ($transaction->status == 'cancelled' ? 'status-cancelled' : '')))
                            }}">
                            {{ ucfirst($transaction->status) }} <!-- Capitalizes the first letter -->
                        </span>
                    </td>
                    <td>{{ number_format($transaction->total, 2) }}</td>
                    <td>{{ number_format($transaction->balance, 2) }}</td>
                    <td>{{ number_format($transaction->down_payment, 2) }}</td>
                    <td>{{ optional($transaction->jobOrder->booking->user)->first_name }} {{ optional($transaction->jobOrder->booking->user)->last_name }}</td>
                    <td>{{ $transaction->jobOrder->booking->vehicle_manufacturer }} {{ $transaction->jobOrder->booking->vehicle_model }} {{ $transaction->jobOrder->booking->vehicle_type }}</td>
                    <td>{{ \Carbon\Carbon::parse($transaction->jobOrder->booking->booking_date)->format('F-d-Y') }}</td>
                    <td><a href="{{ route('admin.transactions.edit', $transaction->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('admin/joborder/task', ['job_order_id' => $transaction->jobOrder->id]) }}" class="btn btn-info">Job Order</a></td>
                </tr>
            @endforeach
             
              


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
                        Edit Transaction
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



