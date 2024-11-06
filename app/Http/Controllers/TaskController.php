<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\Service;
use App\Models\User;
use App\Models\JobOrder;
use App\Models\Equipment;


use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class TaskController extends Controller
{

// INDEX OF TASK

public function taskJobOrder($job_order_id)
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
            
            $tasks = Task::where('job_order_id', $job_order_id)
            // Uncomment this line if you want to filter by authenticated user
            // ->where('user_id', Auth::id()) 
            ->get();
            $services = Service::all();
            $equipments = Equipment::all();
            $job_orders = JobOrder::findOrFail($job_order_id);
            
            // Calculate the total from tasks
            $total = 0;
            foreach ($tasks as $task) {
                if ($task->equipment) {
                    $total += $task->equipment->equipment_price; // You can also multiply by quantity if necessary
                }
            }

            // Update job order total
            $job_orders->total = $total;

            // Save the job order with the new total
            $job_orders->save();

            return view('admin.joborder.task', compact('tasks', 'times', 'services', 'equipments', 'job_orders', 'job_order_id'));
    
    
            
            


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

// ENDDDDDDDDDDDD







// CRUD



// create

public function createtaskJobOrder(Request $request)
{
    
    return redirect(route('admin/job-order/task'));
    
}



public function savetaskJobOrder(Request $request , $id)
{
    $validation = $request->validate([
        'equipment_name' => 'required',
        'service_name' => 'required',
        'note' => 'required',
    ]);


    $task = Task::create([
        'equipment_name' => $validation['equipment_name'],
        'service_name' => $validation['service_name'],
        'note' => $validation['note'],
        'job_order_id' => $id, // Associate the task with the job order ID
        'status' => 'pending',
    ]);

    if ($task) {
        // Assuming you have a JobOrder model and relationship set up
        // $jobOrder = JobOrder::find($validation['job_order_id']);
        
        // Attach the task ID to the job order (if you have a field for it)
        // $jobOrder->tasks()->attach($task->id); // This assumes a many-to-many relationship

        session()->flash('success', 'Equipment has been added successfully');
        return redirect(route('admin/joborder/task' ,$id));
    } else {
        session()->flash('error', 'Some problem occurred');
        return redirect(route('admin/joborder/task/create'));
    }
}


public function edittaskJobOrder($task_id)
{
    // Find the task associated with the job order
    $task = Task::findOrFail($task_id);
    $equipments = Equipment::all();
   
    return view('admin/job-order/edit', compact('task' , 'equipments'));
}



    // public function deletetaskJobOrder($id)
    // {
    //     $services = Service::findOrFail($id)->delete();
    //     if ($services) {
    //         session()->flash('success', 'User has been Deleted successfully');
    //         return redirect(route('admin/services'));
    //     } else {
    //         session()->flash('erorr', 'User has failed to be Deleted');
    //         return redirect(route('admin/services'));
    //     }
    // }  
    
    // public function updatetaskJobOrder(Request $request, $task_id)
    // {
    //     $tasks = Task::findOrFail($id);
    //     $services = Service::all();
    //     $equipments = Equipment::all();


    //     $service_name = $request->service_name;
    //     $service_price = $request->service_price;
    //     $services->service_name = $service_name;
    //     $services->service_price = $service_price;
        

        
    //     $data = $tasks->save();
    
    //     if ($data) {
    //         session()->flash('success', 'Service Information Updated Successfully');
           
    //         return redirect()->back();
    
    //     } else {
    //         session()->flash('error', 'Some problem occured');
    //         return redirect(route('admin/job-order/task'));
    //     }
    // }  


    public function updatetaskJobOrder(Request $request, $task_id)
{
    // Find the task by its ID
    $task = Task::findOrFail($task_id);
    
    // Validate the request input
    $validation = $request->validate([
       
        'status' => 'required|string', // Add validation for the status field
    ]);

    // Update the task fields with validated data
    $task->update([
   
        'status' => $validation['status'], // Update the status as well
    ]);

    // Redirect with a success message
    return redirect()->route('admin/job-order/task', $task->job_order_id)
                     ->with('success', 'Task updated successfully.');
}




// END


// public function updatetaskJobOrder(Request $request, $job_order_id, $task_id)
// {
//     $validation = $request->validate([
//         'equipment_name' => 'required',
//         'service_name' => 'required',
//         'status' => 'required',
//     ]);

//     // Find the task by job order ID and task ID
//     $task = Task::where('job_order_id', $job_order_id)->findOrFail($task_id);
//      $services = Service::all();
//             $equipments = Equipment::all();

//     // Update the task fields
//     $task->update([
//         'equipment_name' => $validation['equipment_name'],
//         'service_name' => $validation['service_name'],
//         'status' => $validation['status'],
//     ]);

//     session()->flash('success', 'Task has been updated successfully');
//     return redirect(route('admin.job-order.task', ['id' => $job_order_id]));




}
