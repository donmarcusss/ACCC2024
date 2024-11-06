<x-app-layout>
    <x-slot name="header">
        <title> Autofixx Car Care Center | Vehicle Update </title>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <script src="https://cdn.tailwindcss.com"></script>
@vite('resources/css/app.css')

<body>
    <br>
    <div class="min-h-screen ">

        

    {{-- <div class="m-auto w-6/12 flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10" style="margin: auto;"> --}}
       
        

        <div class="w-9/12 relative m-auto">
            @foreach ($tasks as $jobOrderId => $jobTasks)
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-6"> <!-- Individual container for each job order -->
                    <h2 class="text-lg font-semibold">Job Order ID: {{ $jobOrderId }}</h2>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="px-6 py-3"> Service </th>
                                <th scope="col" class="px-6 py-3"> Description </th>
                                <th scope="col" class="px-6 py-3"> Unit </th>   
                                <th scope="col" class="px-6 py-3"> Quantity </th>
                                <th scope="col" class="px-6 py-3"> Unit Cost </th>
                                <th scope="col" class="px-6 py-3"> Note </th>
                                <th scope="col" class="px-6 py-3"> Time Modifed </th>
                                <th scope="col" class="px-6 py-3"> Status </th>
                              
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobTasks as $task) <!-- Iterate over each task in the jobTasks collection -->
                                <tr>
                                    <td class="px-6 py-4">  {{ $task->equipment && $task->equipment->service ? $task->equipment->service->service_name : 'N/A' }} </td>
                                    <td class="px-6 py-4">{{ $task->equipment_name  }}</td>
                                    <td class="px-6 py-4"> {{ $task->equipment ? ($task->equipment->equipment_unit) : 'N/A' }}</td>
                                    <td class="px-6 py-4"> {{ $task->equipment ? ($task->equipment->equipment_quantity) : 'N/A' }}</td>
                                    <td class="px-6 py-4"> {{ $task->equipment ? number_format($task->equipment->equipment_price, 2) : 'N/A' }}</td>
                                    <td class="px-6 py-4">{{ $task->note  }}</td> 
                                    <td class="px-6 py-4">{{ $task->updated_at->format('h:i A') }}</td>
                                    <td class="px-6 py-4">{{ strtoupper($task->status) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- End of individual container -->
            @endforeach
        </div>

                 
               
    </div>
</div>

    </body>
       
</body>
        
           
               
           
</x-app-layout>
