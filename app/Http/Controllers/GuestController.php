<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $guests = Guest::all();
        // dd($guest);
        return view('/guest.index',[
            'title'=>'Guest Index',
            'guests'=>$guests,
        ]);
        // return view('sign_up',[
        //     'title'=> 'Sign Up'
        // ]);
    }
    //just for testing
    /*public function test(Request $request){
        $validate = $request->validate([
            'name'=>'required | min:3',
            'address'=>'required',
            'phone'=>'required|min:12|max:13|numeric',
            'email'=>'required|email',
            'country'=>'required',
            'birthdate' => 'required|date',
            'password'=>"required|min:3",
            'username'=>'required|min:3|unique:guest',
            'gender'=>'required',
        ]);
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sign_up',[
            'title'=> 'Sign Up'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGuestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuestRequest $request)
    {
        $validate = $request->validate([
            'name'=>'required | min:3',
            'address'=>'required',
            'phone'=>'required|min_digits:12|max_digits:13|numeric',
            'email'=>'required|email|unique:guest',
            'country'=>'required',
            'birthdate' => 'required|date',
            'password'=>"required|min:3",
            'username'=>'required|min:3|unique:guest',
            'gender'=>'required',
        ]);
        $guest = new Guest();
        $guest->name = $validate['name'];
        $guest->address = $validate['address'];
        $guest->phone = $validate['phone'];
        $guest->email = $validate['email'];
        $guest->country = $validate['country'];
        $guest->birthdate = $validate['birthdate'];
        $guest->password = Hash::make($validate['password']);
        $guest->username = $validate['username'];
        $guest->gender = $validate['gender'];
        $guest->save();

        return "Data berhasil masuk ke database";
        // dd($request);
        // Guest::create($request->all());
        // return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        return view('/guest.show',[
            'title' => 'Guest Show',
            'guest' => $guest
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuestRequest  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuestRequest $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        //
    }
}
