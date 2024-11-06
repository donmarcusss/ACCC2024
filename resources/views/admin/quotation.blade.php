@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Quotation</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<style>
    @media print {
        /* Hide the create new quotation button during print */
        #createbuttonDropdown {
            display: none;
        }

        /* Hide the print button during print */
        #print-button {
            display: none;
        }

        /* Other print styles, if necessary */
        .content-wrapper {
            padding: 0; /* Remove padding */
        }

        /* Set text color to black for printing */
        body {
            color: black !important; /* Ensure all text is black */
            background-color: white !important; /* Ensure background is white */
        }
    }

    .status-pending {
        color: yellow;
        text-transform: uppercase;
        font-weight: bold;
    }

    .select-option {
        color: black; /* Change the text color to black */
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

    select {
        color: black; /* Text color for the select */
        background-color: white; /* Background color for the select */
        border: 1px solid #ccc; /* Border color */
    }
</style>

@section('content')
<div class="content-wrapper">    
    <div class="card shadow-lg">   
        <div class="card-body">
            
            <h4 class="card-title">QUOTATION</h4>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> Equipment </th>
                            <th> Equipment Price </th>
                            <th> Service </th>
                            <th> Labor </th>
                            <th> Amount </th>
                        </tr>
                    </thead>

                    @php
                    $total = 0; // Initialize total
                    @endphp
                    
                    @foreach ($quotations as $quotation)
                        <tr>
                            <td>{{ $quotation->equipment_name }}</td> 
                            <td>{{ number_format($quotation->equipment_price, 2) }}</td>
                            <td>{{ $quotation->service_name }}</td> 
                            <td>{{ number_format($quotation->service_price, 2) }}</td>  
                            <td>{{ number_format($quotation->service_price + $quotation->equipment_price, 2) }}</td>
                            @php
                                $total += $quotation->service_price + $quotation->equipment_price; // Accumulate total
                            @endphp
                        </tr>  
                    @endforeach 
                    
                    <tr>
                        <td colspan="4" style="text-align: right;">Total:</td> <!-- Adjust colspan as needed -->
                        <td>{{ number_format($total, 2) }}</td> <!-- Display total -->
                    </tr>
                </tbody>
                </table>

                <br>
                <!-- Print Button -->
                <button id="print-button" class="btn btn-primary mb-3">Print Quotations</button>
                
                <br>
                

                <!-- Modal toggle -->
                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create a new Quotation</button>
                
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
                                    Add a Quotation
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
                                <form action="{{ route('admin/quotation/save') }}" method="POST" class="space-y-4 md:space-y-6" >
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
                                    <br>
                                    <label for="equipment_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Equipment Name</label>
                                    <select name="equipment_name" id="equipment_name" required class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                                        <option value="">Choose an equipment</option>
                                        @foreach($equipments as $equipment)
                                            <option value="{{ $equipment->equipment_name }}" data-price="{{ $equipment->equipment_price }}">
                                                {{ $equipment->equipment_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <!-- Hidden input to hold the equipment price -->
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
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                                        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.getElementById('print-button').addEventListener('click', function() {
                        const printContents = document.querySelector('.table-responsive').innerHTML; // Get the contents of the quotation table
                        const originalContents = document.body.innerHTML; // Store the original body content

                        // Replace the body content with the table contents
                        document.body.innerHTML = printContents;

                        window.print(); // Trigger the print dialog

                        // Restore the original body content after printing
                        document.body.innerHTML = originalContents;
                        window.location.reload(); // Reload to reinitialize event listeners
                    });
                </script>



            </div>
            <a type="button" class="btn btn-danger " href="{{ route('admin.quotation.delete', ['id'=>$quotation->id]) }}  aria-expanded="false">Delete</a>
        </div>
        
    </div>
    
</div>

@endsection
