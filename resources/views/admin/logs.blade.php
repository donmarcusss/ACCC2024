@extends('layouts.auth')

<head>
  <title> Autofixx Car Care Center | Logs</title>
</head>

@section('content')
<div class="content-wrapper">
<div class="card shadow-lg">
    <div class="card-body">
        <h4 class="card-title">Logs</h4>
        <BR>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> User ID </th>
                <th> Role </th>
                <th> Name </th>
                <th> Date </th>
                <th> Time </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>

                <tr>
                    <td> #97628473621 </td>
                    <td> <button type="button" class="btn btn-outline-primary btn-fw">Mechanic</button> </td>
                    <td> Hev Abi </td>
                    <td> May 1, 2024 </td>
                    <td> 03:54 PM </td>
                    <td> Edit the service </td>
                  </tr>


                  <tr>
                    <td> #95385736295 </td>
                    <td> <button type="button" class="btn btn-outline-primary btn-fw">Mechanic</button> </td>
                    <td> Hev Abi </td>
                    <td> May 1, 2024 </td>
                    <td> 01:52 PM </td>
                    <td> Add a service </td>
                  </tr>


                  <tr>
                    <td> #59483748573 </td>
                    <td> <button type="button" class="btn btn-outline-info btn-fw">Admin</button> </td>
                    <td> Ranniel San Jose </td>
                    <td> April 26, 2024 </td>
                    <td> 11:53 AM </td>
                    <td> Add a bill </td>
                  </tr>

                  <tr>
                    <td> #96857435867 </td>
                    <td> <button type="button" class="btn btn-outline-primary btn-fw">Mechanic</button> </td>
                    <td>   Hev Abi </td>
                    <td> April 26, 2024 </td>
                    <td> 01:53 PM</td>
                    <td> Add a service </td>
                  </tr>


                  <tr>
                    <td> #35787925986 </td>
                    <td> <button type="button" class="btn btn-outline-danger btn-fw">Secretary</button> </td>
                    <td> Raphnel San Jose </td>
                    <td> April 25, 2024 </td>
                    <td> 11:33 AM </td>
                    <td> Created a new bill </td>
                  </tr>
             

                  <tr>
                    <td> #32530975789 </td>
                    <td> <button type="button" class="btn btn-outline-info btn-fw">Admin</button> </td>
                    <td>  Ranniel San Jose </td>
                    <td>  April 1, 2024 </td>
                    <td> 10:00 AM </td>
                    <td> Add a new service </td>
                  </tr>


              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
    @endsection



