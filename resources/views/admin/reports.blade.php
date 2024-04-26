@extends('layouts.auth')

<head>
  <title> Autofixx Car Care Center | Reports</title>
</head>

@section('content')
<div class="content-wrapper">
<div class="card shadow-lg">
    <div class="card-body">
        <h4 class="card-title">REPORTS</h4>
        <BR>
            
        <div class="table-responsive">

            <table class="">
                <tr>
                    
            Filter by
            <br>
            <div class="dropdown">
              <th>  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Booking </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  
                  <a class="dropdown-item" href="#">Job Order</a>
                  <a class="dropdown-item" href="#">Booking</a>
                  
                  </th>

                
            </tr>
            </table>
                <br>
            <table class="">
                <tr>
                    
            Data range
            <br>
            <div class="dropdown">
              <th>  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> All </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
              
                  <a class="dropdown-item" href="#">Daily</a>
                  <a class="dropdown-item" href="#">Monthly</a>
                  <a class="dropdown-item" href="#">Yearly</a>
                  </th>

                
            </tr>
            </table>



          <table class="table">
            <br><br><br>
            <thead>
              <tr>
                <th>
                  Reference Number
                </th>
                <th> Date </th>
                <th> Time </th>
                <th> Name </th>
                <th> Vehicle Type </th>
                <th> Vehicle Manufacturer </th>
                <th> Vehicle Model </th>
                <th> Job Order</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#1103</td>
                <td> April 28, 2024 </td>
                <td> 10:00 AM </td>
                <td>
                  <span class="ps-2">Hev Abi</span>
                </td>
                <td> Van </td>
                <td> Toyota </td>
                <td> Hiace </td>
                <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>
                
              </tr>
              <tr>
        
                <td>#6342</td>
                <td> April 28, 2024 </td>
                <td> 1:00 PM </td>
                <td>
                  <span class="ps-2">Hell Merry</span>
                </td>
                <td> SUV </td>
                <td> Toyota </td>
                <td> Fortuner </td>
                <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>
                
                
              </tr>
              <tr>
                <td>#6969</td>
                <td> April 29, 2024 </td>
                <td> 1:30 PM </td>
                <td>
                  <span class="ps-2">Sa Ad</span>
                </td>
                <td> Sedan </td>
                <td> Toyota </td>
                <td> Vios </td>
                <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>
              </tr>
              <tr>
                <td>#6996</td>
                <td> April 28, 2024 </td>
                <td> 3:00 PM </td>
                <td>
                  <span class="ps-2">Saad Lechon</span>
                </td>
                <td> Sedan </td>
                <td> Toyota </td>
                <td> Camry </td>
                <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>
                
              </tr>
              
          
                
              <td>#6342</td>
              <td> April 29, 2024 </td>
              <td> 11:00 AM </td>
              <td>
                <span class="ps-2">Arne Bana</span>
              </td>
              <td> Sedan</td>
              <td> Mazda </td>
              <td> 3 </td>
              <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>

            </tr>


            

                
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>#6424</td>
                <td> May 1, 2024 </td>
                <td> 1:30 PM </td>
                <td>
                  <span class="ps-2">Joshhh Ue</span>
                </td>
                <td> SUV </td>
                <td> Mitsubishi </td>
                <td> Montero </td>
                <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>  
                

              </tr>
                




              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
    @endsection



