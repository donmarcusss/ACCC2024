@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Roles</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  </head>


@section('content')
<div class="content-wrapper">
<div class="card shadow-lg">
    <div class="card-body">
        <h4 class="card-title">USER ROLES</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
           
                
              

                <!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">+ Create a New User</button>
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
                    Create a User
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>




            <!-- CREATE AN ACCOUNT -->


            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                
              <form action="{{ route('admin/roles/save') }}" method="POST" class="space-y-4 md:space-y-6" >
                @csrf

                <div>
                  <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                  @error('first_name')
                  <span class="text-danger">{{message}}</span>
                  @enderror
                </div>
              

                <div>
                  <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                  <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>


                <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                  <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>

                <div>
                  <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                  <input type="integer" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
        
                       
                <div>
                    <label for="user_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                    <select  name="user_type" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="TOYOTA" required="">
                        <option value="user"> User  </option>
                        <option value="mechanic"> Mechanic </option>
                        <option value="secretary">Secretary </option>
                        <option value="admin">Admin </option>
                      </select>
                </div>


                <div>
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                  <input type="text" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                
                

                  <br>
                            <!-- Modal footer -->
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button  type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                </div>
              </form>



        <!-- END OF CREATE AN ACCOUNT -->







            </div>
            
            
        </div>
    </div>
</div>




            <thead>
              <tr>
                <th>ID </th>
                <th> Name </th>
                <th> Email </th>
                <th>Role </th>
                <th> Action </th>
                
              </tr>
            </thead>


            <tbody>
              @foreach ($users as $user)
                <tr>
                <td>{{ $user->id }}</td>
                <td><span class="ps-2">{{ $user->first_name . " " . $user->last_name }}</span></td>
                <td> {{ $user->email }}  </td>
                <td> <button type="button" class="btn btn-outline-info btn-fw">{{ $user->user_type }}</button> </td>
                
                <td>
                   <a  class="btn btn-warning "  aria-expanded="false" href="{{ route('admin/edit', ['id'=>$user->id]) }}">Edit</a>  
                   <a type="button" class="btn btn-danger " href="{{ route('admin/delete', ['id'=>$user->id]) }}  aria-expanded="false">Delete</a>
                </td>
                
                {{-- <td> <button  href="forms">Eddit</button> --}}
              
                {{-- <td> <button type="button" class="btn btn-danger  ">
                    <i class="mdi "></i> Delete </button> --}}
               
              </tr>
              <tr>
              </tr>  
              @endforeach 
              
              {{-- <tr>
                <td> 2 </td>
                <td><span class="ps-2">Puroy Bueneventura</span></td>
                <td> puroy.bueneventura@gmail.com </td>
                <td> <button type="button" class="btn btn-outline-primary btn-fw">Mechanic</button> </td>
                <td> <button data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="btn btn-warning " id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">Eddit</button>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                </td>
              </tr>

              <tr>
                <td> 3 </td>
                <td><span class="ps-2">Saad Lechon</span></td>
                <td> puroy.bueneventura@gmail.com </td>
                <td> <button type="button" class="btn btn-outline-secondary btn-fw">User</button> </td>
                <td> <button data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="btn btn-warning " id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">Eddit</button>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                </td>
              </tr>
              <tr>
                
                <td> 4 </td>
                <td><span class="ps-2">Sa Ad</span></td>
                <td> sa.ad@gmail.com</td>
                <td> <button type="button" class="btn btn-outline-secondary btn-fw">User</button> </td>
                <td> <button data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="btn btn-warning " id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">Eddit</button>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                </td>
              </tr>
              
          
                
                
             
                <td> 5 </td>
                <td><span class="ps-2">Arne Bana</span></td>
                <td> bana.arne@ue.edu.ph </td>
                <td> <button type="button" class="btn btn-outline-secondary btn-fw">User</button> </td>
                <td> <button data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="btn btn-warning " id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="forms">Edditt</button>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                </td> --}}

            </tr>


            

                
           




              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>



 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>





    <!-- Main modal -->
    <div id="edit-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit Role
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>


                
           
    
    
                
            </div>

    </div>

@endsection