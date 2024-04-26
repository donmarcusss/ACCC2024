@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Services</title>
  </head>


@section('content')
<div class="content-wrapper">
    
<div class="card shadow-lg">
    
    <div class="card-body">
        
        <h4 class="card-title">SERVICES</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            <div class="col-12 grid-margin stretch-card">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create a Service</a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
            
            <thead>
              <tr>
                <th>
                ID
                </th>
                <th> Service Name </th>
                <th> Price </th>
                <th> Date Modified</th>
                <th> Date Created</th>
                <th> Action </th>
                <th> </th>
              </tr>
            </thead>


            <tbody>
              <tr>
                <td> 1 </td>
                <td> Change Oil </td>
                <td> 899.00 </td>
                <td> April 25, 2024</td>
                <td> March 24, 2024</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>

             
              <tr>
                <td> 2 </td>
                <td> Alignment </td>
                <td> 3,200.00 </td>
                <td> April 25, 2024</td>
                <td> March 24, 2024</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>

              <tr>
                <td> 3 </td>
                <td> Brake Fluids </td>
                <td> 2,000.00 </td>
                <td> April 26, 2024</td>
                <td> March 24, 2024</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>

              <tr>
                <td> 4 </td>
                <td> Shocks & Struts </td>
                <td> 4,500.00 </td>
                <td> April 20, 2024</td>
                <td> March 24, 2024</td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>

              <tr>
                <td> 5 </td>
                <td> Cylinders & Calipers </td>
                <td> 6,500.00 </td>
                <td> April 1, 2024</td>
                <td> March 24, 2024</td>
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



