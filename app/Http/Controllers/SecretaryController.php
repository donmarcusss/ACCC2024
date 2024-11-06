<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Carbon\Carbon;
use App\Models\Booking;
use App\Models\JobOrder;

class SecretaryController extends Controller
{


//********************************************* LOG OUT *********************************************     
    public function SecretaryLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }




    public function secretary()


    {

        if (Auth::id())

        {
            $usertype = Auth()->user()->user_type;

            if($usertype == 'secretary')

            {



                            $times = [];
                        $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
                        $end = Carbon::createFromTime(23, 59, 59); // End at 23:59
                    
                        // Generate times every 30 minutes
                        while ($start <= $end) {
                            $times[] = $start->format('H:i'); // Add the time in HH:mm format
                            $start->addMinutes(30); // Change this interval if needed
                        }
      

                        $bookings = Booking::where('status', 'approved')
                        ->orderBy('booking_date', 'asc')
                        ->get();
                        $bookCount = Booking::where('status', 'approved')->count();
                        $joCount = JobOrder::where('status', 'pending')->count();
                        $pbookCount = Booking::where('status', 'pending')->count();

                return view('secretary.index', compact('bookCount', 'joCount' , 'pbookCount' , 'bookings' , 'times'));

            }

            else if($usertype == 'user')

            {

                return view('home');
            }

            else if($usertype == 'mechanic')

            {

                return view('mechanic.index');
            }

            else if($usertype == 'admin')

            {

                return view('admin.index');
            }


        }

        else

        {
            return redirect()->back();
        }
    }

//-------------------------------------- END --------------------------------------




//********************************************* Schedule ********************************************* 
// public function schedule()
// {
//     if (Auth::id())

//     {
//         $usertype = Auth()->user()->user_type;

//         if($usertype == 'secretary')

//         {
//             return view('secretary.schedule');


//         }

//         else if($usertype == 'user')

//         {

//             return view('home');
//         }

//     }

//     else

//     {
//         return redirect()->back();
//     }
// }

//-------------------------------------- END --------------------------------------


//********************************************* Appointment ********************************************* 
public function appointments()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;
        

        if($usertype == 'secretary')

        {
            
            $times = [];
            $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
            $end = Carbon::createFromTime(23, 59, 59); // End at 23:59
        
            // Generate times every 30 minutes
            while ($start <= $end) {
                $times[] = $start->format('H:i'); // Add the time in HH:mm format
                $start->addMinutes(30); // Change this interval if needed
            }
            


            $bookings = Booking::orderBy('id' , 'desc')->get();

            return view('secretary.appointments', compact('bookings' , 'times'));


        }

        else if($usertype == 'user')

        {

            return view('home');
        }

    }

    else

    {
        return redirect()->back();
    }
}

//-------------------------------------- END --------------------------------------


//********************************************* Job Order ********************************************* 
public function joborder()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'secretary')

        {
            return view('secretary.job-order');


        }

        else if($usertype == 'user')

        {

            return view('home');
        }

    }

    else

    {
        return redirect()->back();
    }
}

//-------------------------------------- END --------------------------------------


//********************************************* Billing ********************************************* 
public function billing()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'secretary')

        {
            return view('secretary.billing');


        }

        else if($usertype == 'user')

        {

            return view('home');
        }

    }

    else

    {
        return redirect()->back();
    }
}

//-------------------------------------- END --------------------------------------




//********************************************* Services ********************************************* 
public function services()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'secretary')

        {
            return view('secretary.services');


        }

        else if($usertype == 'user')

        {

            return view('home');
        }

    }

    else

    {
        return redirect()->back();
    }
}

//-------------------------------------- END --------------------------------------



//********************************************* Reports ********************************************* 
public function reports()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'secretary')

        {
            return view('secretary.reports');


        }

        else if($usertype == 'user')

        {

            return view('home');
        }

    }

    else

    {
        return redirect()->back();
    }
}

//-------------------------------------- END --------------------------------------




// SCHEDULE

public function schedule()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'secretary')

        {

            $times = [];
            $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
            $end = Carbon::createFromTime(23, 59, 59); // End at 23:59
        
            // Generate times every 30 minutes
            while ($start <= $end) {
                $times[] = $start->format('H:i'); // Add the time in HH:mm format
                $start->addMinutes(30); // Change this interval if needed
            }
            


            $bookings = Booking::where('status', 'approved')
                   ->orderBy('booking_date', 'asc')
                   ->get();

            return view('secretary.schedule', compact('bookings' , 'times'));



            return view('secretary.schedule');


        }

        else if($usertype == 'user')

        {

            return view('home');
        }

    }

    else

    {
        return redirect()->back();
    }
}

//-------------------------------------- END --------------------------------------




// CRUD APPOINTMENTS

public function saveAppointment(Request $request)
    {
        $validation = $request->validate([
            'vehicle_manufacturer' => 'required',
            'vehicle_type' => 'required',
            'vehicle_model' => 'required',
            'description' => 'required',
            'booking_date' => 'required'
            
        ]);

        

        $validation['user_id'] = Auth::id();
        $data = Booking::create($validation);
        
        

        if ($data) {
            
            session()->flash('success', 'Book Successfully');
            return redirect()->back(); 
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(route('book-now'));
        }
    }




public function editAppointment($id)
{
    $bookings = Booking::findOrFail($id);
    return view('secretary/appointments/edit' , compact('bookings'));
}  

public function deleteAppointment($id)
{
    $bookings = Booking::findOrFail($id)->delete();
    if ($bookings) {
        session()->flash('success', 'Booking has been Deleted successfully');
        return redirect(route('secretary/appointments'));
    } else {
        session()->flash('erorr', 'Booking has failed to be Deleted');
        return redirect(route('secretary/appointments'));
    }
}  

public function updateAppointment(Request $request, $id)


{
    $bookings = Booking::findOrFail($id);
    

    $user_id = $request->input('user_id');
    $first_name = $request->input('first_name');
    $vehicle_manufacturer = $request->input('vehicle_manufacturer');
    $vehicle_type = $request->input('vehicle_type');
    $vehicle_model = $request->input('vehicle_model');
    $description = $request->input('description');
    $booking_date = $request->input('booking_date');
    $status = $request->input('status');

    
    if (is_null($status)) {
        throw new \Exception('Status cannot be null');
    }

    // Assign values
    
    $bookings->user_id = $user_id;
    $bookings->vehicle_manufacturer = $vehicle_manufacturer;
    $bookings->vehicle_type = $vehicle_type;
    $bookings->vehicle_model = $vehicle_model;
    $bookings->description = $description;
    $bookings->booking_date = $booking_date;
    $bookings->status = $status;
    
    
   


    
    $data = $bookings->save();


    


    if ($data) {
        session()->flash('success', 'Booking Information Updated Successfully');
        session(['first_name' => $first_name]);
        return redirect(route('secretary/appointments'));
        

    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('secretary/appointments/update'));
    }

    
}  


//-------------------------------------- END --------------------------------------



public function quotation()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;
        

        if($usertype == 'secretary')

        {
            
            $times = [];
            $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
            $end = Carbon::createFromTime(23, 59, 59); // End at 23:59
        
            // Generate times every 30 minutes
            while ($start <= $end) {
                $times[] = $start->format('H:i'); // Add the time in HH:mm format
                $start->addMinutes(30); // Change this interval if needed
            }
            


            $bookings = Booking::orderBy('id' , 'desc')->get();
            $equipments = Equipment::orderBy('id' , 'desc')->get();
            $services = Service::orderBy('id' , 'desc')->get();
            $job_orders = JobOrder::orderBy('id' , 'desc')->get();
            $transactions = JobOrder::orderBy('id' , 'desc')->get();

            $equipments = Equipment::all();
            $services = Service::all();
            $quotations = Quotation::all();


            return view('secretary/quotation', compact('bookings' , 'times' , 'equipments' , 'services' ,'job_orders' , 'transactions' , 'quotations'));


        }

        else if($usertype == 'user')

        {

            return view('home');
        }

    }

    else

    {
        return redirect()->back();
    }
}

//// end

}








