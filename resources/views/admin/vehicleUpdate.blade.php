<x-app-layout>
  <x-slot name="header">
      <title> Autofixx Car Care Center | Vehicle Update </title>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Vehicle Update') }}
      </h2>
  </x-slot>

  <script src="https://cdn.tailwindcss.com"></script>
@vite('resources/css/app.css')

<body>
  <br>
  <div class="min-h-screen ">

      

  {{-- <div class="m-auto w-6/12 flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10" style="margin: auto;"> --}}
     
      

    <div class="w-9/12 relative overflow-x-auto shadow-md sm:rounded-lg m-auto ">
        @foreach ($tasks as $jobOrderId => $jobTasks)
            <h2 class="text-lg font-semibold">Job Order ID: {{ $jobOrderId }}</h2>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mb-6">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Equipment</th>
                        <th scope="col" class="px-6 py-3">Equipment Price</th>
                        <th scope="col" class="px-6 py-3">Service</th>
                        <th scope="col" class="px-6 py-3">Service Price</th>
                        <th scope="col" class="px-6 py-3">Note</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobTasks as $task)
                        <tr>
                            <td>  {{ $task->equipment && $task->equipment->service ? $task->equipment->service->service_name : 'N/A' }} </td>
                            
                            <td>{{ number_format($task->service_price, 2) }}</td>
                            <td>{{ $task->note }}</td>
                            <td>{{ strtoupper($task->status) }}</td>
                            <td>{{ number_format($task->service_price + $task->equipment_price, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
    </div>

               
             
  </div>
</div>

  </body>
     
</body>
      
         
             
         
</x-app-layout>
