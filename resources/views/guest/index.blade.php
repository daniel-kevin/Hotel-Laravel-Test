@extends('layouts.main')
@section('container')
    <h1>Test Guest Index</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Country</th>
                <th>Birthdate</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guests as $guest)
            <tr>
                <td>{{ $guest->id }}</td>
                <td>{{ $guest->name }}</td>
                <td>{{ $guest->address }}</td>
                <td>{{ $guest->phone }}</td>
                <td>{{ $guest->email }}</td>
                <td>{{ $guest->country }}</td>
                <td>{{ $guest->birthdate }}</td>
                <td>{{ $guest->gender }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection