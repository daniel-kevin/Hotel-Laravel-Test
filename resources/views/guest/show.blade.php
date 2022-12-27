@extends('layouts.main')
@section('container')
    <h1>Test Guest Show</h1>
    <h2>nama : {{ $guest->name }}</h2>
    <h2>address : {{ $guest->address }}</h2>
    <h2>phone : {{ $guest->phone }}</h2>
    <h2>email : {{ $guest->email }}</h2>
    <h2>country : {{ $guest->country }}</h2>
    <h2>birthdate : {{ $guest->birthdate }}</h2>
    <h2>username : {{ $guest->username }}</h2>
    <h2>gender : {{ $guest->gender }}</h2>
@endsection