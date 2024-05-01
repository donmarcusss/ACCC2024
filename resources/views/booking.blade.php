<x-app-layout>
    <x-slot name="header">
        <title> Autofixx Car Care Center | Booking</title>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Booking') }}
        </h2>
    </x-slot>

    <script src="https://cdn.tailwindcss.com"></script>
@vite('resources/css/app.css')

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
                    Time
                </th>

                <th scope="col" class="px-6 py-3">
                    Date
                </th>

                <th scope="col" class="px-6 py-3">
                    Vehicle
                </th>
                
            </tr>
        </thead>
        <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
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


                 
                



        </tbody>
    </table>
</div>

                 
               
    </div>
</div>

    </body>
       
</body>
        
           
               
           
</x-app-layout>
