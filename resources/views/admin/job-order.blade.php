@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Job Order</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </head>


@section('content')
<div class="content-wrapper">
    
<div class="card shadow-lg">
    
    <div class="card-body">
        
        <h4 class="card-title">JOB ORDER</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            <div class="col-12 grid-margin stretch-card">


                

<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create Job Order</button>
</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create a Job Order
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
                
              <form class="space-y-4 md:space-y-6" action="#">


                <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                  <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
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
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Short description about the problem</label>
                    <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>

                <div>
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                    <input type="datetime-local" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+63 920 119 9728" required="">
                </div>


                


            <br>
                       
                
        </form>



            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
            </div>
        </div>
    </div>
</div>


                
                        
            
            <thead>
              <tr>
                <th>
                Link
                </th>
                <th> Name </th>
                <th> Reference Number </th>
                <th> Date </th>
                <th> Time</th>
                <th> Action </th>
                <th> </th>
              </tr>
            </thead>


            <tbody>
              <tr>
                <td><a href="update"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i></a> </td>
                <td><span class="ps-2">Hev Abi</span></td>
                <td> #1103 </td>
                <td> April 28, 2024</td>
                <td> 10:00 AM</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>

              <tr>
                <td><a href="update"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i></a> </td>
                <td><span class="ps-2">Hell Merry</span></td>
                <td> #6342 </td>
                <td> April 28, 2024</td>
                <td> 10:00 AM</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
                </td>
              </tr>

              <tr>
                <td><a href="update"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i></a> </td>
                <td><span class="ps-2">Saad Lechon</span></td>
                <td> #6969 </td>
                <td> April 28, 2024</td>
                <td> 1:30 PM</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>

                </td>
              </tr>
              <tr>
                
                <td><a href="update"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i></a> </td>
                <td><span class="ps-2">Sa Ad</span></td>
                <td> #6996 </td>
                <td> April 28, 2024</td>
                <td> 2:30 PM</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>
              
          
                
                
              <td><a href="update"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i></a> </td>
                
                <td><span class="ps-2">Arne Bana</span></td>
                <td> #1573 </td>
                <td> April 30, 2024</td>
                <td> 10:00 AM</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>

            </tr>


            

                
                </tr>
            </thead>
            <tbody>
              <td><a href="update"  class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i></a> </td>
              
                
                <td><span class="ps-2">Joshhh Ue</span></td>
                <td> #1236 </td>
                <td> May 1, 2024</td>
                <td> 11:00 AM</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>

              </tr>
                




              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
    @endsection



