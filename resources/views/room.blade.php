@extends('layouts.main')
@section('container')
    <img src="..." alt="...">
    <h5>{{ $room->name }}</h5>
    <p>Facilities : {{ $room->facilities }}</p>
    <a href="/rooms">back</a>
@endsection
