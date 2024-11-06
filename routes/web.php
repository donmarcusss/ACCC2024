<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SecretaryController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('index');
});


// ADMIN 

Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout'); // Log Out


Route::controller(AdminController::class)->group(function () { // Admin pages
    Route::get('/home', 'index')->name('admin.index');
    
    Route::get('/admin/vehicleUpdate', 'vehicleUpdate');
    Route::get('/admin/schedule', 'schedule')->name('admin.schedule');
    Route::get('/admin/appointments', 'appointments')->name('admin.appointments');
    

    // Route::get('/admin/roles', 'roles');
    Route::get('/admin/roles/create', 'create'); //CREATE -- roles
    Route::get('/admin/services/create', 'create'); //CREATE -- roles
    Route::get('/admin/appointments/create', 'create'); //CREATE -- roles
     
  
    Route::get('/admin/logs', 'logs');
 
    
    
});


// REPORTS
Route::get('/admin/booking-reports', [AdminController::class, 'bookingReports'])->name('admin.booking-reports');
Route::get('/admin/job-order-reports', [AdminController::class, 'jobOrderReports'])->name('admin.job-order-reports');
Route::get('/admin/transaction-reports', [AdminController::class, 'transactionReports'])->name('admin.transaction-reports');

// ROLES USERS
Route::get('/admin/roles', [AdminController::class, 'roles'])->name('admin/roles');
Route::post('/admin/roles/save', [AdminController::class, 'save'])->name('admin/roles/save'); //SAVE 
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin/edit'); //EDIT 
Route::put('/admin/edit/{id}', [AdminController::class, 'update'])->name('admin.update'); //UPDATE 
Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin/delete'); //DELETE 


// SERVICES
Route::get('/admin/services', [AdminController::class, 'services'])->name('admin/services');
Route::post('/admin/services/save', [AdminController::class, 'saveService'])->name('admin/services/save'); //SAVE  
Route::get('/admin/services/edit/{id}', [AdminController::class, 'editService'])->name('admin/services/edit'); //EDIT 
Route::put('/admin/services/edit/{id}', [AdminController::class, 'updateService'])->name('admin/services/update'); //UPDATE 
Route::get('/admin/services/delete/{id}', [AdminController::class, 'deleteService'])->name('admin/services/delete'); //DELETE 


// EQUIPMENTS
Route::get('/admin/equipments', [AdminController::class, 'equipments'])->name('admin/equipments');
Route::post('/admin/equipments/save', [AdminController::class, 'saveEquipment'])->name('admin/equipments/save'); //SAVE  
Route::get('/admin/equipments/edit/{id}', [AdminController::class, 'editEquipment'])->name('admin/equipments/edit'); //EDIT 
Route::put('/admin/equipments/edit/{id}', [AdminController::class, 'updateEquipment'])->name('admin/equipments/update'); //UPDATE 
Route::get('/admin/equipments/delete/{id}', [AdminController::class, 'deleteEquipment'])->name('admin/equipments/delete'); //DELETE 

// PRINT
Route::get('/admin/job-order/{jobOrderId}/tasks/print', [AdminController::class, 'print'])->name('admin.job-order.print');


// TASKS

Route::get('/admin/joborder/task/{job_order_id}', [TaskController::class, 'taskJobOrder'])->name('admin/joborder/task'); // VIEW
Route::get('/admin/joborder/task/{id}/create', [TaskController::class, 'createtaskJobOrder'])->name('admin/joborder/task/create'); // CREATE
Route::post('/admin/joborder/task/save/{id}', [TaskController::class, 'savetaskJobOrder'])->name('admin.joborder.task.save'); // SAVE
// Route::get('/admin/joborder/edit/{task_id}', [TaskController::class, 'edittaskJobOrder'])->name('admin/joborder/edit'); // EDIT

// Route::put('/admin/job-order/update/{task_id}', [TaskController::class, 'updatetaskJobOrder'])->name('admin/job-order/update'); // UPDATE
Route::get('/admin/joborder/task/delete/{task_id}', [TaskController::class, 'deletetaskJobOrder'])->name('admin/joborder/task/delete'); // DELETE


// Route::get('/admin/job-order/task/create', [AdminController::class, 'createTask'])->name('admin.job-order.task.create'); // CREATE
// Route::post('/admin/job-order/task', [AdminController::class, 'saveTask'])->name('task.store'); //SAVE  
// Route::get('/admin/job-order/task/edit/{id}', [AdminController::class, 'editTask'])->name('admin/job-order/task/edit'); // EDIT
// Route::put('/admin/order/edit/{id}', [AdminController::class, 'updateTask'])->name('admin/job-order/task/update'); //UPDATE 
// Route::get('/admin/job-order/task/delete/{id}', [AdminController::class, 'deleteTaskt'])->name('admin/job-order/task/delete'); //DELETE 

Route::get('/booking/first-name/{id}', [AdminController::class, 'getFirstNameByBookingId']);


// APPOINTMENTS
Route::get('/admin/appointments', [AdminController::class, 'appointments'])->name('admin/appointments');

Route::post('/admin/appointments/save', [AdminController::class, 'saveAppointment'])->name('admin.appointments.save');
Route::get('/admin/appointments/edit/{id}', [AdminController::class, 'editAppointment'])->name('admin.appointments.edit'); //EDIT 
Route::put('/admin/appointments/{id}', [AdminController::class, 'updateAppointment'])->name('admin.appointments.update'); //UPDATE 
Route::get('/admin/appointments/delete/{id}', [AdminController::class, 'deleteEquipment'])->name('admin.appointments.delete'); //DELETE 



// BOOKINGS
Route::get('/admin/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
Route::post('/admin/bookings/save', [AdminController::class, 'saveBooking'])->name('admin.bookings.save'); //SAVE  
Route::get('/admin/bookings/edit/{id}', [AdminController::class, 'editBooking'])->name('admin.bookings.edit'); //EDIT 
Route::put('/admin/bookings/{id}', [AdminController::class, 'updateBooking'])->name('admin.bookings.update'); //UPDATE 
Route::get('/admin/bookings/delete/{id}', [AdminController::class, 'deleteBooking'])->name('admin.bookings.delete'); //DELETE 



// VEHICLES
Route::get('/admin/vehicles', [AdminController::class, 'vehicles'])->name('admin.vehicles');
Route::post('/admin/vehicles/save', [AdminController::class, 'saveVehicles'])->name('admin.vehicles.save'); //SAVE 
Route::get('/admin/vehicles/edit/{id}', [AdminController::class, 'editVehicles'])->name('admin.vehicles.edit'); //EDIT 
Route::put('/admin/vehicles/{id}', [AdminController::class, 'updateVehicles'])->name('admin.vehicles.update'); //UPDATE 
Route::get('/admin/vehicles/delete/{id}', [AdminController::class, 'deleteVehicles'])->name('admin.vehicles.delete'); //DELETE  


// VEHICLE TYPE
Route::post('/admin/vehiclesType/save', [AdminController::class, 'saveVehicleType'])->name('admin.vehicleType.save'); //SAVE VEHICLE TYPE 
// VEHICLE MANUFACTURER
Route::post('/admin/vehiclesManufacturer/save', [AdminController::class, 'saveVehicleManufacturer'])->name('admin.vehicleManufacturer.save'); //SAVE VEHICLE MANUFACTURER
// VEHICLE MODEL
Route::post('/admin/vehiclesModel/save', [AdminController::class, 'saveVehicleModel'])->name('admin.vehicleModel.save'); //SAVE VEHICLE MODEL

// MY-CARS AJAX

Route::get('/get-models', [UserController::class, 'getModels']);


// BOOK-NOW USER
 //SAVE 

// QUOTATION
Route::get('/admin/quotation', [AdminController::class, 'quotation'])->name('admin/quotation');
Route::get('/admin/quotation/create', [AdminController::class, 'createQuotation'])->name('admin/quotation/create');

Route::post('/admin/quotation/save', [AdminController::class, 'saveQuotation'])->name('admin/quotation/save'); //SAVE  
Route::get('/admin/quotation/edit/{id}', [AdminController::class, 'editQuotation'])->name('admin/quotation/edit'); //EDIT 
Route::put('/admin/quotation/edit/{id}', [AdminController::class, 'updateQuotation'])->name('admin/quotation/update'); //UPDATE 
Route::get('/admin/quotation/delete/{id}', [AdminController::class, 'deleteQuotation'])->name('admin.quotation.delete'); //DELETE 



// QUOTATIONS
Route::get('/admin/quotations', [AdminController::class, 'quotations'])->name('admin.quotations');
Route::post('/admin/quotations/save', [AdminController::class, 'saveQuotations'])->name('admin.quotations.save'); //SAVE  
// Route::get('/admin/quotations/edit/{id}', [AdminController::class, 'editQuotation'])->name('admin/quotation/edit'); //EDIT 
// Route::put('/admin/quotations/edit/{id}', [AdminController::class, 'updateQuotation'])->name('admin/quotation/update'); //UPDATE 
// Route::get('/admin/quotations/delete/{id}', [AdminController::class, 'deleteQuotation'])->name('admin.quotation.delete'); //DELETE 



// JOB-ORDER

Route::get('/admin/job-order', [AdminController::class, 'jobOrder'])->name('admin/job-order');

Route::get('/admin/job-order/{id}', [AdminController::class, 'userJobOrder'])->name('admin.job-order');


Route::post('/admin/job-order/save', [AdminController::class, 'saveJobOrder'])->name('admin/job-order/save'); //SAVE  

Route::get('/admin/joborder/edit/{id}', [AdminController::class, 'editJobOrder'])->name('admin.joborder.edit'); //EDIT 

Route::put('/admin/joborder/update/{id}', [AdminController::class, 'updateJobOrder'])->name('admin.joborder.update'); //UPDATE 

Route::get('/admin/joborder/delete/{id}', [AdminController::class, 'deleteJobOrder'])->name('admin/joborder/delete'); //DELETE 



// BILLING

Route::get('/admin/transactions', [AdminController::class, 'transaction'])->name('admin.transactions');
Route::post('/admin/transactions/save', [AdminController::class, 'saveTransaction'])->name('admin.transactions.save'); //SAVE 
Route::get('/admin/transactions/edit/{id}', [AdminController::class, 'editTransaction'])->name('admin.transactions.edit'); //EDIT 
Route::put('/admin/transactions/{id}', [AdminController::class, 'updateTransaction'])->name('admin.transactions.update'); //UPDATE 
Route::get('/admin/transactions/delete/{id}', [AdminController::class, 'deleteTransaction'])->name('admin.transactions.delete'); //DELETE


// AJAX BILLING
Route::get('/job-order-total/{id}', [AdminController::class, 'getJobOrderTotal']);


// AJAX CREATING TASK IN JOB_ORDER
Route::get('/get-equipments/{serviceId}', [AdminController::class, 'getEquipments']);








// MY-CARS


// users booking

 //CREATE 
// Route::post('/book-now/save', [UserController::class, 'saveBook'])->name('book.save'); //SAVE 




// SECRETARY

Route::get('/secretary/logout', [SecretaryController::class, 'SecretaryLogout'])->name('secretary.logout'); // Log Out



Route::get('/secretary/schedule', [SecretaryController::class, 'schedule'])->name('schedule');


// appointments
Route::get('/secretary/appointments', [SecretaryController::class, 'appointments'])->name('secretary/appointments');
Route::post('/secretary/appointments/save', [SecretaryController::class, 'saveAppointment'])->name('secretary/appointments/save'); //SAVE  
Route::get('/secretary/appointments/edit/{id}', [SecretaryController::class, 'editAppointment'])->name('secretary/appointments/edit'); //EDIT 
Route::put('/secretary/appointments/edit/{id}', [SecretaryController::class, 'updateAppointment'])->name('secretary/appointments/update'); //UPDATE 
Route::get('/secretary/appointments/delete/{id}', [SecretaryController::class, 'deleteAppointment'])->name('secretary/appointments/delete'); //DELETE 

// quotation
Route::get('/secretary/quotation', [SecretaryController::class, 'quotation'])->name('secretary/quotation');
Route::get('/secretary/quotation/create', [SecretaryController::class, 'createQuotation'])->name('secretary/quotation/create');
Route::post('/secretary/quotation/save', [SecretaryController::class, 'saveQuotation'])->name('secretary/quotation/save'); //SAVE  
Route::get('/secretary/quotation/edit/{id}', [SecretaryController::class, 'editQuotation'])->name('secretary/quotation/edit'); //EDIT 
Route::put('/secretary/quotation/edit/{id}', [SecretaryController::class, 'updateQuotation'])->name('secretary/quotation/update'); //UPDATE 
Route::get('/secretary/quotation/delete/{id}', [SecretaryController::class, 'deleteQuotation'])->name('secretary.quotation.delete'); //DELETE

// booking
Route::get('/secretary/bookings', [SecretaryController::class, 'secretarybookings'])->name('secretary.bookings');
Route::post('/secretary/bookings/save', [SecretaryController::class, 'secretarybookingssaveBooking'])->name('secretary.bookings.save'); //SAVE  
Route::get('/secretary/bookings/edit/{id}', [SecretaryController::class, 'secretarybookingseditBooking'])->name('secretary.bookings.edit'); //EDIT 
Route::put('/secretary/bookings/{id}', [SecretaryController::class, 'secretarybookingsupdateBooking'])->name('secretary.bookings.update'); //UPDATE 
Route::get('/secretary/bookings/delete/{id}', [SecretaryController::class, 'secretarybookingsdeleteBooking'])->name('secretary.bookings.delete'); //DELETE 


// TASKS

// PRINT
Route::get('/secretary/job-order/{jobOrderId}/tasks/print', [SecretaryController::class, 'print'])->name('secretary.job-order.print');


// TASKS

Route::get('/secretary/job-order/task/{job_order_id}', [SecretaryController::class, 'taskJobOrder'])->name('secretary/job-order/task'); // VIEW
Route::get('/secretary/job-order/task/{id}/create', [SecretaryController::class, 'createtaskJobOrder'])->name('secretary/job-order/task/create'); // CREATE
Route::post('/secretary/job-order/task/save/{id}', [SecretaryController::class, 'savetaskJobOrder'])->name('secretary.job-order.task.save'); // SAVE
Route::get('/secretary/job-order/edit/{task_id}', [SecretaryController::class, 'edittaskJobOrder'])->name('secretary/job-order/edit'); // EDIT

// Route::put('/admin/job-order/update/{task_id}', [TaskController::class, 'updatetaskJobOrder'])->name('admin/job-order/update'); // UPDATE
Route::get('/secretary/job-order/task/delete/{task_id}', [SecretaryController::class, 'deletetaskJobOrder'])->name('secretary/job-order/task/delete'); // DELETE



// JOB ORDER

Route::get('/secretary/job-order', [SecretaryController::class, 'jobOrder'])->name('secretary/job-order');

Route::get('/secretary/job-order/{id}', [SecretaryController::class, 'userJobOrder'])->name('secretary.job-order');


Route::post('/secretary/job-order/save', [SecretaryController::class, 'saveJobOrder'])->name('secretary/job-order/save'); //SAVE  

Route::get('/secretary/job-order/edit/{id}', [SecretaryController::class, 'editJobOrder'])->name('secretary.job-order.edit'); //EDIT 

Route::put('/secretary/job-order/update/{id}', [SecretaryController::class, 'updateJobOrder'])->name('secretary.job-order.update'); //UPDATE 

// Route::get('/secretary/job-order/delete/{id}', [SecretaryController::class, 'deleteJobOrder'])->name('secretary/job-order/delete'); //DELETE 



Route::get('/secretary/index', [SecretaryController::class, 'secretaryindex'])->name('secretary.index');



Route::controller(SecretaryController::class)->group(function () { 
    Route::get('/home', 'secretary')->name('secretary.index');

    // Route::get('/secretary/schedule', 'schedule');
    Route::get('/secretary/job-order', 'joborder');
    
 
    Route::get('/secretary/billing', 'billing');
    Route::get('/secretary/services', 'services');
    Route::get('/secretary/reports', 'reports');
    Route::get('/secretary/schedule', 'schedule')->name('secretary.schedule');

    
});



// MECHANIC

Route::get('/mechanic/logout', [MechanicController::class, 'MechanicLogout'])->name('mechanic.logout'); // Log Out
Route::get('/mechanic/schedule', [MechanicController::class, 'schedule'])->name('schedule');

Route::controller(MechanicController::class)->group(function () { // Admin pages
    Route::get('/mechanic/index', 'mechanic');
    // Route::get('/mechanic/schedule', 'schedule');
    Route::get('/mechanic/job-order', 'joborder');
    Route::get('/mechanic/update', 'update');
});



// DEFAULT 
Route::view('services' , 'services' )->name('services');

Route::view('contact' , 'contact' )->name('contact');

Route::view('about' , 'about' )->name('about');

Route::view('ediwow' , 'ediwow' )->name('ediwow');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/homepage', function () {
        return view('homepage');
    })->name('homepage');

    Route::post('/users/create', [UserController::class, 'create'])->name('users/create');
    Route::get('booking', [UserController::class, 'booking'])->name('booking');
    Route::get('vehicle-update', [UserController::class, 'vehicle_update'])->name('vehicle-update');
    Route::get('/book-now', [UserController::class, 'BookNow'])->name('book-now');
    Route::post('/book-now/save', [UserController::class, 'saveBookNow'])->name('book-now.save');

    // MY CARS
    Route::get('my-car', [UserController::class, 'MyCar'])->name('my-car');
    Route::post('/my-car/save', [UserController::class, 'saveMyCar'])->name('my-car.save'); //SAVE 
    Route::get('/my-car/edit/{id}', [UserController::class, 'editMyCar'])->name('my-car.edit'); //EDIT 
    Route::put('/my-car/{id}', [UserController::class, 'updateMyCar'])->name('my-car.update'); //UPDATE 
    Route::get('/my-car/delete/{id}', [UserController::class, 'deleteMyCar'])->name('my-car.delete'); //DELETE  

    Route::get('repair-history', function () {
        return view('repair-history');
    })->name('repair-history');

    Route::get('contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('about', function () {
        return view('about');
    })->name('about');







//     // SECRETARY

//     Route::get('/secretary/dashboard', function () {
//         return view('/secretary/dashboard');
//     })->name('/secretary/dashboard');

//     Route::get('/secretary/appointment', function () {
//         return view('/secretary/appointment');
//     })->name('/secretary/appointment');

//     Route::get('/secretary/schedule', function () {
//         return view('/secretary/schedule');
//     })->name('/secretary/schedule');

//     Route::get('/secretary/job-order', function () {
//         return view('/secretary/job-order');
//     })->name('/secretary/job-order');

//     Route::get('/secretary/update', function () {
//         return view('/secretary/update');
//     })->name('/secretary/update');


//     Route::get('/secretary/services', function () {
//         return view('/secretary/services');
//     })->name('/secretary/services');

//     Route::get('/secretary/billing', function () {
//         return view('/secretary/billing');
//     })->name('/secretary/billing');

});


