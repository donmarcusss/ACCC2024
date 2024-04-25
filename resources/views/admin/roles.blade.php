@extends('layouts.auth')

<head>
    <title> Autofixx Car Care Center | Roles</title>
  </head>


@section('content')
<div class="content-wrapper">
<div class="card shadow-lg">
    <div class="card-body">
        <h4 class="card-title">USER ROLES</h4>
        
        <BR>
        <div class="table-responsive">
          <table class="table">
            <div class="col-12 grid-margin stretch-card">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New User</a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
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
              <tr>
                <td> 1 </td>
                <td><span class="ps-2">Hev Abi</span></td>
                <td> hev.abi@gmail.com  </td>
                <td> <button type="button" class="btn btn-outline-info btn-fw">Admin</button> </td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>

              <tr>
                <td> 2 </td>
                <td><span class="ps-2">Puroy Bueneventura</span></td>
                <td> puroy.bueneventura@gmail.com </td>
                <td> <button type="button" class="btn btn-outline-primary btn-fw">Mechanic</button> </td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
                </td>
              </tr>

              <tr>
                <td> 3 </td>
                <td><span class="ps-2">Saad Lechon</span></td>
                <td> puroy.bueneventura@gmail.com </td>
                <td> <button type="button" class="btn btn-outline-secondary btn-fw">User</button> </td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>

                </td>
              </tr>
              <tr>
                
                <td> 4 </td>
                <td><span class="ps-2">Sa Ad</span></td>
                <td> sa.ad@gmail.com</td>
                <td> <button type="button" class="btn btn-outline-secondary btn-fw">User</button> </td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>
              </tr>
              
          
                
                
             
                <td> 5 </td>
                <td><span class="ps-2">Arne Bana</span></td>
                <td> bana.arne@ue.edu.ph </td>
                <td> <button type="button" class="btn btn-outline-secondary btn-fw">User</button> </td>
                <td><button type="button" class="btn btn-warning "> Edit <i class="mdi  "></i>
                </button>
                <button type="button" class="btn btn-success  ">
                    <i class="mdi "></i> Submit </button>
                <td>

            </tr>


            

                
                </tr>
            </thead>
            <tbody>
                
              
                <td> 8 </td>
                <td><span class="ps-2">Joshhh Ue</span></td>
                <td> joshue.mariano@gmail.com </td>
                <td> <button type="button" class="btn btn-outline-danger btn-fw">Secretary</button> </td>
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



