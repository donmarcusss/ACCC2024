<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});





Route::view('services' , 'services' )->name('services');

Route::view('contact' , 'contact' )->name('contact');

Route::view('about' , 'about' )->name('about');

Route::view('ediwow' , 'ediwow' )->name('ediwow');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/book-now', function () {
        return view('book-now');
    })->name('book-now');


    // USER


    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('vehicle-update', function () {
        return view('vehicle-update');
    })->name('vehicle-update');

    Route::get('booking', function () {
        return view('booking');
    })->name('booking');

    Route::get('repair-history', function () {
        return view('repair-history');
    })->name('repair-history');

    Route::get('contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('about', function () {
        return view('about');
    })->name('about');




    // ADMIN SIDE
    Route::get('/admin/dashboard', function () {
        return view('/admin/dashboard');
    })->name('/admin/dashboard');

    Route::get('/admin/content', function () {
        return view('admin/content');
    })->name('admin/content');

    Route::get('/admin/appointment', function () {
        return view('admin/appointment');
    })->name('admin/appointment');

    Route::get('/admin/schedule', function () {
        return view('admin/schedule');
    })->name('admin/schedule');

    Route::get('/admin/job-order', function () {
        return view('admin/job-order');
    })->name('admin/job-order');

    Route::get('/admin/roles', function () {
        return view('admin/roles');
    })->name('admin/roles');


    Route::get('/admin/reports', function () {
        return view('admin/reports');
    })->name('admin/reports');


    Route::get('/mechanic/dashboard', function () {
        return view('mechanic/dashboard');
    })->name('mechanic/dashboard');

    Route::get('/admin/update', function () {
        return view('/admin/update');
    })->name('/admin/update');
    
    Route::get('/admin/services', function () {
        return view('/admin/services');
    })->name('/admin/services');

    
    Route::get('/admin/logs', function () {
        return view('/admin/logs');
    })->name('/admin/logs');



    Route::get('/admin/billing', function () {
        return view('/admin/billing');
    })->name('/admin/billing');


    // MECHANIC

    Route::get('/mechanic/dashboard', function () {
        return view('/mechanic/dashboard');
    })->name('/mechanic/dashboard');

   

    Route::get('/mechanic/schedule', function () {
        return view('/mechanic/schedule');
    })->name('/mechanic/schedule');


    Route::get('/mechanic/job-order', function () {
        return view('/mechanic/job-order');
    })->name('/mechanic/job-order');

    Route::get('/mechanic/update', function () {
        return view('/mechanic/update');
    })->name('/mechanic/update');



    // SECRETARY

    Route::get('/secretary/dashboard', function () {
        return view('/secretary/dashboard');
    })->name('/secretary/dashboard');

    Route::get('/secretary/appointment', function () {
        return view('/secretary/appointment');
    })->name('/secretary/appointment');

    Route::get('/secretary/schedule', function () {
        return view('/secretary/schedule');
    })->name('/secretary/schedule');

    Route::get('/secretary/job-order', function () {
        return view('/secretary/job-order');
    })->name('/secretary/job-order');

    Route::get('/secretary/update', function () {
        return view('/secretary/update');
    })->name('/secretary/update');


    Route::get('/secretary/services', function () {
        return view('/secretary/services');
    })->name('/secretary/services');

    Route::get('/secretary/billing', function () {
        return view('/secretary/billing');
    })->name('/secretary/billing');

});


