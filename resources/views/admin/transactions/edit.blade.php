@extends('layouts.auth')

<head>
  <title> Autofixx Car Care Center | Edit Transaction</title>


  <style>
    .status-pending {
     color: yellow;
     text-transform: uppercase;
     font-weight: bold;
 }


 .status-on-going {
     color: orange;
     text-transform: uppercase;
     font-weight: bold;
 }

 
 .status-finished {
     color: green;
     text-transform: uppercase;
     font-weight: bold;
 }
 
 .status-cancelled {
   color: red;
   text-transform: uppercase;
   font-weight: bold;
 }
 </style>
</head>

@section('content')
<div class="content-wrapper">
<div class="card shadow-lg">
    <div class="card-body">
        <h4 class="card-title">Edit</h4>
        <BR>
        

 

            <form action="{{route('admin.transactions.update' , $transaction->id )}}" method="POST" class="space-y-4 md:space-y-6" >
                @csrf
                @method('PUT')
            
                
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required style="color: white;">
                    <option value="">Select Status</option>
                    <option value="pending" {{ old('status', $transaction->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="paid" {{ old('status', $transaction->status) == 'paid' ? 'selected' : '' }}>Paid</option>
                    <option value="cancelled" {{ old('status', $transaction->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
             
                
                
                <br>
             
                

                    <label for="exampleFormControlInput1">Total</label>
                    <input 
                      value="{{ $jobOrderTotal ?? old('total', $transaction->total) }}" 
                      name="total" 
                      style="color: white;" 
                      type="text" 
                      class="form-control" 
                      id="total" 
                      placeholder="Total">
                
                    <br>
             
                    
                    
                    <label for="exampleFormControlInput1">Balance</label>
                    <input 
                        value="{{ old('balance', $transaction->balance ?? $jobOrderTotal - $transaction->down_payment) }}" 
                        name="balance" 
                        style="color: white;" 
                        type="text" 
                        class="form-control" 
                        id="balance" 
                        placeholder="Balance">
                    <br>
                  
                     
             
                   
                 
                      <label for="exampleFormControlInput1">Down Payment</label>
                      <input value="{{ optional($transaction)->down_payment }}" name="down_payment" style="color: white;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  
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



                
                
                
                