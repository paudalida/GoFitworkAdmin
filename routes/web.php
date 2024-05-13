<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Enquiries;

Route::get('/', function () {
    return view('welcome');
});

// default view
// Route::get('/', function (Request $request) {
//     return response()->json(['Response' => 'GoFitwork back-end is up and running']);
// });

//Route::get('/users', [UserController::class, 'index']);

Route::get('/users', function() {
    $users = User::all();
 
    return $users;
 
}); 

Route::get('/enquiries', function() {
    $enquiries = Enquiries::all();
 
    return $enquiries;
 
}); 
