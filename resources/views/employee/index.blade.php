@extends('layouts.main')
@section('container')
    <h1>Test Employee Index</h1>
    @if (session()->has('pesan'))
        <div class="alert alert-success">
            {{ session()->get('pesan') }}
        </div>
    @endif
    <a href="/employee/create">
        <button class="btn btn-primary">Add Employee</button>
    </a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Username</th>
                <th>Shift</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->username }}</td>
                <td>{{ $employee->shift }}</td>
                <td>
                    <a href="/employee/{{ $employee->id }}/edit">
                        <button class="btn btn-success">EDIT</button>
                    </a>
                    <form action="{{ route('employee.destroy',['employee'=>$employee->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection