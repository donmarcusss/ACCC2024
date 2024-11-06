<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Service;
use App\Models\Equipment;
use App\Models\Booking;
use App\Models\JobOrder;
use App\Models\Task;
use App\Models\Quotation;
use App\Models\Appointment;
use App\Models\Vehicle;
use App\Models\MyCar;
use App\Models\Transaction;
use App\Models\VehicleType;
use App\Models\VehicleManufacturer;
use App\Models\VehicleModel;


use Illuminate\Support\Str;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


//********************************************* LOG OUT *********************************************     
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }




//********************************************* Admin Dashboard ********************************************* 
public function index()
{
    // Check if the user is authenticated
    if (Auth::check()) {
        $usertype = Auth::user()->user_type; // Get the user type consistently

        // Admin-specific logic
        if ($usertype === 'admin') {
            // Generate times every 30 minutes
            $times = [];
            $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
            $end = Carbon::createFromTime(23, 59, 59); // End at 23:59

            // Generate times every 30 minutes
            while ($start <= $end) {
                $times[] = $start->format('H:i'); // Add the time in HH:mm format
                $start->addMinutes(30); // Change this interval if needed
            }

            // Get approved bookings and counts
            $bookings = Booking::where('status', 'approved')
                ->orderBy('booking_date', 'asc')
                ->get();
            $approvedBookingsCount = Booking::where('status', 'approved')->count();
            $pendingJobOrdersCount = JobOrder::where('status', 'pending')->count();
            $pendingBookingsCount = Booking::where('status', 'pending')->count();

            // Return the view for the admin dashboard
            return view('admin.index', compact('approvedBookingsCount', 'pendingJobOrdersCount', 'pendingBookingsCount', 'bookings', 'times'));

        } elseif ($usertype === 'user') {
            // Redirect 'user' type to the login page
            return redirect()->route('login');

        } elseif ($usertype === 'mechanic') {
            // Redirect to the mechanic dashboard
            return view('mechanic.index');

        } elseif ($usertype === 'secretary') {
            // Redirect to the secretary dashboard
            return view('secretary.index');
        }
    } else {
        // Redirect to the login page if not authenticated
        return redirect()->route('login');
    }
}


//-------------------------------------- END --------------------------------------



//********************************************* Schedule ********************************************* 
public function schedule()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'admin')

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
                   
            return view('admin.schedule', compact('bookings' , 'times'));



            return view('admin.schedule');


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


//********************************************* Appointment ********************************************* 
public function appointments(Request $request)
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;
        

        if($usertype == 'admin')

        {
            
            $times = [];
            $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
            $end = Carbon::createFromTime(23, 59, 59); // End at 23:59
        
            // Generate times every 30 minutes
            while ($start <= $end) {
                $times[] = $start->format('H:i'); // Add the time in HH:mm format
                $start->addMinutes(30); // Change this interval if needed
            }
            

            $status = $request->input('status', 'approved'); // Defaults to 'approved'
            $bookings = Booking::where('status', $status)->get();


            return view('admin.appointments', compact('bookings' , 'times'));


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







//********************************************* BOOKING ********************************************* 
public function bookings()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;
        

        if($usertype == 'admin')

        {
            
            $times = [];
            $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
            $end = Carbon::createFromTime(23, 59, 59); // End at 23:59
        
            // Generate times every 30 minutes
            while ($start <= $end) {
                $times[] = $start->format('H:i'); // Add the time in HH:mm format
                $start->addMinutes(30); // Change this interval if needed
            }
            

            $appointments = Appointment::all();
            $bookings = Booking::orderBy('id' , 'desc')->get();

            return view('admin.bookings', compact('bookings' , 'times' , 'appointments'));


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
public function jobOrder(Request $request)
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;
        

        if($usertype == 'admin')

        {
            
            $times = [];
            $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
            $end = Carbon::createFromTime(23, 59, 59); // End at 23:59
        
            // Generate times every 30 minutes
            while ($start <= $end) {
                $times[] = $start->format('H:i'); // Add the time in HH:mm format
                $start->addMinutes(30); // Change this interval if needed
            }
            

            



            $bookings = Booking::all();
            $services = Service::all();
            $equipments = Equipment::all();
            $users = User::all();
            $tasks = Task::all();
            $appointments = Appointment::all();
            $customerName = ($jobOrder->booking->user->first_name ?? '') . ' ' . ($jobOrder->booking->user->last_name ?? '');


            $selectedStatus = $request->input('status');
            $job_orders = JobOrder::with('booking.user')
            ->when($selectedStatus, function ($query) use ($selectedStatus) {
                return $query->where('status', $selectedStatus);
            })
            ->get();
            
            
            

            return view('admin.job-order', compact('job_orders' , 'selectedStatus' , 'times' , 'services' , 'equipments' , 'bookings' , 'users' , 'tasks' , 'appointments' , 'customerName'));


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




//********************************************* TRANSACTIONS ********************************************* 
public function transaction(Request $request)
{
    if (Auth::id()) {
        $usertype = Auth()->user()->user_type;

        if ($usertype == 'admin') {
            // Time generation logic (for later use, if needed)
            $times = [];
            $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
            $end = Carbon::createFromTime(23, 59, 59); // End at 23:59
        
            // Generate times every 30 minutes
            while ($start <= $end) {
                $times[] = $start->format('H:i'); // Add the time in HH:mm format
                $start->addMinutes(30); // Change this interval if needed
            }

            $statusFilter = $request->status; // Get the status filter

            // Fetch transactions with status filter applied
            $transactions = Transaction::when($statusFilter, function($query) use ($statusFilter) {
                    return $query->where('status', $statusFilter); // Apply status filter
                })
                ->get();

            // Load additional data needed for the view
            $services = Service::all();
            $equipments = Equipment::all();
            $users = User::all();
            $tasks = Task::all();
            $appointments = Appointment::all();
            $job_orders = JobOrder::all();
            $customerName = ''; // You can remove this if you're not using it

            // Return the view with the filtered transactions
            return view('admin.transactions', compact(
                'transactions', 'times', 'statusFilter', 'services', 'equipments', 
                'job_orders', 'users', 'tasks', 'appointments', 'customerName'
            ));
        }

        else if ($usertype == 'user') {
            return view('home');
        }
    }

    return redirect()->back(); // Redirect back if no user is authenticated
}

//-------------------------------------- END --------------------------------------






public function getFirstNameByBookingId($bookingId)
{
    // Find the booking by booking_id
    $booking = Booking::with('user')->find($bookingId);

    // Check if the booking exists and has an associated user
    if ($booking && $booking->user) {
        return $booking->user->first_name; // Return the first_name
    }

    return null; // Or return a default value or throw an exception
}



//********************************************* Vehicle ********************************************* 
public function vehicles()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'admin')
        

        {
            $vehicleTypes = VehicleType::select('id', 'type')->distinct()->get();
            $vehicleManufacturers = VehicleManufacturer::select('id', 'manufacturer')->distinct()->get();
            $vehicleModels = VehicleModel::all();
            $vehicles = Vehicle::all();
            return view('admin.vehicles', compact('vehicles' , 'vehicleTypes' , 'vehicleManufacturers' , 'vehicleModels'));


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







//********************************************* ROLES ********************************************* 
public function roles()
{

    // $users = User::orderBy('id' , 'desc')->get();
    // return view('admin.roles', compact('users'));


    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'admin')

        {
            $users = User::orderByRaw("FIELD(user_type, 'user', 'mechanic', 'secretary', 'admin')")
                  ->orderBy('id', 'desc')
                  ->get();
        
            

            return view('admin.roles', compact('users'));


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

        if($usertype == 'admin')

        {
            {
                $services = Service::orderBy('id' , 'desc')->get();
    
                return view('admin.services', compact('services'));
    
    
            }
            


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





//********************************************* Equipments ********************************************* 
public function equipments()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'admin')

        {
            {
                $services = Service::all();
                $equipments = Equipment::orderBy('id' , 'desc')->get();
    
                return view('admin.equipments', compact('equipments' , 'services'));
    
    
            }
            


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


//********************************************* Logs ********************************************* 
public function logs()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'admin')

        {
            return view('admin.logs');


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



//********************************************* Logs ********************************************* 
public function vehicleUpdate()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'admin')

        {
            return view('admin.vehicleUpdate');


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




//********************************************* BOOKING Reports ********************************************* 
public function bookingReports(Request $request)
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'admin')

        {


            $filter = $request->input('filter');
            $query = Booking::query();
            $status = $request->input('status');
            $user_id = $request->input('user_id');
            $users = User::all();

            if ($filter === 'last_week') {
                $query->where('booking_date', '>=', Carbon::now()->subWeek());
            } elseif ($filter === 'last_month') {
                $query->where('booking_date', '>=', Carbon::now()->subMonth());
            } elseif ($filter === 'this_week') {
                $query->whereBetween('booking_date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
            } elseif ($filter === 'today') {
                $query->whereDate('booking_date', Carbon::today());
            } elseif ($filter === 'last_year') {
                $query->whereYear('booking_date', Carbon::now()->subYear()->year);
            }
    
            // Apply status filter if provided
            if (in_array($status, ['approved', 'canceled', 'pending'])) {
                $query->where('status', $status);
            }

            // Apply user filter if provided
            if ($user_id) {
                $query->where('user_id', $user_id);
            }

            // Retrieve the filtered or all bookings
            $bookings = $query->get();


            return view('admin.booking-reports', compact('bookings', 'filter' , 'status' , 'user_id' , 'users'));
       
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


//********************************************* TRANSACTION Reports ********************************************* 
public function transactionReports(Request $request)
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'admin')

        {


            $filter = $request->input('filter');
            $query = Transaction::query();
            $status = $request->input('status');
            $users = User::all();
            $user_id = $request->input('user_id');

            if ($filter === 'last_week') {
                $query->where('modified_at', '>=', Carbon::now()->subWeek());
            } elseif ($filter === 'last_month') {
                $query->where('modified_at', '>=', Carbon::now()->subMonth());
            } elseif ($filter === 'this_week') {
                $query->whereBetween('modified_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
            } elseif ($filter === 'today') {
                $query->whereDate('modified_at', Carbon::today());
            } elseif ($filter === 'last_year') {
                $query->whereYear('modified_at', Carbon::now()->subYear()->year);
            }
    
            // Apply status filter if provided
            if (in_array($status, ['pending', 'paid', 'down-payment' , 'cancelled'])) {
                $query->where('status', $status);
            }

            // Apply user filter if provided
            if ($user_id) {
                $query->where('user_id', $user_id);
            }


            // Retrieve the filtered or all bookings
            $job_orders = $query->get();
            $transactions = $query->get();


            return view('admin.transaction-reports', compact('job_orders', 'filter' , 'status' , 'users' , 'transactions'));
       
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



//********************************************* BOOKING Reports ********************************************* 
public function jobOrderReports(Request $request)
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'admin')

        {


            $filter = $request->input('filter');
            $query = JobOrder::query();
            $status = $request->input('status');
            $users = User::all();
            $user_id = $request->input('user_id');

            if ($filter === 'last_week') {
                $query->where('booking_date', '>=', Carbon::now()->subWeek());
            } elseif ($filter === 'last_month') {
                $query->where('booking_date', '>=', Carbon::now()->subMonth());
            } elseif ($filter === 'this_week') {
                $query->whereBetween('booking_date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
            } elseif ($filter === 'today') {
                $query->whereDate('booking_date', Carbon::today());
            } elseif ($filter === 'last_year') {
                $query->whereYear('booking_date', Carbon::now()->subYear()->year);
            }
    
            // Apply status filter if provided
            if (in_array($status, ['approved', 'canceled', 'pending'])) {
                $query->where('status', $status);
            }

            // Apply user filter if provided
            if ($user_id) {
                $query->where('user_id', $user_id);
            }


            // Retrieve the filtered or all bookings
            $job_orders = $query->get();


            return view('admin.job-order-reports', compact('job_orders', 'filter' , 'status' , 'users'));
       
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







// ***************** C R U D ***************************

public function save(Request $request)
    {
        $validation = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_type' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'password' => 'required'
            
        ]);

        // dd($validation);
        // LOGS $logmessage = "Secretary added a new user";
        $data = User::create($validation);
        if ($data) {
            session()->flash('success', 'User Added Successfully');
            // return redirect(route('admin/roles'));
            // LOGS  $logs = Logs::create($logmessage);
            return redirect()->back(); 
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(route('admin.roles/create'));
        }
    }


public function edit($id)
{
    $users = User::findOrFail($id);
    return view('admin.edit' , compact('users'));
}  

public function delete($id)
{
    $users = User::findOrFail($id)->delete();
    if ($users) {
        session()->flash('success', 'User has been Deleted successfully');
        return redirect(route('admin/roles'));
    } else {
        session()->flash('erorr', 'User has failed to be Deleted');
        return redirect(route('admin/roles'));
    }
}  

public function update(Request $request, $id)
{
    $users = User::findOrFail($id);
    $first_name = $request->first_name;
    $last_name = $request->last_name;
    $email = $request->email;
    $phone_number = $request->phone_number;
    $password = $request->password;
    $user_type = $request->user_type;

    $users->first_name = $first_name;
    $users->last_name = $last_name;
    $users->email = $email;
    $users->phone_number = $phone_number;
    $users->password = $password;
    $users->user_type = $user_type;
    $data = $users->save();

    if ($data) {
        session()->flash('success', 'User Information Updated Successfully');
       
        return redirect(route('admin/roles'));

    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin/update'));
    }
}  


//-------------------------------------- END --------------------------------------









// SERIVCEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE


// create


public function saveService(Request $request)
    {
        // $data['service_price'] = $data['service_price'] ?? 0;
        $validation = $request->validate([
        
            'service_name' => 'required',
            // 'service_price' => 'required|numeric|min:0', // Ensure it's numeric and at least 0
          
            
        ]);

        // dd($validation);
        // LOGS $logmessage = "admin added a new service";
        $data = Service::create($validation);
        
        if ($data) {
            session()->flash('success', 'Service Added Successfully');
            // return redirect(route('admin/roles'));
            // LOGS  $logs = Logs::create($logmessage);
            return redirect()->back(); 
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(route('admin.services/create'));
        }
    }



    public function editService($id)
    {
        $services = Service::findOrFail($id);
        return view('admin.services.edit' , compact('services'));
    }  
    
    public function deleteService($id)
    {
        $services = Service::findOrFail($id)->delete();
        if ($services) {
            session()->flash('success', 'User has been Deleted successfully');
            return redirect(route('admin/services'));
        } else {
            session()->flash('erorr', 'User has failed to be Deleted');
            return redirect(route('admin/services'));
        }
    }  
    
    public function updateService(Request $request, $id)
    {
        $services = Service::findOrFail($id);
        $service_name = $request->service_name;
        $service_price = $request->service_price;
      
    
        $services->service_name = $service_name;
        $services->service_price = $service_price;
        
        $data = $services->save();
    
        if ($data) {
            session()->flash('success', 'Service Information Updated Successfully');
           
            return redirect(route('admin/services'));
    
        } else {
            session()->flash('error', 'Some problem occured');
            return redirect(route('admin/services/update'));
        }
    }  

    // ENDDDDDDDDDDDDDDDDDDDDDD







    // equipments


// create


public function saveEquipment(Request $request)
{
    $validation = $request->validate([
        'equipment_name' => 'required',
        'equipment_price' => 'required',
        'equipment_quantity' => 'required',
        'equipment_unit' => 'required',
        'service_id' => 'required|exists:services,id', // Validate the service_id
        // Add other validations as needed
      
        
    ]);

    // dd($validation);
    // LOGS $logmessage = "admin added a new service";
    $data = Equipment::create($validation);
    if ($data) {
        session()->flash('success', 'Equipment has been Added Successfully');
        // return redirect(route('admin/roles'));
        // LOGS  $logs = Logs::create($logmessage);
        return redirect()->back(); 
    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin.equipments/create'));
    }
}



public function editEquipment($id)
{
    $equipments = Equipment::findOrFail($id);
    return view('admin.equipments.edit' , compact('equipments'));
}  

public function deleteEquipment($id)
{
    $equipments = Equipment::findOrFail($id)->delete();
    if ($equipments) {
        session()->flash('success', 'Equipment has been Deleted successfully');
        return redirect(route('admin/equipments'));
    } else {
        session()->flash('erorr', 'Equipment has failed to be Deleted');
        return redirect(route('admin/equipments'));
    }
}  

public function updateEquipment(Request $request, $id)
{
    $equipments = Equipment::findOrFail($id);
    $equipment_name = $request->equipment_name;
    $equipment_price = $request->equipment_price;
    $equipment_quantity = $request->equipment_quantity;
  

    $equipments->equipment_name = $equipment_name;
    $equipments->equipment_price = $equipment_price;
    $equipments->equipment_quantity = $equipment_quantity;
    
    $data = $equipments->save();

    if ($data) {
        session()->flash('success', 'Equipment Information Updated Successfully');
       
        return redirect(route('admin/equipments'));

    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin/equipments/update'));
    }
}  

// END



    // APPOINTMENTS


// create








// public function saveAppointment(Request $request)

// {
    // dd($request->all());
//     $validation = $request->validate([
        
      
//         'vehicle_manufacturer' => 'required|string',
//         'vehicle_type' => 'required|string',
//         'vehicle_model' => 'required|string',
//         'description' => 'required|string',
//         'booking_date' => 'required|date_format:Y-m-d H:i',
        
            
        
        
//     ]);
//     dd($validation);

    
//     // $validation['user_id'] = Auth::id();
   
   
//     $validation['status'] = 'pending';


//     $data = Booking::create($validation);
    
    
    

//     if ($data) {
//         session()->flash('success', 'Booking has been Added Successfully');
       
//         // return redirect()->back(); 
//     } else {
//         session()->flash('error', 'Some problem occured');
//         return redirect(route('admin/appointments/create'));
//     }
// }

// public function saveAppointment(Request $request)
//     {
//         $validation = $request->validate([
//             'vehicle_manufacturer' => 'required',
//             'vehicle_type' => 'required',
//             'vehicle_model' => 'required',
//             'description' => 'required',
//             'booking_date' => 'required'
            
//         ]);

        

//         $validation['user_id'] = Auth::id();
//         $data = Booking::create($validation);
        
        

//         if ($data) {
            
//             session()->flash('success', 'Book Successfully');
//             return redirect()->back(); 
//         } else {
//             session()->flash('error', 'Some problem occured');
//             return redirect(route('book-now'));
//         }
//     }




// public function editAppointment($id)
// {
//     $bookings = Booking::findOrFail($id);
//     return view('admin/appointments/edit' , compact('bookings'));
// }  

// public function deleteAppointment($id)
// {
//     $bookings = Booking::findOrFail($id)->delete();
//     if ($bookings) {
//         session()->flash('success', 'Booking has been Deleted successfully');
//         return redirect(route('admin/appointments'));
//     } else {
//         session()->flash('erorr', 'Booking has failed to be Deleted');
//         return redirect(route('admin/appointments'));
//     }
// }  

// public function updateAppointment(Request $request, $id)


// {
//     $bookings = Booking::findOrFail($id);
    

//     $user_id = $request->input('user_id');
//     $first_name = $request->input('first_name');
//     $vehicle_manufacturer = $request->input('vehicle_manufacturer');
//     $vehicle_type = $request->input('vehicle_type');
//     $vehicle_model = $request->input('vehicle_model');
//     $description = $request->input('description');
//     $booking_date = $request->input('booking_date');
//     $status = $request->input('status');

    
//     if (is_null($status)) {
//         throw new \Exception('Status cannot be null');
//     }

//     // Assign values
    
//     $bookings->user_id = $user_id;
//     $bookings->vehicle_manufacturer = $vehicle_manufacturer;
//     $bookings->vehicle_type = $vehicle_type;
//     $bookings->vehicle_model = $vehicle_model;
//     $bookings->description = $description;
//     $bookings->booking_date = $booking_date;
//     $bookings->status = $status;
    
    
   


    
//     $data = $bookings->save();


    


//     if ($data) {
//         session()->flash('success', 'Booking Information Updated Successfully');
//         session(['first_name' => $first_name]);
//         return redirect(route('admin/appointments'));

//     } else {
//         session()->flash('error', 'Some problem occured');
//         return redirect(route('admin/appointments/update'));
//     }

    
// }  




// JOB ORDER ------------------------------------------------------------

public function saveJobOrder(Request $request)
{
    $validation = $request->validate([
        'booking_id' => 'required|exists:bookings,id',  
        'status' => 'required',
    ]);

    $booking = Booking::find($request->booking_id);

    if (!$booking) {
        return redirect()->back()->withErrors(['booking_id' => 'Booking not found.']);
    }

    // Create a new job order
    $jobOrder = new JobOrder();
    $jobOrder->booking_id = $booking->id; // Set the booking_id
    $jobOrder->vehicle_manufacturer = $booking->vehicle_manufacturer; // Save the vehicle_manufacturer
    $jobOrder->vehicle_type = $booking->vehicle_type; // Save the vehicle_type
    $jobOrder->vehicle_model = $booking->vehicle_model; // Save the vehicle_model
    $jobOrder->status = $request->status; // Set the status from the request
    $jobOrder->user_id = $booking->user_id;

    // Set the total for the job order (based on your logic)
    $jobOrder->total = $request->input('total', 0); // Set from the request or a default value

    // Save the job order
    $jobOrder->save();

     // Create the Transaction linked to this JobOrder
     $transaction = new Transaction();
     $transaction->total = $jobOrder->total; // Set total to the job order's total
     $transaction->balance = $transaction->total; // Assuming balance is initially the total
     $transaction->down_payment = 0; // Default value
     $transaction->status = 'pending'; // Default status
     $transaction->job_order_id = $jobOrder->id; // Link the transaction to this job order
 
     $transaction->save(); // Save the transaction
 
     // Update JobOrder with the created Transaction ID
     $jobOrder->transaction_id = $transaction->id;
     $jobOrder->save();
     
    // Redirect with a success message
    return redirect()->route('admin/job-order')->with('success', 'Job order and transaction created successfully!');
}





    public function editJobOrder($id)
    {
        $job_orders = JobOrder::findOrFail($id); // Retrieve the job order
        // $tasks = Task::where('job_order_id', $id)->get();
        return view('admin.joborder.edit', compact('job_orders')); // Pass to the view
    }
    



public function updateJobOrder(Request $request, $id)
{
    $job_orders = JobOrder::findOrFail($id);
   
    $status = $request->status;
    $job_orders->status = $status;
    
    $data = $job_orders->save();

    if ($data) {
        session()->flash('success', 'Equipment Information Updated Successfully');
       
        return redirect(route('admin/job-order'));

    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin.joborder.update'));
    }
}  




public function deleteJobOrder($id)
{
    // Retrieve the job order record
    $jobOrder = JobOrder::findOrFail($id);

    // Delete the specific job order record
    if ($jobOrder->delete()) {
        session()->flash('success', 'Job Order has been deleted successfully');
    } else {
        session()->flash('error', 'Failed to delete Job Order');
    }

    return redirect()->route('admin/job-order');
}

// public function updateBooking(Request $request, $id)
// {



        
//     $bookings = Booking::findOrFail($id);
//     $vehicle_manufacturer = $request->vehicle_manufacturer;
//     $vehicle_model = $request->vehicle_model;
//     $vehicle_type = $request->vehicle_type;
//     $description = $request->description;
//     $booking_date = $request->booking_date;
//     $status = $request->status;
  
  

//     $bookings->vehicle_manufacturer = $vehicle_manufacturer;
//     $bookings->vehicle_model = $vehicle_model;
//     $bookings->vehicle_type = $vehicle_type;
//     $bookings->description = $description;
//     $bookings->booking_date = $booking_date;
//     $bookings->status = $status;
    
//     $data = $bookings->save();

//     if ($data) {
//         session()->flash('success', 'Equipment Information Updated Successfully');
       
//         return redirect(route('admin.bookings'));

//     } else {
//         session()->flash('error', 'Some problem occured');
//         return redirect(route('admin.bookings.update'));
//     }
// }  


//********************************************* TASK ********************************************* 
public function taskJobOrder()
{
    if (Auth::id()) {
        $usertype = Auth()->user()->user_type;

        if($usertype == 'admin') {
            $times = [];
            $start = Carbon::createFromTime(0, 0, 0); // Start at 00:00
            $end = Carbon::createFromTime(23, 59, 59); // End at 23:59

            // Generate times every 30 minutes
            while ($start <= $end) {
                $times[] = $start->format('H:i'); // Add the time in HH:mm format
                $start->addMinutes(30); // Change this interval if needed
            }

            // Get all services, equipments, and tasks with job_order data
            $services = Service::all();
            $equipments = Equipment::all();
            $tasks = Task::with('jobOrder')->get(); // Eager load jobOrder relationship
            
            // Get all job orders
            $job_orders = JobOrder::select('id', 'user_id', 'vehicle_manufacturer', 'vehicle_model' , 'vehicle_type')->get();

            return view('admin.tasks', compact('tasks', 'times', 'services', 'equipments', 'job_orders'));
        } else if($usertype == 'user') {
            return view('home');
        }
    } else {
        return redirect()->back();
    }
}

//-------------------------------------- END --------------------------------------





//********************************************* quotation ********************************************* 
public function quotation()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;
        

        if($usertype == 'admin')

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


            return view('admin.quotation', compact('bookings' , 'times' , 'equipments' , 'services' ,'job_orders' , 'transactions' , 'quotations'));


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

// CRUD


// create


public function saveQuotation(Request $request)
{
    $validation = $request->validate([
       
      'service_name' => 'required|string|max:255',
        
    ]);

    // dd($validation);
    // LOGS $logmessage = "admin added a new service";


    

    $quotation = new Quotation();
    
    $quotation->service_name = $request->service_name;
    $quotation->equipment_name = $request->equipment_name;
    $quotation->service_price = $request->service_price;
    $quotation->equipment_price = $request->equipment_price;

    $quotation->save();

    return redirect()->back(); 


}


public function createQuotation()
{
    $services = Service::all(); // Fetch all services
    $equipments = Equipment::all(); // Fetch all equipments
    return view('admin.quotation', compact('services' , 'equipments'));
}


public function deleteQuotation($id)
{
    // Count the total number of quotations
    $quotationCount = Quotation::count();

    // If there is only one quotation left, do not allow deletion
    if ($quotationCount <= 1) {
        session()->flash('error', 'Cannot delete the last remaining quotation.');
        return redirect()->back();
    }

    // Find the quotation by ID
    $quotation = Quotation::findOrFail($id);

    // Delete the quotation
    $quotation->delete();

    // Flash success message and redirect back
    session()->flash('success', 'Quotation has been deleted successfully');
    return redirect()->back();
}


//-------------------------------------- END --------------------------------------




// JOB ORDER TASK


// CRUD


// create


public function saveTask(Request $request)
{


    $validation = $request->validate([
        'service_name' => 'required|string|max:255', // Validate service name
        'equipment_name' => 'required|string|max:255', // Validate equipment name
       

    ]);

    // Create a new task record
    Task::create([

       'service_name' => $request->service_name,
       'equipment_name' => $request->equipment_name,
       'note' => $request->note,
       'status' => $request->status,
       
   
        // Include other fields if necessary (like image_path, labor)
    ]);

    return redirect()->back(); 

}


public function createTask()
{
    $services = Service::all(); // Fetch all services
    $equipments = Equipment::all(); // Fetch all equipments
    return view('admin.job-order.task.create', compact('services' , 'equipments' , 'tasks'));
}



public function editTask($id)
{
    $tasks = Task::findOrFail($id);
    $services = Service::all();
    $equipments = Equipment::all();
    return view('admin/job-order/task' , compact('tasks'));
}  

public function deleteTask($id)
{
    $tasks = Task::findOrFail($id)->delete();
    if ($tasks) {
        session()->flash('success', 'Task has been Deleted successfully');
        return redirect()->back(); 
    } else {
        session()->flash('erorr', 'Task has failed to be Deleted');
        return redirect()->back(); 
    }
}  

public function updateTask(Request $request, $id)


{
    $tasks = Task::findOrFail($id);
    

    $service_name = $request->input('service_name');
    $equipment_name = $request->input('equipment_name');
    $service_price = $request->input('service_price');
    $equipment_price = $request->input('equipment_price');
    $note = $request->input('note');
    $status = $request->input('status');


    
    if (is_null($status)) {
        throw new \Exception('Status cannot be null');
    }

    // Assign values
    
    $tasks->service_name = $service_name;
    $tasks->equipment_name = $equipment_name;
    $tasks->service_price = $service_price;
    $tasks->equipment_price = $equipment_price;
    $tasks->note = $note;
    $tasks->status = $status;

    $data = $tasks->save();

    if ($data) {
        session()->flash('success', 'Task Information Updated Successfully');
        
        return redirect(route('admin/job-order/task', ['id' => $tasks->id]));

    } else {
        session()->flash('error', 'Some problem occured');
        return redirect()->back();
    }

    
}  



    
    // Proceed with your logic
    public function saveAppointment(Request $request)
{
    // Validate the request first
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|max:20',
        'vehicle_manufacturer' => 'required|string|max:255',
        'vehicle_model' => 'required|string|max:255',
        'vehicle_type' => 'required|string|max:255',
        'booking_date' => 'required|date',
        'status' => 'required|string|max:255',
    ]);

    // Check if user exists by email
    $user = User::where('email', $request->email)->first();

    if ($user) {
        // If user exists, just use the existing user data
        $first_name = $user->first_name;
        $last_name = $user->last_name;
        $phone_number = $request->phone_number; 
        $email = $request->email; // Assume user can update phone number
    } else {
        // If user does not exist, create a new user (optional based on your logic)
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->email), // Set password as the hashed email if you choose to create a user
        ]);

        // Use the input values
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $phone_number = $request->phone_number;
        $email = $request->email;
    }

    // Create or update the appointment
    $appointment = Appointment::create([
        'user_id' => $user->id, // Use existing or new user ID
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $request->email,
        'phone_number' => $phone_number,
        'vehicle_manufacturer' => $request->vehicle_manufacturer,
        'vehicle_model' => $request->vehicle_model,
        'vehicle_type' => $request->vehicle_type,
        'description' => $request->description,
        'booking_date' => $request->booking_date,
        'status' => $request->status,
    ]);

    if ($appointment) {
        session()->flash('success', 'Appointment has been Added Successfully');
        return redirect()->back(); 
    } else {
        session()->flash('error', 'Some problem occurred');
        return redirect(route('admin.index'));
    }
}


public function editAppointment($id)
{
    // Find the appointment by ID
    $appointments = Appointment::findOrFail($id);

    // Pass the appointment data to the view
    return view('admin.appointments.edit', compact('appointments'));
}


public function updateAppointment(Request $request, $id)
{
    // Validate the request first
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|max:20',
        'vehicle_manufacturer' => 'required|string|max:255',
        'vehicle_model' => 'required|string|max:255',
        'vehicle_type' => 'required|string|max:255',
        'booking_date' => 'required|date',
        'status' => 'required|string|max:255',
    ]);

    // Find the existing appointment
    $appointment = Appointment::findOrFail($id);

    // Update the appointment details
    $appointment->update([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'vehicle_manufacturer' => $request->vehicle_manufacturer,
        'vehicle_model' => $request->vehicle_model,
        'vehicle_type' => $request->vehicle_type,
        'description' => $request->description,
        'booking_date' => $request->booking_date,
        'status' => $request->status,
    ]);

    // Flash success message and redirect
    session()->flash('success', 'Appointment has been updated successfully');
    return redirect()->route('admin/appointments'); // Adjust the route as necessary
}

public function deleteAppointment($id)
{
    // Find the appointment by ID
    $appointments = Appointment::findOrFail($id);

    // Delete the appointment
    $appointments->delete();

    // Flash success message and redirect back
    session()->flash('success', 'Appointment has been deleted successfully');
    return redirect()->back(); // Adjust redirect as necessary
}





public function saveBooking(Request $request)
{
    $validation = $request->validate([
        'vehicle_manufacturer' => 'required',
        'vehicle_model' => 'required',
        'vehicle_type' => 'required',
        'description' => 'required',
        'booking_date' => 'required',
        'status' => 'required',
        
    ]);

    // dd($validation);
    // LOGS $logmessage = "admin added a new service";
    $data = Booking::create($validation);
    if ($data) {
        session()->flash('success', 'Equipment has been Added Successfully');
        // return redirect(route('admin/roles'));
        // LOGS  $logs = Logs::create($logmessage);
        return redirect()->back(); 
    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin.bookings.create'));
    }
}



public function editBooking($id)
{
    $bookings = Booking::findOrFail($id);
    return view('admin.bookings.edit' , compact('bookings'));
}  

public function deleteBooking($id)
{
    $bookings = Booking::findOrFail($id)->delete();
    if ($bookings) {
        session()->flash('success', 'Equipment has been Deleted successfully');
        return redirect(route('admin.bookings'));
    } else {
        session()->flash('erorr', 'Equipment has failed to be Deleted');
        return redirect(route('admin.bookings'));
    }
}  

public function updateBooking(Request $request, $id)
{



        
    $bookings = Booking::findOrFail($id);
    $vehicle_manufacturer = $request->vehicle_manufacturer;
    $vehicle_model = $request->vehicle_model;
    $vehicle_type = $request->vehicle_type;
    $description = $request->description;
    $booking_date = $request->booking_date;
    $status = $request->status;
  
  

    $bookings->vehicle_manufacturer = $vehicle_manufacturer;
    $bookings->vehicle_model = $vehicle_model;
    $bookings->vehicle_type = $vehicle_type;
    $bookings->description = $description;
    $bookings->booking_date = $booking_date;
    $bookings->status = $status;
    
    $data = $bookings->save();

    if ($data) {
        session()->flash('success', 'Equipment Information Updated Successfully');
       
        return redirect(route('admin.bookings'));

    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin.bookings.update'));
    }
}  



// VEHICLES


public function saveVehicles(Request $request)
{
    $validation = $request->validate([
        'vehicle_manufacturer' => 'required',
        'vehicle_model' => 'required',
        'vehicle_type' => 'required',
       
        
    ]);

    // dd($validation);
    // LOGS $logmessage = "admin added a new service";
    $data = Vehicle::create($validation);
    if ($data) {
        session()->flash('success', 'Vehicle has been Added Successfully');
        // return redirect(route('admin/roles'));
        // LOGS  $logs = Logs::create($logmessage);
        return redirect()->back(); 
    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin.vehicles'));
    }
}


public function editVehicles($id)
{
    $vehicles = Vehicle::findOrFail($id);
    return view('admin.vehicles.edit' , compact('vehicles'));
}  

public function deleteVehicles($id)
{
    $vehicles = Vehicle::findOrFail($id)->delete();
    if ($vehicles) {
        session()->flash('success', 'Equipment has been Deleted successfully');
        return redirect(route('admin.vehicles'));
    } else {
        session()->flash('erorr', 'Equipment has failed to be Deleted');
        return redirect(route('admin.vehicles'));
    }
}  

public function updateVehicles(Request $request, $id)
{



        
    $vehicles = Vehicle::findOrFail($id);
    $vehicle_manufacturer = $request->vehicle_manufacturer;
    $vehicle_model = $request->vehicle_model;
    $vehicle_type = $request->vehicle_type;

    $vehicles->vehicle_manufacturer = $vehicle_manufacturer;
    $vehicles->vehicle_model = $vehicle_model;
    $vehicles->vehicle_type = $vehicle_type;
   
    
    $data = $vehicles->save();

    if ($data) {
        session()->flash('success', 'Equipment Information Updated Successfully');
       
        return redirect(route('admin.vehicles'));

    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin.vehicles.update'));
    }
}  






// VEHICLES TYPE


public function saveVehicleType(Request $request)
{
    $validation = $request->validate([
        'type' => 'required', 
    ]);

    $data = VehicleType::create($validation);
    if ($data) {
        session()->flash('success', 'Vehicle Type has been Added Successfully');

        return redirect()->back(); 
    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin.vehicles'));
    }
}



// VEHICLES MANUFACTURER


public function saveVehicleManufacturer(Request $request)
{
    $validation = $request->validate([
        // 'vehicle_type_id' => 'required|exists:vehicle_types,id', // Validate that the type exists
        'manufacturer' => 'required|string|max:255',
    ]);

    $data = VehicleManufacturer::create($validation);
    if ($data) {
        session()->flash('success', 'Vehicle Manufacturer has been Added Successfully');

        return redirect()->back(); 
    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin.vehicles'));
    }
}




// VEHICLES MODEL


public function saveVehicleModel(Request $request)
{
    $validation = $request->validate([
        'vehicle_type_id' => 'required|exists:vehicle_types,id', // Validate that the type exists
        'vehicle_manufacturer_id' => 'required|exists:vehicle_manufacturers,id', // Validate that the type exists
        'model' => 'required', 
    ]);

    $data = VehicleModel::create($validation);
    if ($data) {
        session()->flash('success', 'Vehicle Model Type has been Added Successfully');

        return redirect()->back(); 
    } else {
        session()->flash('error', 'Some problem occured');
        return redirect(route('admin.vehicles'));
    }
}






// QUOTATIONS TO SAVE TO JOB ORDER
public function quotations()
{
    if (Auth::id())

    {
        $usertype = Auth()->user()->user_type;
        

        if($usertype == 'admin')

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


            return view('admin.quotations', compact('bookings' , 'times' , 'equipments' , 'services' ,'job_orders' , 'transactions' , 'quotations'));


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

// CRUD


public function print($jobOrderId)
{
    // Retrieve tasks for this specific job order
    $customerName = ($jobOrder->booking->user->first_name ?? '') . ' ' . ($jobOrder->booking->user->last_name ?? '');
    $tasks = Task::where('job_order_id', $jobOrderId)->get();
    
    return view('admin.joborder.print', compact('tasks' , 'customerName'));

}

// create


public function saveQuotations(Request $request)
{
    $validation = $request->validate([
       
      'service_name' => 'required|string|max:255',
        
    ]);

    // dd($validation);
    // LOGS $logmessage = "admin added a new service";


    

    $quotation = new Quotation();
    
    $quotation->service_name = $request->service_name;
    $quotation->equipment_name = $request->equipment_name;
    $quotation->service_price = $request->service_price;
    $quotation->equipment_price = $request->equipment_price;

    $quotation->save();

    return redirect()->back(); 


}


// AJAX TRANSACTION



public function getJobOrderTotal($id)
    {
        // Find the JobOrder and load related tasks
        $jobOrder = JobOrder::with('tasks')->find($id);

        if (!$jobOrder) {
            return response()->json(['total' => '0.00']);
        }

        // Calculate the total for service_price and equipment_price
        $total = $jobOrder->tasks->sum(function ($task) {
            return $task->service_price + $task->equipment_price;
        });

        // Format the total to 2 decimal places for display
        return response()->json(['total' => number_format($total, 2)]);
    }


    public function getEquipments($serviceId)
{
    $equipments = Equipment::where('service_id', $serviceId)->get(['id', 'equipment_name', 'equipment_price']);
    return response()->json($equipments);
}







public function editTransaction($id)
{
    // Step 1: Find the specific Transaction by its ID
    $transaction = Transaction::findOrFail($id);

    // Step 2: Check if the transaction has an associated JobOrder and retrieve its total if available
    $jobOrderTotal = null;
    if ($transaction->job_order_id) {
        $jobOrder = JobOrder::find($transaction->job_order_id);
        if ($jobOrder) {
            $jobOrderTotal = $jobOrder->total;
        }
    }

    // Step 3: Pass both the transaction and the jobOrderTotal (if available) to the view
    return view('admin.transactions.edit', compact('transaction', 'jobOrderTotal'));
} 

public function deleteTransaction($id)
{
    $transactions = Transaction::findOrFail($id)->delete();
    if ($transactions) {
        session()->flash('success', 'Transaction has been Deleted successfully');
        return redirect(route('admin.transactions'));
    } else {
        session()->flash('erorr', 'Transaction has failed to be Deleted');
        return redirect(route('admin.transactions'));
    }
}  

public function updateTransaction(Request $request, $id)
{
    // Step 1: Find the Transaction by its ID
    $transaction = Transaction::findOrFail($id);

    // Step 2: Retrieve the total from the associated JobOrder if job_order_id is set
    if ($transaction->job_order_id) {
        // Find the associated JobOrder and retrieve its total
        $jobOrder = JobOrder::find($transaction->job_order_id);

        // Check if JobOrder exists and has a total
        if ($jobOrder && $jobOrder->total) {
            $transaction->total = $jobOrder->total;
        } else {
            $transaction->total = $request->total; // Fallback if no JobOrder total
        }
    } else {
        // No associated job_order_id, use the input total
        $transaction->total = $request->total;
    }

    // Step 3: Update the remaining fields from the request
    $transaction->down_payment = $request->down_payment;
    
    // Calculate the balance as total minus down payment
    $transaction->balance = $transaction->total - $request->down_payment;

    $transaction->status = $request->status;

    // Save the updated transaction details
    $isSaved = $transaction->save();

    // Check if the transaction was saved successfully
    if ($isSaved) {
        session()->flash('success', 'Transaction Information Updated Successfully');
        return redirect(route('admin.transactions'));
    } else {
        session()->flash('error', 'Some problem occurred');
        return redirect(route('admin.transactions.update'));
    }
}





}
