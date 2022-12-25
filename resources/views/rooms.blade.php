@extends('layouts.main')
@section('container')
    <h1>Ini Rooms</h1>
    <div class="row justify-content-between">
        @foreach ($rooms as $room)
            <div class="col d-flex justify-content-center">
                <div class="card mb-5" style="width: 30rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $room->name }}</h5>
                    <p class="card-text">Facilities : {{ $room->facilities }}</p>
                    <a href="/rooms/{{ $room->name }}" class="btn btn-primary">Check Room</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection