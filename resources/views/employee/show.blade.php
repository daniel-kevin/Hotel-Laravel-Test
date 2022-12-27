@extends('layouts.main')
@section('container')
    <h1>Test Employee Show</h1>
    <h2>nama : {{ $employee->name }}</h2>
    <h2>address : {{ $employee->address }}</h2>
    <h2>phone : {{ $employee->phone }}</h2>
    <h2>username : {{ $employee->username }}</h2>
    <h2>shift : {{ $employee->shift }}</h2>
@endsection