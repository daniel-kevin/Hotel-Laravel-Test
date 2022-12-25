<?php

namespace App\Http\Controllers;

use App\Models\room_type;
use App\Http\Requests\Storeroom_typeRequest;
use App\Http\Requests\Updateroom_typeRequest;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeroom_typeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeroom_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room_type  $room_type
     * @return \Illuminate\Http\Response
     */
    public function show(room_type $room_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\room_type  $room_type
     * @return \Illuminate\Http\Response
     */
    public function edit(room_type $room_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateroom_typeRequest  $request
     * @param  \App\Models\room_type  $room_type
     * @return \Illuminate\Http\Response
     */
    public function update(Updateroom_typeRequest $request, room_type $room_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room_type  $room_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(room_type $room_type)
    {
        //
    }
}
