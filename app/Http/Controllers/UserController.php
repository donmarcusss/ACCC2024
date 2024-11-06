<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Booking;
use App\Models\Task;
use App\Models\Vehicle;
use App\Models\MyCar;
use App\Models\VehicleType;
use App\Models\VehicleManufacturer;
use App\Models\VehicleModel;
use App\Models\JobOrder;

use Illuminate\Support\Str;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function save(Request $request)
    {
        $validation = $request->validate([
            'vehicle_type' => 'required',
            'vehicle_model' => 'required',
            'vehicle_manufacturer' => 'required',
            'description' => 'required',
            'booking_date' => 'required'
            
        ]);

        

        $validation['user_id'] = Auth::id();
        
        $vehicleType = VehicleType::findOrFail($validation['vehicle_type']);
        $vehicleModel = VehicleModel::findOrFail($validation['vehicle_model']);
        $vehicleManufacturer = VehicleManufacturer::findOrFail($validation['vehicle_manufacturer']);
    
        
        
  // Prepare data for insertion
  $data = [
    'user_id' => Auth::id(),
    'vehicle_type' => $vehicleType->type, // Assuming 'type' is the column that holds the name
    'vehicle_model' => $vehicleModel->model, // Assuming 'model' is the column that holds the name
    'vehicle_manufacturer' => $vehicleManufacturer->manufacturer, // Assuming 'manufacturer' is the column that holds the name
    'description' => $validation['description'],
    'booking_date' => $validation['booking_date'],
];

// Create the booking record
$booking = Booking::create($data);

// Flash messages based on success or failure
if ($booking) {
    session()->flash('success', 'Booking Successfully');
    return redirect(route('booking'));
} else {
    session()->flash('error', 'Some problem occurred');
    return redirect(route('book-now'));
}
}



    public function booking()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'user')

        {

            $user = auth()->user(); // Get the currently authenticated user

$times = [];
$start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
$end = Carbon::createFromTime(23, 59, 59); // End at 23:59

// Generate times every 30 minutes
while ($start <= $end) {
    $times[] = $start->format('H:i'); // Add the time in HH:mm format
    $start->addMinutes(30); // Change this interval if needed
}

// Retrieve only the bookings for the authenticated user
$bookings = Booking::where('user_id', $user->id) // Assuming 'user_id' is the foreign key in bookings
                    ->orderBy('booking_date', 'desc')
                    ->get();
 $vehicleTypes = VehicleType::all();
 $vehicleManufacturers = VehicleManufacturer::all();
$vehicleModels = VehicleModel::all();





return view('booking', compact('bookings', 'times' , 'vehicleTypes' , 'vehicleManufacturers' , 'vehicleModels'));


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



public function vehicle_update()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'user')

        {

            $user = auth()->user(); // Get the currently authenticated user

$times = [];
$start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
$end = Carbon::createFromTime(23, 59, 59); // End at 23:59

// Generate times every 30 minutes
while ($start <= $end) {
    $times[] = $start->format('H:i'); // Add the time in HH:mm format
    $start->addMinutes(30); // Change this interval if needed
}

// Retrieve only the bookings for the authenticated user
$bookings = Booking::where('user_id', $user->id) // Assuming 'user_id' is the foreign key in bookings
                    ->orderBy('booking_date', 'asc')
                    ->get();

                    
                    $userId = Auth::id(); // Get the current authenticated user's ID

                    $userId = auth()->id(); // Get the currently authenticated user's ID

                    // Fetch job orders for the authenticated user
                    $jobOrders = JobOrder::where('user_id', $userId)->pluck('id');
                    
                    // Fetch tasks grouped by job_order_id
                    $tasks = Task::with('jobOrders') // Assuming you have defined a relationship in the Task model
                        ->whereIn('job_order_id', $jobOrders) // Filter tasks by user's job orders
                        ->get()
                        ->groupBy('job_order_id'); // Group tasks by job_order_id
                    

                    return view('vehicle-update', compact('bookings', 'times', 'tasks'));


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





public function vehicle_history()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'user')

        {

            $user = auth()->user(); // Get the currently authenticated user

$times = [];
$start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
$end = Carbon::createFromTime(23, 59, 59); // End at 23:59

// Generate times every 30 minutes
while ($start <= $end) {
    $times[] = $start->format('H:i'); // Add the time in HH:mm format
    $start->addMinutes(30); // Change this interval if needed
}

// Retrieve only the bookings for the authenticated user
$appointments = Appointment::where('user_id', $user->id) // Assuming 'user_id' is the foreign key in bookings
                    ->orderBy('booking_date', 'asc')
                    ->get();

return view('vehicle-history', compact('bookings', 'times'));


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


// eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee







//********************************************* MY CAR ********************************************* 
public function MyCar()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'user')
        

        {
            $userId = Auth::id();
        
            $vehicleManufacturers = VehicleManufacturer::all();
            $vehicleTypes = VehicleType::all();
            $myCars = MyCar::where('user_id', $userId)->get();
           
            return view('my-car', compact('vehicleTypes' , 'vehicleManufacturers' , 'myCars'));


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





// MY CARS


public function saveMyCar(Request $request)
{
    $validation = $request->validate([
        'vehicle_name' => 'required',
        'vehicle_manufacturer' => 'required',
        'vehicle_model' => 'required',
        'vehicle_type' => 'required',
 
    ]);

    // dd($validation);
    // LOGS $logmessage = "admin added a new service";
    $validation['user_id'] = auth()->id();
    $data = MyCar::create($validation);
    if ($data) {
        session()->flash('success', 'Vehicle has been Added Successfully');
        // return redirect(route('admin/roles'));
        // LOGS  $logs = Logs::create($logmessage);
        return redirect()->back(); 
    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('my-car'));
    }
}


public function editMyCar($id)
{
    $MyCars = MyCar::findOrFail($id);
    return view('my-car.edit' , compact('my-car'));
}  

public function deleteMyCar($id)
{
    $MyCars = MyCar::findOrFail($id)->delete();
    if ($MyCars) {
        session()->flash('success', 'Equipment has been Deleted successfully');
        return redirect(route('my-car'));
    } else {
        session()->flash('erorr', 'Equipment has failed to be Deleted');
        return redirect(route('my-car'));
    }
}  

public function updateMyCar(Request $request, $id)
{



        
    $myCars->user_id = auth()->id();
    $vehicle_name = $request->vehicle_name;
    $vehicle_manufacturer = $request->vehicle_manufacturer;
    $vehicle_model = $request->vehicle_model;
    $vehicle_type = $request->vehicle_type;

    $myCars->vehicle_name = $vehicle_name;
    $myCars->vehicle_manufacturer = $vehicle_manufacturer;
    $myCars->vehicle_model = $vehicle_model;
    $myCars->vehicle_type = $vehicle_type;
   
    
    $data = $myCars->save();

    if ($data) {
        session()->flash('success', 'Equipment Information Updated Successfully');
       
        return redirect(route('my-car'));

    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('my-car.update'));
    }
}  



// public function getManufacturers($typeId)
//     {
//         $manufacturers = VehicleManufacturer::where('vehicle_type_id', $typeId)->get();
//         return response()->json($manufacturers);
//     }

//     public function getModels($manufacturerId)
// {
//     // Log the received manufacturerId for debugging
//     \Log::info("Fetching models for manufacturer ID: " . $manufacturerId);

//     // Fetch models
//     $models = VehicleModel::where('vehicle_manufacturer_id', $manufacturerId)->get();
    
//     // Log the models for debugging
//     \Log::info("Models received: ", $models->toArray());

//     return response()->json($models);
// }



public function getModels(Request $request)
{
    $models = VehicleModel::where('vehicle_type_id', $request->vehicle_type_id)
        ->where('vehicle_manufacturer_id', $request->vehicle_manufacturer_id)
        ->pluck('model', 'id'); // Adjust 'id' if your primary key is different

    return response()->json($models);
}




//********************************************* BOOK NOW ********************************************* 
public function BookNow()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'user')
        

        {
            $cars = MyCar::with(['vehicleType', 'vehicleManufacturer', 'vehicleModel'])->where('user_id', Auth::id())->get();
            
            $vehicleManufacturers = VehicleManufacturer::all();
            $vehicleTypes = VehicleType::all();
            $vehicleManufacturers = VehicleManufacturer::all();
            $vehicleModels = VehicleModel::all();
           
            return view('book-now', compact('vehicleManufacturers' , 'vehicleTypes' , 'cars' , 'vehicleModels' ));


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






public function saveBookNow(Request $request) {
    $validation = $request->validate([
        'vehicle_type' => 'required',
        'vehicle_model' => 'required',
        'vehicle_manufacturer' => 'required',
        'description' => 'required',
        'booking_date' => 'required'
    ]);

    // Prepare data for insertion
    $data = [
        'user_id' => Auth::id(),
        'vehicle_type' => $validation['vehicle_type'],
        'vehicle_model' => $validation['vehicle_model'],
        'vehicle_manufacturer' => $validation['vehicle_manufacturer'],
        'description' => $validation['description'],
        'booking_date' => $validation['booking_date'],
    ];

    // Create the booking record
    $booking = Booking::create($data);

    // Flash messages based on success or failure
    if ($booking) {
        session()->flash('success', 'Booking Successfully');
        return redirect()->route('booking'); // Adjust as needed
    } else {
        session()->flash('error', 'Some problem occurred');
        return redirect()->route('book-now'); // Adjust as needed
    }
}
       
}