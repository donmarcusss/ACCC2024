<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Str;


use App\Models\Service;
use App\Models\Equipment;
use App\Models\Booking;
use App\Models\JobOrder;
use App\Models\Task;
use App\Models\Quotation;

use Carbon\Carbon;


class MechanicController extends Controller
{
    
    //********************************************* LOG OUT *********************************************     
    public function MechanicLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }




    //********************************************* Mechanic Dashboard ********************************************* 
    public function mechanic()
    {
        if (Auth::id())

        {
            $usertype = Auth()->user()->user_type;

            if($usertype == 'mechanic')

            {



                $times = [];
            $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
            $end = Carbon::createFromTime(23, 59, 59); // End at 23:59
        
            // Generate times every 30 minutes
            while ($start <= $end) {
                $times[] = $start->format('H:i'); // Add the time in HH:mm format
                $start->addMinutes(30); // Change this interval if needed
            }


    $bookings = Booking::where('status', 'pending')->orderBy('id', 'desc')->get();
    $approvedBookingsCount = Booking::where('status', 'approved')->count();
    $pendingJobOrdersCount = JobOrder::where('status', 'pending')->count();
    $pendingBookingsCount = Booking::where('status', 'pending')->count();

    return view('mechanic.index', compact('approvedBookingsCount', 'pendingJobOrdersCount' , 'pendingBookingsCount' , 'bookings' , 'times'));

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


//********************************************* Mechanic Schedule ********************************************* 
public function schedule()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'mechanic')

        {

            $times = [];
                        $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
                        $end = Carbon::createFromTime(23, 59, 59); // End at 23:59
                    
                        // Generate times every 30 minutes
                        while ($start <= $end) {
                            $times[] = $start->format('H:i'); // Add the time in HH:mm format
                            $start->addMinutes(30); // Change this interval if needed
                        }
      

                $bookings = Booking::where('status', 'pending')->orderBy('id', 'desc')->get();
                $approvedBookingsCount = Booking::where('status', 'approved')
                ->whereDate('booking_date', Carbon::today())
                ->count();
                $pendingJobOrdersCount = JobOrder::where('status', 'pending')->count();
                $pendingBookingsCount = Booking::where('status', 'pending')->count();

                return view('mechanic.schedule', compact('approvedBookingsCount', 'pendingJobOrdersCount' , 'pendingBookingsCount' , 'bookings' , 'times'));




           


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

//-------------------------------------- END --------------------------------------


//********************************************* Mechanic Job Order ********************************************* 
public function joborder()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'mechanic')

        {
            return view('mechanic.job-order');


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




//********************************************* Mechanic Update ********************************************* 
public function update()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'mechanic')

        {
            return view('mechanic.update');


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

}
