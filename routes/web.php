<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomController;
use App\Models\employee;
use App\Models\Guest;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "About Us"
    ]);
});
Route::get('/rooms',[RoomController::class,'index']);
Route::get('/rooms/{name}',[RoomController::class,'show']);
Route::get('/sign_in', function () {
    return view('sign_in',[
        "title" => "Sign In"
    ]);
});
// Route::get('/sign_up',[GuestController::class,'index']);
// Route::resource('/sign_up',GuestController::class);
// Route::post('/proses_sign_up',[GuestController::class,'test']);
Route::get('/guest',[GuestController::class,'index'])->name('guest.index');
Route::get('/guest/create',[GuestController::class,'create'])->name('guest.create');
Route::post('/guest',[GuestController::class,'store'])->name('guest.store');
Route::get('/guest/{guest}',[GuestController::class,'show'])->name('guest.show');
Route::get('/employee',[EmployeeController::class,'index'])->name('employee.index');
Route::post('/employee',[EmployeeController::class,'store'])->name('employee.store');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::get('/employee/{employee}/edit',[EmployeeController::class,'edit'])->name('employee.edit');
Route::put('/employee/{employee}',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/employee/{employee}',[EmployeeController::class,'show'])->name(('employee.show'));
Route::delete('/employee/{employee}',[EmployeeController::class,'destroy'])->name('employee.destroy');