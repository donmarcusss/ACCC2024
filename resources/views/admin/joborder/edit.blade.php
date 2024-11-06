@extends('layouts.auth')

<head>
  <title> Autofixx Car Care Center | Edit </title>
</head>

@section('content')
<div class="content-wrapper">
<div class="card shadow-lg">
    <div class="card-body">
        <h4 class="card-title">Edit Status</h4>
        <BR>
        

           
            
            <form action="{{route('admin.joborder.update' , $job_orders->id )}}" method="POST" class="space-y-4 md:space-y-6" >
                @csrf
                @method('PUT')
            
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required style="color: white;">
                    <option value="">Select Status</option>
                    <option value="pending" {{ old('status', $job_orders->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="on-going" {{ old('status', $job_orders->status) == 'on-going' ? 'selected' : '' }}>On-Going</option>
                    <option value="finished" {{ old('status', $job_orders->status) == 'finished' ? 'selected' : '' }}>Finished</option>
                    <option value="cancelled" {{ old('status', $job_orders->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
          


                <script>
                    document.getElementById('booking_date').addEventListener('input', function (e) {
                        const input = e.target;
                        const selectedDate = new Date(input.value);
                        const selectedHours = selectedDate.getUTCHours();
                        
                        // Check if the time is outside 9 AM to 5 PM
                        if (selectedHours < 9 || selectedHours >= 17) {
                            alert('Please select a time between 9 AM and 5 PM.');
                            input.value = ''; // Clear the input
                        }
                    });
                </script>
                
                    <br>
                <button type="submit" class="btn btn-warning "  aria-expanded="false">Update</button>
                <button type="button" class="btn btn-secondary" onclick="window.history.back();">
                  Go Back
              </button>
                
               
              </form>




        
      </div>
    </div>
    </div>
    @endsection



                
                
                
                