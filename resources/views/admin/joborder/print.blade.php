<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Autofixx Car Care Center | Print</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
   
    
    <meta charset="UTF-8">
    <title>Print Task</title>
    <style>
        /* Style for print format */
        body {
            font-family: Arial, sans-serif;
        }
        h1, h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .no-print {
            display: none; /* Hide elements when printing */
        }
    </style>
</head>
<body>

    <div class="relative overflow-x-auto">
        {{-- <table  class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <th scope="col" class="px-6 py-3">Customer Name:  </th>
            <br>
            <tr>
            <th scope="col" class="px-6 py-3">Vehicle: </th>
            </tr>
        </table> --}}

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3">Service</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Unit</th>
                    <th scope="col" class="px-6 py-3">Quantity</th>
                    <th scope="col" class="px-6 py-3">Unit Cost</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->service_name }}</td>
                        <td>{{ $task->equipment_name }}</td>
                        <td>{{ $task->equipment ? $task->equipment->equipment_unit : 'N/A' }}</td>
                        <td>{{ $task->equipment ? $task->equipment->equipment_quantity : 'N/A' }}</td> 
                        <td>{{ $task->equipment ? number_format($task->equipment->equipment_price, 2) : 'N/A' }}</td>
                    </tr>
                @endforeach
        
                {{-- Total Amount Row --}}
                <tr class="bg-gray-200">
                    <td colspan="4" class="px-6 py-4 text-center font-bold">Total Amount:</td>
                    <td class="px-6 py-4 text-center font-bold">
                        @php
                            $totalEquipmentPrice = $tasks->sum(function($task) {
                                return $task->equipment ? $task->equipment->equipment_price : 0;
                            });
                        @endphp
                        {{ number_format($totalEquipmentPrice, 2) }}
                    </td>
                </tr>
            </tbody>
        </table>
        
    
    <button onclick="window.print()" class="no-print">Print</button>
</body>
</html>