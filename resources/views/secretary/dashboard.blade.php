@extends('layouts.sec')

<head>
  <title> Autofixx Car Care Center | Dashboard</title>
</head>

@section('content')
<div class="content-wrapper">
  
    <div class="row">
      
      <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
          <div class="card-body py-0 px-0 px-sm-3">
            <div class="row align-items-center">
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Scheduled for today</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0">2</h2>
                
                </div>
                <h6 class="text-muted font-weight-normal"></h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Pending Job Order</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0">3</h2>
                  <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                </div>
                <h6 class="text-muted font-weight-normal"> </h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Pending Appointments</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0">6</h2>
                  <p class="text-danger ms-2 mb-0 font-weight-medium"> </p>
                </div>
                <h6 class="text-muted font-weight-normal"></h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-12 grid-margin">
      
        <div class="card shadow-lg">
          <div class="card-body">
              <h4 class="card-title">UPCOMING APPOINTMENTS</h4>
              <BR>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            
                          </label>
                        </div>
                      </th>
                      <th> Date </th>
                      <th> Time </th>
                      <th> Name </th>
                      <th> Reference Number</th>
                      <th> Description </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td> April 28, 2024</td>
                      <td> 10:00 AM</td>
                      <td>
                        <span class="ps-2">Hev Abi</span>
                      </td>
                      <td> #1103 </td>
                      <td> Radiator leaks </td>
                      
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
      
                      </td>
                      <td> April 28, 2024</td>
                      <td> 10:00 AM</td>
                      <td>
                        <span class="ps-2">Hell Merry</span>
                      </td>
                      <td> #6342 </td>
                      <td> Change oil </td>
                      
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                     
                      <td> April 28, 2024</td>
                      <td> 1:30 PM</td>
                      <td>
                        <span class="ps-2">Saad Lechon</span>
                      </td>
                      <td> #6969 </td>
                      <td> Squeaking brakes </td>
                      
      
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                     
                      <td> April 28, 2024</td>
                      <td> 2:30 PM</td>
                      <td>
                        <span class="ps-2">Sa Ad</span>
                      </td>
                      <td> #6996 </td>
                      <td> nasira windshield na suntok ko </td>
                      
                    </tr>
                    
                
                      
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                     
                      <td> April 30, 2024</td>
                      <td> 10:00 AM</td>
                      <td>
                        <span class="ps-2">Arne Bana</span>
                      </td>
                      <td> #1573 </td>
                      <td> pag kinaliwa ko manibela, kumakanan </td>
                      
      
                  </tr>
      
      
                  
      
                      
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                    
                      <td> May 1, 2024</td>
                      <td> 11:00 AM</td>
                      <td>
                        <span class="ps-2">Joshhh Ue</span>
                      </td>
                      <td> #1236 </td>
                      <td> I really don't know </td>
                      
      
                    </tr>
                      
      
      
      
      
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>


      </div>
    </div>
  </div>
@endsection