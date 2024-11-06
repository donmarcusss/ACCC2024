<x-app-layout>
    <x-slot name="header">
        <title> Autofixx Car Care Center | Booking</title>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Booking') }}
        </h2>
    </x-slot>

    <script src="https://cdn.tailwindcss.com"></script>
@vite('resources/css/app.css')


<style>
.status-pending {
    width: 7rem; /* Equivalent to w-28 in Tailwind CSS */
        
        color: white; /* Equivalent to text-white */
        background-color: #fbbf24; /* Equivalent to bg-yellow-500 */
        outline: none; /* Equivalent to focus:outline-none */
        font-weight: 500; /* Equivalent to font-medium */
        border-radius: 0.375rem; /* Equivalent to rounded-lg */
        font-size: 0.875rem; /* Equivalent to text-sm */
        padding: 0.25rem 0.75rem; /* Equivalent to px-3 py-1 */
        text-transform: uppercase;
}

.status-approved {
        width: 7rem; /* Equivalent to w-28 in Tailwind CSS */
        color: white; /* Equivalent to text-white */
        background-color: #38a169; /* Equivalent to bg-green-700 */
        outline: none; /* Equivalent to focus:outline-none */
        box-shadow: 0 0 0 4px transparent; /* For the focus ring effect */
        font-weight: 500; /* Equivalent to font-medium */
        border-radius: 0.375rem; /* Equivalent to rounded-lg */
        font-size: 0.875rem; /* Equivalent to text-sm */
        padding: 0.25rem 0.75rem; /* Equivalent to px-3 py-1 */
        text-transform: uppercase;
    }

    .status-cancelled {
        width: 7rem; /* Equivalent to w-28 in Tailwind CSS */
        color: white; /* Equivalent to text-white */
        background-color: red; /* Equivalent to bg-green-700 */
        outline: none; /* Equivalent to focus:outline-none */
        box-shadow: 0 0 0 4px transparent; /* For the focus ring effect */
        font-weight: 500; /* Equivalent to font-medium */
        border-radius: 0.375rem; /* Equivalent to rounded-lg */
        font-size: 0.875rem; /* Equivalent to text-sm */
        padding: 0.25rem 0.75rem; /* Equivalent to px-3 py-1 */
        text-transform: uppercase;
    }

    




    </style>
<body>
    <br>
    <div class="min-h-screen ">

        

    {{-- <div class="m-auto w-6/12 flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10" style="margin: auto;"> --}}
       
        

<div class="w-9/12 relative overflow-x-auto shadow-md sm:rounded-lg m-auto ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
        
            
            <tr>
                <th scope="col" class="px-6 py-3">
                    STATUS
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Reference Number
                </th>

                <th scope="col" class="px-6 py-3">
                    Date
                </th>

                <th scope="col" class="px-6 py-3">
                    Time
                </th>

                

                <th scope="col" class="px-6 py-3">
                    Vehicle
                </th>
                

                <th scope="col" class="px-6 py-3">
                    Description
                </th>

            </tr>
        </thead>
        <tbody>

            @foreach ($bookings as $booking)
                  <tr>
                    
                    <td class="px-6 py-4">
                        <span aria-expanded="false" role="button" tabindex="0" 
                            class="{{ $booking->status == 'pending' ? 'status-pending' : ($booking->status == 'approved' ? 'status-approved' : ($booking->status == 'cancelled' ? 'status-cancelled' : '')) }}">
                            {{ ucfirst($booking->status) }} <!-- Capitalizes the first letter -->
                        </span>
                    </td>
                    <td class="px-6 py-4">{{ $booking->formatted_id  }}</td> 
                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($booking->booking_date)->format('F-d-Y') }}</td>
                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($booking->booking_date)->format('h:i A') }}</td>
                    <td class="px-6 py-4"> {{ $booking->vehicle_manufacturer . ' ' . $booking->vehicle_type . ' ' . $booking->vehicle_model }}  </td>
                    <td class="px-6 py-4">  {{ $booking->description }}  </td>
                    
                </tr>  
                @endforeach 
                    
                    
                    
                  
                    
                  
                  
                  {{-- <td>
                     <a  class="btn btn-warning "  aria-expanded="false" href="{{ route('admin/appointments/edit', ['id'=>$booking->id]) }}">Edit</a>  
                     <a type="button" class="btn btn-danger " href="{{ route('admin/appointments/delete', ['id'=>$booking->id]) }}  aria-expanded="false">Delete</a>
                  </td> --}}
                  
                  
                 
                 
            
                














            {{-- <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th>
                    <p data-modal-hide="default-modal" type="button" class="w-28 ml-5 text-white bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center dark:bg-blue-600 dark:focus:ring-blue-800">PENDING</p>
                </th>
                <td class="px-6 py-4">
                    #93827438271
                </td>
                <td class="px-6 py-4">
                    10:00 AM
                </td>
                <td class="px-6 py-4">
                    May 1, 2024
                </td>
                <td class="px-6 py-4">
                    Toyota Fortuner
                </td>


                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th>
                        <p data-modal-hide="default-modal" type="button" class="w-28 ml-5 text-white bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center dark:bg-blue-600 dark:focus:ring-blue-800">APPROVED</p>
                    </th>
                    <td class="px-6 py-4">
                        #98738673829
                    </td>
                    <td class="px-6 py-4">
                        01:00 PM
                    </td>
                    <td class="px-6 py-4">
                        March 24, 2024
                    </td>
                    <td class="px-6 py-4">
                        Toyota Fortuner
                    </td>
                    

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th>
                            <p data-modal-hide="default-modal" type="button" class="w-28 ml-5 text-white bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center dark:bg-blue-600 dark:focus:ring-blue-800">CANCELLED</p>
                        </th>
                        <td class="px-6 py-4">
                            #38274867362
                        </td>
                        <td class="px-6 py-4">
                            11:00 AM
                        </td>
                        <td class="px-6 py-4">
                            April 3, 2024
                        </td>
                        <td class="px-6 py-4">
                            Toyota Fortuner
                        </td>
                

                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th>
                                <p data-modal-hide="default-modal" type="button" class="w-28 ml-5 text-white bg-blue-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center dark:bg-blue-600 dark:focus:ring-blue-800">FINISHED</p>
                            </th>
                            <td class="px-6 py-4">
                                #98726473621
                            </td>
                            <td class="px-6 py-4">
                                02:30 PM
                            </td>
                            <td class="px-6 py-4">
                                January 14, 2024
                            </td>
                            <td class="px-6 py-4">
                                Toyota Fortuner
                            </td>


                  --}}
                



        </tbody>
    </table>
</div>

                 
               
    </div>
</div>

    </body>
       
</body>
        
           
               
           
</x-app-layout>
