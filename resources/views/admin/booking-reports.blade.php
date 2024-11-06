@extends('layouts.auth')

<head>
  <title> Autofixx Car Care Center | Booking Reports</title>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 
</head>

@section('content')
<div class="content-wrapper">
<div class="card shadow-lg">
    <div class="card-body">
        <h4 class="card-title">BOOKING REPORTS</h4>
        <BR>
            
       
    <!-- Dropdown for Sorting Options -->
    <div class="mb-3">
      <form action="{{ route('admin.booking-reports') }}" method="GET" class="form-inline">
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
        </select>
        <br>
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

  <!-- Table Structure -->
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Vehicle</th>
            <th>Booking Date</th>
            <th>Status</th>
            <!-- Add other columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td>{{ $booking->user->first_name ?? 'N/A' }} {{ $booking->user->last_name ?? '' }}</td>
            <td>{{ $booking->vehicle_manufacturer }} {{ $booking->vehicle_model ?? '' }} {{ $booking->vehicle_type ?? '' }}</td>
            <td class="px-6 py-4">{{ \Carbon\Carbon::parse($booking->booking_date)->format('F-d-Y') }} - {{ \Carbon\Carbon::parse($booking->booking_date)->format('h:i A') }}</td>
            <td>{{ $booking->status }}</td>
            <!-- Add other columns as needed -->
        </tr>
        @endforeach
    </tbody>
</table>

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

<script>
    $(document).ready(function() {
        $('#user_id').select2({
            placeholder: "All Users",
            allowClear: true,
            width: '100%' // Ensures the dropdown matches the width of the container
        });
    });
    </script>
</div>
@endsection



