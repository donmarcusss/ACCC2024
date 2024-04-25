@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Job Order</title>
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
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create Job Order</a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
            
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
                <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>
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
                <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>
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
                <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>
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
                
                <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>
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
              
          
                
                
              <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>
                
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
                <td><button type="button" class="btn btn-info btn-icon-text"> Job Order <i class="badge badge-info"></i> </td>
              
                
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



