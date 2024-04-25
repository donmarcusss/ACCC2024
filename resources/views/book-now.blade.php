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
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-blue-950 md:text-2xl dark:text-white ">
                        Book an Appointment
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                    
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="lualhati@gmail.com" required="">
                        </div>
                        <div>
                            <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                            <input type="tel" name="phone_number" pattern="\+?[0-9]{1,3}?[0-9]{6,12}" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+63 920 119 9728" required="">
                        </div>
                        
                        <div>
                            <label for="vehicle_manufacturer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Manufacturer</label>
                            <input type="text" name="vehicle_manufacturer" id="vehicle_manufacturer"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
                        </div>
    
                        <div>
                            <label for="vehicle_manufacturer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Type</label>
                            <input type="text" name="vehicle_manufacturer" id="vehicle_manufacturer"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="SUV" required="">
                        </div>
    
                        <div>
                            <label for="vehicle_model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Model</label>
                            <input type="text" name="vehicle_model" id="vehicle_model" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="FORTUNER" required="">
                        </div>
    
                        <div>
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                            <input type="datetime-local" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+63 920 119 9728" required="">
                        </div>
    
    
                        
    
    
                    <br>
                               
                        <button type="submit" class="w-full text-white bg-blue-950 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    
    </body>
        
           
               
           
</x-app-layout>
