<x-app-layout>
    <x-slot name="header">
        <title> Autofixx Car Care Center | Vehicle Update </title>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Toyota Fortuner') }}
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
                    Services
                </th>
                <th scope="col" class="px-6 py-3">
                    Check List
                </th>
                <th scope="col" class="px-6 py-3">
                    Side Note
                </th>
                <th scope="col" class="px-6 py-3">
                    Update
                </th>
                <th scope="col" class="px-6 py-3">
                    Mechanic
                </th>
                <th scope="col" class="px-6 py-3">
                    Date & Time
                </th>
                <th scope="col" class="px-6 py-3">
                    Quotation
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <b>Oil Change</b>
                    <br>
                    Oil Purifier 1x
                </th>
                <td class="px-6 py-4">
                    <input
                    class
                    type="checkbox"
                    value=""
                    id="checkboxChecked"
                    checked />
                </td>
                <td class="px-6 py-4">
                    None
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Image</a>
                </td>
                <td class="px-6 py-4">
                   Hev Abi
                </td>

                <td class="px-6 py-4">
                    April 28, 2024 10:00 AM
                 </td>

                 <td class="px-6 py-4">
                    499.00
                 </td>


                 <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        
                        <b>Shocks & Struts</b>
                        <br>
                        Hydraulic Jack 1x
                    </th>
                    <td class="px-6 py-4">
                        <input
                        class
                        type="checkbox"
                        value=""
                        id="checkboxChecked"
                        checked />
                    </td>
                    <td class="px-6 py-4">
                        None
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Image</a>
                    </td>
                    <td class="px-6 py-4">
                       Hev Abi
                    </td>
    
                    <td class="px-6 py-4">
                        April 29, 2024 1:00 PM
                     </td>
    
                     <td class="px-6 py-4">
                        5,499.00
                     </td>
                    </TR>

                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                        </th>
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                          
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                           
                        </td>
        
                        <td class="px-6 py-4">
                            
                         </td>
        
                         <td class="px-6 py-4">
                            Total: 5,898.00
                         </td>

                



        </tbody>
    </table>
</div>

                 
               
    </div>
</div>

    </body>
       
</body>
        
           
               
           
</x-app-layout>
