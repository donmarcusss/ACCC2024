<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('My Car') }}  --}}
        </h2>

            <!-- Modal toggle -->
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="w-56 text-white bg-blue-950 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-xs px-12 py-3 " type="button">
                + Create your Vehicle
            </button>
            
            

    </x-slot>
    <title> Autofixx Car Care Center | My Car </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    
@vite('resources/css/app.css')

<body >
    
    
    
                        
  
  
  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow ">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                  <h3 class="text-xl font-semibold text-gray-900 ">
                      Create your vehicle
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5 space-y-4">
                <form class="space-y-4 md:space-y-6" action="{{ route('my-car.save') }}" method="POST">
                    @csrf

                   
                    <div>
                        <label for="vehicle_name" class="block mb-2 text-sm font-medium text-gray-900 ">Name your vehicle</label>
                        <input name="vehicle_name" id="vehicle_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  " placeholder="" required="">
                    </div>
                    
                    <label for="vehicle_type_id" class="block mb-2 text-sm font-medium text-gray-900">Vehicle Type</label>
                    <select id="vehicle-type" name="vehicle_type" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        <option value="">Select Vehicle Type</option>
                        @foreach($vehicleTypes as $type)
                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>

                    <label for="vehicle_manufacturer_id" class="block mb-2 text-sm font-medium text-gray-900">Vehicle Manufacturer</label>
                    <select id="vehicle-manufacturer" name="vehicle_manufacturer" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" disabled>
                        <option value="">Select Manufacturer</option>
                        @foreach($vehicleManufacturers as $manufacturer)
                            <option value="{{ $manufacturer->id }}">{{ $manufacturer->manufacturer }}</option>
                        @endforeach
                    </select>

                    <label for="vehicle_model_id" class="block mb-2 text-sm font-medium text-gray-900">Vehicle Model</label>
                    <select id="vehicle-model" name="vehicle_model" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" disabled>
                        <option value="">Select Model</option>
                    </select>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const typeSelect = document.getElementById('vehicle-type');
                            const manufacturerSelect = document.getElementById('vehicle-manufacturer');
                            const modelSelect = document.getElementById('vehicle-model');

                            function updateModels() {
                                const vehicleTypeId = typeSelect.value;
                                const vehicleManufacturerId = manufacturerSelect.value;

                                // Enable or disable the manufacturer dropdown based on vehicle type selection
                                manufacturerSelect.disabled = !vehicleTypeId;
                                // Enable or disable the model dropdown based on manufacturer selection
                                modelSelect.disabled = !(vehicleTypeId && vehicleManufacturerId);

                                if (vehicleTypeId && vehicleManufacturerId) {
                                    fetch(`/get-models?vehicle_type_id=${vehicleTypeId}&vehicle_manufacturer_id=${vehicleManufacturerId}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            modelSelect.innerHTML = '<option value="">Select Model</option>';
                                            for (const [id, model] of Object.entries(data)) {
                                                modelSelect.innerHTML += `<option value="${id}">${model}</option>`;
                                            }
                                        });
                                } else {
                                    modelSelect.innerHTML = '<option value="">Select Model</option>';
                                }
                            }

                            typeSelect.addEventListener('change', updateModels);
                            manufacturerSelect.addEventListener('change', updateModels);
                        });
                    </script>
                
                  {{-- <p class="text-base leading-relaxed text-gray-500">
                      The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                  </p> --}}
              </div>
              <!-- Modal footer -->
              <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                  <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-950 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Submit</button>
                  <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Cancel</button>
              </div>
          </div>
      </div>
  </div>
</form>

<br>

<div class="w-9/12 relative overflow-x-auto shadow-md sm:rounded-lg m-auto ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
        
            
            <tr>
                <th scope="col" class="px-6 py-3">
                    Vehicle Name
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Vehicle Brand
                </th>
                <th scope="col" class="px-6 py-3">
                    Vehicle Model
                </th>

                <th scope="col" class="px-6 py-3">
                    Vehicle Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Link
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($myCars as $mycar)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4">
                        
                        <p>{{ $mycar->vehicle_name }}</p>
                    
                </td>
        
               
        
                <td class="px-6 py-4">
                        
                        <p>{{ $mycar->vehicleManufacturer->manufacturer ?? 'N/A' }}</p>
                    
                </td>
        
                <td class="px-6 py-4">
                      
                        <p>{{ $mycar->vehicleModel->model ?? 'N/A' }}</p>
                   
                </td>
        

                <td class="px-6 py-4">
                        
                    <p>{{ $mycar->vehicleType->type ?? 'N/A' }}</p>
                
            </td>

                <td class="px-6 py-4">
                      
                    <p>LINK</p>
               
            </td>
               
            </tr>
            @endforeach
        </tbody>
        
            
                
        
                         {{-- <td class="px-6 py-4">
                            Total: 5,898.00
                         </td> --}}

                



        </tbody>
    </table>
</div>

                        
                        </div>
                    <br>     
                </div>
            </div>
         </div>
        </div>
    </body>
</x-app-layout>
