<?php

use App\Http\Controllers\RoomController;
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