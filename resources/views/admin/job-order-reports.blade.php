@extends('layouts.auth')

<head>
  <title> Autofixx Car Care Center | Job Order Reports</title>
</head>

@section('content')
<div class="content-wrapper">
<div class="card shadow-lg">
    <div class="card-body">
        <h4 class="card-title">JOB ORDER REPORTS</h4>
        <BR>
            
       
    <!-- Dropdown for Sorting Options -->
    <div class="mb-3">
      <form action="{{ route('admin.job-order-reports') }}" method="GET" class="form-inline">
          <label for="filter" class="mr-2">Sort by:</label>
          <select name="filter" id="filter" class="form-control" onchange="this.form.submit()" style="color:white;">
            <option value="">All Time</option>
            <option value="last_week" {{ request('filter') == 'last_week' ? 'selected' : '' }}>Last Week</option>
            <option value="last_month" {{ request('filter') == 'last_month' ? 'selected' : '' }}>Last Month</option>
            <option value="this_week" {{ request('filter') == 'this_week' ? 'selected' : '' }}>This Week</option>
            <option value="today" {{ request('filter') == 'today' ? 'selected' : '' }}>Today</option>
            <option value="last_year" {{ request('filter') == 'last_year' ? 'selected' : '' }}>Last Year</option>
        </select>
        <br>
        <label for="status" class="ml-3 mr-2">Filter by Status:</label>
        <select name="status" id="status" class="form-control" onchange="this.form.submit()" style="color:white;">
            <option value="">All</option>
            <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
            <option value="canceled" {{ request('status') == 'canceled' ? 'selected' : '' }}>Canceled</option>
            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
        </select> <br>

        <label for="user_id" class="ml-3 mr-2">Filter by User:</label>
        <select name="user_id" id="user_id" class="form-control" onchange="this.form.submit()" style="color:white;">
            <option value="" {{ request('user_id') == null ? 'selected' : '' }}>All</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                    {{ $user->first_name }} {{ $user->last_name }}
                </option>
            @endforeach
        </select>
      </form>
  </div>
  <br>


   <!-- Print Button -->
<button type="button" class="btn btn-primary mb-3" onclick="printTable()">Print</button>
<br><br>

  <table class="table">
      <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Vehicle</th>
              <th>Booked Date</th>
              <th>Status</th>
              <!-- Add other columns as needed -->
          </tr>
      </thead>
      <tbody>
          @foreach($job_orders as $job_order)
          <tr>
              <td>{{ $job_order->formatted_id }}</td>
              <td>{{ $job_order->booking->user->first_name ?? 'N/A' }} {{ $job_order->booking->user->last_name ?? '' }}</td>
              <td>{{ $job_order->vehicle_manufacturer }} {{ $job_order->vehicle_model ?? '' }} {{ $job_order->vehicle_type ?? '' }}</td>
              <td class="px-6 py-4">{{ \Carbon\Carbon::parse($job_order->booking->booking_date)->format('F-d-Y') }} - {{ \Carbon\Carbon::parse($job_order->booking->booking_date)->format('h:i A') }}</td>
              <td>{{ $job_order->status }}</td>
              <!-- Add other columns as needed -->
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection


<script>
    function printTable() {
        const printContents = document.querySelector('.table').outerHTML;
        const originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        location.reload();
    }
    </script>



