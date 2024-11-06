@extends('layouts.auth')

<head>
  <title> Autofixx Car Care Center | Schedule</title>
</head>

@section('content')
<div class="content-wrapper">
<div class="card shadow-lg">
    <div class="card-body">
        <h4 class="card-title">Edit</h4>
        <BR>
        

            {{-- <form action="" method="POST" class="space-y-4 md:space-y-6" >
                @csrf
                @method('PUT')
               

                <div>
                 


                  <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                  <input value="{{$users->first_name}}" type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                  @error('first_name')
                  <span class="text-danger">{{message}}</span>
                  @enderror
                  
                </div>
              

                <div>
                  <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                  <input value="{{$users->last_name}}" type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>


                <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                  <input value="{{$users->email}}" type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>

                <div>
                  <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                  <input value="{{$users->phone_number}}" type="integer" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
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
                  <input value="{{$users->password}}" type="text" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                </div>
                
                

                  <br>
                           
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button  type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                </div>

               
            </form> --}}


            <form action="{{route('admin.update' , $users->id )}}" method="POST" class="space-y-4 md:space-y-6" >
                @csrf
                @method('PUT')
            
                <div class="form-group">
                  <label for="exampleFormControlInput1" >First Name</label> <br>
                  <input value="{{$users->first_name}}" name="first_name" style="color: white;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Last Name</label>
                    <input value="{{$users->last_name}}" name="last_name" style="color: white;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                 <div class="form-group">
                  <label for="exampleFormControlInput1">Email</label>
                  <input value="{{$users->email}}" name="email" style="color: white;" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Phone Number</label>
                    <input value="{{$users->phone_number}}" name="phone_number" style="color: white;" type="integer" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input value="{{$users->password}}" name="password" style="color: white;" type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Role</label>
                  <select value="{{$users->user_type}}" name="user_type" style="color: white;" class="form-control" id="exampleFormControlSelect1">
                    <option value="{{$users->user_type}}">User</option>
                    <option value="{{$users->user_type}}">Mechanic</option>
                    <option value="{{$users->user_type}}">Secretary</option>
                    <option value="{{$users->user_type}}">Admin</option>
                  </select>
                </div>

                

                  <button type="submit" class="btn btn-warning "  aria-expanded="false">Update</button>
                
               
              </form>




        
      </div>
    </div>
    </div>
    @endsection



                
                
                
                