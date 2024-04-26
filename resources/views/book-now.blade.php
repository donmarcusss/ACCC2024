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
                            <select  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
                                <option>  </option>
                                <option> Audi </option>
                                <option>Chery</option>
                                <option>Chevrolet</option>
                                <option>Ford</option>
                                <option>Foton</option>
                                <option>GAC</option>
                                <option>Geely</option>
                                <option>Honda</option>
                                <option>Hyundai</option>
                                <option>Isuzu</option>
                                <option>Jac</option>
                                <option>Kia</option>
                                <option>Lexus</option>
                                <option>Mazda</option>
                                <option>MG</option>
                                <option>Mitsubishi</option>
                                <option>Nissan</option>
                                <option>Subaru</option>
                                <option>Suzuki</option>
                                <option>Toyota</option>





                              </select>
                           
                        </div>
    
                        <div>
                            <label for="vehicle_manufacturer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Type</label>
                            <select  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
                                <option>  </option>
                                <option> SUV </option>
                                <option> Sedan</option>
                                <option> Truck</option>
                                <option> Coupe</option>
                                <option> Van</option>
                                <option> Hybrid</option>
                                <option> Electric</option>
                                <option> Hatchback</option>
                                <option> Sports Car</option>




                              </select>
                        </div>
    
                        <div>
                            <label for="vehicle_model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Model</label>
                            <select  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
                                    <option></option>
                                    <option>A1</option>
                                    <option>A3</option>
                                    <option>A4</option>
                                    <option>A5</option>
                                    <option>A6</option>
                                    <option>A7</option>
                                    <option>A8</option>
                                    <option>Q2</option>
                                    <option>Q3</option>
                                    <option>Q5</option>
                                    <option>Q7</option>
                                    <option>Q8</option>
                                    <option>TT</option>
                                    <option>R8</option>
                                    <option>Arrizo 3</option>
                                    <option>Arrizo 5</option>
                                    <option>Arrizo 7</option>
                                    <option>Tiggo 2</option>
                                    <option>Tiggo 3</option>
                                    <option>Tiggo 4</option>
                                    <option>Tiggo 5</option>
                                    <option>Tiggo 7</option>
                                    <option>Tiggo 8</option>
                                    <option>EcoSport</option>
                                    <option>Everest</option>
                                    <option>Explorer</option>
                                    <option>Expedition</option>
                                    <option>Ranger</option>
                                    <option>Mustang</option>
                                    <option>Toplander</option>
                                    <option>Thunder</option>
                                    <option>Toano</option>
                                    <option>Gratour</option>
                                    <option>GA4</option>
                                    <option>GA8</option>
                                    <option>GS3</option>
                                    <option>GS4</option>
                                    <option>GS8</option>
                                    <option>Coolray</option>
                                    <option>Azkarra</option>
                                    <option>Okavango</option>
                                    <option>Brio</option>
                                    <option>City</option>
                                    <option>Civic</option>
                                    <option>Accord</option>
                                    <option>Jazz</option>
                                    <option>HR-V</option>
                                    <option>BR-V</option>
                                    <option>CR-V</option>
                                    <option>Odyssey</option>
                                    <option>Eon</option>
                                    <option>Reina</option>
                                    <option>Accent</option>
                                    <option>Veloster</option>
                                    <option>Kona</option>
                                    <option>Venue</option>
                                    <option>Ioniq</option>
                                    <option>Elantra</option>
                                    <option>Sonata</option>
                                    <option>Grand Starex</option>
                                    <option>Palisade</option>
                                    <option>Santa Fe</option>
                                    <option>Tucson</option>
                                    <option>Starex</option>
                                    <option>mu-X</option>
                                    <option>D-Max</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                    <option>S4</option>
                                    <option>S7</option>
                                    <option>M3</option>
                                    <option>M4</option>
                                    <option>M5</option>
                                    <option>T6</option>
                                    <option>T8</option>
                                    <option>Sunray</option>
                                    <option>Picanto</option>
                                    <option>Soluto</option>
                                    <option>Rio</option>
                                    <option>Stinger</option>
                                    <option>Sportage</option>
                                    <option>Seltos</option>
                                    <option>Sorento</option>
                                    <option>Grand Carnival</option>
                                    <option>UX</option>
                                    <option>NX</option>
                                    <option>RX</option>
                                    <option>GX</option>
                                    <option>LX</option>
                                    <option>ES</option>
                                    <option>LS</option>
                                    <option>RC</option>
                                    <option>LC</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>6</option>
                                    <option>CX-3</option>
                                    <option>CX-30</option>
                                    <option>CX-5</option>
                                    <option>CX-8</option>
                                    <option>CX-9</option>
                                    <option>MX-5</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>ZS</option>
                                    <option>RX5</option>
                                    <option>HS</option>
                                    <option>RX8</option>
                                    <option>Mirage</option>
                                    <option>Mirage G4</option>
                                    <option>Attrage</option>
                                    <option>ASX</option>
                                    <option>Outlander</option>
                                    <option>Montero Sport</option>
                                    <option>Strada</option>
                                    <option>Almera</option>
                                    <option>Sylphy</option>
                                    <option>Altima</option>
                                    <option>Juke</option>
                                    <option>X-Trail</option>
                                    <option>Terra</option>
                                    <option>Patrol Royale</option>
                                    <option>Navara</option>
                                    <option>Forester</option>
                                    <option>XV</option>
                                    <option>Outback</option>
                                    <option>Levorg</option>
                                    <option>WRX</option>
                                    <option>BRZ</option>
                                    <option>S-Presso</option>
                                    <option>Celerio</option>
                                    <option>Dzire</option>
                                    <option>Swift</option>
                                    <option>Ertiga</option>
                                    <option>XL7</option>
                                    <option>Jimny</option>
                                    <option>Wigo</option>
                                    <option>Vios</option>
                                    <option>Corolla Altis</option>
                                    <option>Camry</option>
                                    <option>86</option>
                                    <option>Yaris</option>
                                    <option>Rush</option>
                                    <option>Innova</option>
                                    <option>Fortuner</option>
                                    <option>Hilux</option>
                                    <option>FJ Cruiser</option>
                                    <option>Land Cruiser Prado</option>
                                    <option>Land Cruiser LC200</option>

                            </select>
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
