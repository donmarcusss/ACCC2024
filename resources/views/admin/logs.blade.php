<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Book Now') }}
      </h2>
  </x-slot>
  <title> Autofixx Car Care Center | Book Now </title>
  <script src="https://cdn.tailwindcss.com"></script>
  
  
@vite('resources/css/app.css')

<body >
  
  <div class="min-h-screen ">
      
      <div class="flex flex-col items-center px-6 py-8 mx-auto h-screen lg:py-0">
          <br>
          <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 ">
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                  <h1 class="text-xl font-bold leading-tight tracking-tight text-blue-950 md:text-2xl  ">
                      Book an Appointment
                  </h1>
                  
                      

                      {{-- <div>
                          <label for="vehicle-type" class="block mb-2 text-sm font-medium text-gray-900">Vehicle Name</label>
                          <select id="vehicle-type" name="vehicle_type" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                              <option value="">Select Vehicle Type</option>
                              @foreach($cars as $car)
                                  <option value="{{ $car->vehicle_type }}" 
                                      data-manufacturer="{{ $car->vehicleManufacturer ? $car->vehicleManufacturer->manufacturer : 'N/A' }}" 
                                      data-model="{{ $car->vehicleModel ? $car->vehicleModel->model : 'N/A' }}">
                                      {{ $car->vehicle_name }}
                                  </option>
                              @endforeach
                          </select>
                      </div> --}}
                      
                      <div>
                          <label for="vehicle-manufacturer" class="block mb-2 text-sm font-medium text-gray-900">Vehicle Brand</label>
                          <select id="vehicle-manufacturer" name="vehicle_manufacturer" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                              
                          </select>
                      </div>
                      
                      <div>
                          <label for="vehicle-model" class="block mb-2 text-sm font-medium text-gray-900">Vehicle Model</label>
                          <select id="vehicle-model" name="vehicle_model" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                              
                          </select>
                      </div>
                      

                      
                  <script>
                     document.getElementById('vehicle-type').addEventListener('change', function() {
  const selectedOption = this.options[this.selectedIndex];

  // Get the manufacturer and model from data attributes
  const manufacturer = selectedOption.getAttribute('data-manufacturer');
  const model = selectedOption.getAttribute('data-model');

  // Clear current options in brand and model dropdowns
  const brandSelect = document.getElementById('vehicle-manufacturer');
  const modelSelect = document.getElementById('vehicle-model');

  // Clear existing options
  brandSelect.innerHTML = '<option value="">Select Vehicle Brand</option>'; // Default option
  modelSelect.innerHTML = '<option value="">Select Vehicle Model</option>'; // Default option

  // Populate brand dropdown
  if (manufacturer) {
      const option = document.createElement('option');
      option.value = manufacturer; // Assuming manufacturer is the ID
      option.textContent = manufacturer; // Assuming manufacturer is the name
      brandSelect.appendChild(option);
  }

  // Populate model dropdown
  if (model) {
      const option = document.createElement('option');
      option.value = model; // Assuming model is the ID
      option.textContent = model; // Assuming model is the name
      modelSelect.appendChild(option);
  }
});
                  </script>
                  
              

                      
                          
                      
                          
                      
                      <div>
                          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Others</label>
                          <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  " placeholder="" required="">
                      </div>

                      <div>
                          <label for="booking_date" class="block mb-2 text-sm font-medium text-gray-900 ">Date</label>
                          <input 
                              type="datetime-local" 
                              id="booking_date" 
                              name="booking_date" 
                              min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}T09:00" 
                              class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                              required=""
                          >
                      
                          <!-- Error message container -->
                          <div id="booking_date_error" class="mt-2 text-sm text-red-600" style="display: none;">
                              You can only choose a time between 9 AM and 5 PM.
                          </div>
                      </div>
                      
                      <script>
                          document.getElementById('booking_date').addEventListener('change', function() {
                              const bookingDate = new Date(this.value);
                              const hours = bookingDate.getHours();
                              const errorElement = document.getElementById('booking_date_error');
                              
                              // Check if the time is outside of 9 AM to 5 PM
                              if (hours < 9 || hours >= 17) {
                                  errorElement.style.display = 'block'; // Show the error message
                                  this.value = ''; // Clear the invalid input
                              } else {
                                  errorElement.style.display = 'none'; // Hide the error message if valid
                              }
                          });
                      </script>
  
                      
                      <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b ">
<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="w-full text-white bg-blue-950 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
  Submit
</button>

<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Terms of Service
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
                <p class="text-base leading-relaxed text-gray-500">
                  The Autofixx Car Care Center will call you right away after submitting the form to confirm your booking. Hang in right there!
                </p>
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
</div>
</form>

                      
           
  
  
  </body>
      
         
             
         
</x-app-layout>
