<x-app-layout>
    <x-slot name="header">
        <title> Autofixx Car Care Center | Repair History</title>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Repair History') }}
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
                    Link
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Vehicle
                </th>

                <th scope="col" class="px-6 py-3">
                    status
                </th>

                <th scope="col" class="px-6 py-3">
                    Date Finished
                </th>
                
            </tr>
        </thead>
        <tbody>
            {{-- <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a  data-modal-target="default-modal" data-modal-toggle="default-modal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Job Order</a>

                </th>
                <td class="px-6 py-4">
                    Toyota Fortuner
                </td>
                <td class="px-6 py-4">
                    On Going
                </td>
                <td class="px-6 py-4">
                    
                </td>


                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="vehicle-update" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Job Order</a>
                    </th>
                    <td class="px-6 py-4">
                        Toyota Fortuner
                    </td>
                    <td class="px-6 py-4">
                        Fixed
                    </td>
                    <td class="px-6 py-4">
                        Febuary 14, 2024
                    </td> --}}
                    

                    {{-- <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="vehicle-update" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Job Order</a>
                        </th>
                        <td class="px-6 py-4">
                            Toyota Innova
                        </td>
                        <td class="px-6 py-4">
                            Fixed
                        </td>
                        <td class="px-6 py-4">
                            December 19, 2023
                        </td>
                

                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="vehicle-update" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Job Order</a>
                            </th>
                            <td class="px-6 py-4">
                                Toyota Innova
                            </td>
                            <td class="px-6 py-4">
                                Fixed
                            </td>
                            <td class="px-6 py-4">
                                September 11, 2023
                            </td>


                  --}}
                



        </tbody>
    </table>
</div>

                 
               
    </div>
</div>

    </body>
       



<!-- Modal toggle -->

  
  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Rate our Service!
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
                  <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                     Please share us your experience with Autofixx Car Care Center by typing your experiences in the textbox, Thank you!
                  </p>
                  <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                        <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">  </input>
                    </div>
                  </p>
              </div>
              <!-- Modal footer -->
              <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                  <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
              </div>
          </div>
      </div>
  </div>
  



</body>
        
           
               
           
</x-app-layout>
