<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;






// main routes


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/myprojects', [ProjectController::class, 'projectpage'])
    ->name('prj');


// Contact form submit
Route::post('/sendmessage', [ContactController::class, 'store']);



// ADMIN LOGIN 


// Login page
Route::get('/adminlogin', function () {
    return view('adminlogin');
})->name('login');

// Login form submit
Route::post('/adminlogin', [AdminController::class, 'adminlogin']);









        
        
  
// PROTECTED ADMIN ROUTES


Route::middleware('auth')->group(function () {


    
    // ADMIN DASHBOARD

    Route::get('/admin', function () {
        return view('admindashboard');
    })->name('admin');


    // ADMIN REGISTER
      
Route::get('/adminRegister', [AdminController::class, 'index'])
        ->name('adminRegister');
        



    // Register page
    Route::post('/Register', [AdminController::class, 'store'])
        ->name('Register');


  
    // Register form submit
  


//projects 

    // Add project page
    Route::get('/admin/addproject', [ProjectController::class, 'create'])
        ->name('addproject');


    // Upload/store project
    Route::post('/uploadproject', [ProjectController::class, 'uploadproject'])
        ->name('uploadproject');


    // View all projects in admin panel
    Route::get('/admin/projects', [ProjectController::class, 'showproject'])
        ->name('projectlist');


        Route::delete('/deleteProject/{id}', [ProjectController::class, 'destroy']);

        //update prj
        Route::get('/editProject/{id}', [ProjectController::class, 'edit']);

 Route::put('updateproject/{id}', [ProjectController::class, 'update']);


   
    // ENQUIRIES
    // View contact/enquiries
    Route::get('/admin/enquiries', [ContactController::class, 'showmessage'])
        ->name('enquiries');


       Route::delete('/deleteEnquiry/{id}', [ContactController::class, 'destroy']);
    








        //logout
        Route::post('/logout', [AdminController::class, 'logout']);
    

});
















// TODO: send an email / store the message, e.g.
// Mail::to('your.email@example.com')->send(new ContactMessage($validated));

//     return back()->with('status', 'Your message has been sent — thank you!');
// })->name('contact.send');
