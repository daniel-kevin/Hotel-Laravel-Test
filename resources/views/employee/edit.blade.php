@extends('layouts.main')
@section('container')
    <h1>Edit Employee</h1>
    <form action="{{ route('employee.update',['employee' => $employee->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') ?? $employee->name}}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address">{{ old('address') ?? $employee->address}}</textarea>
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone') ?? $employee->phone}}">
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') ?? $employee->username}}">
            @error('username')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="shift">Shift</label>
            <select class="form-select" name="shift">
              <option value="morning" {{ (old('shift') ?? $employee->shift) == 'morning' ? 'selected':''}}>morning</option>
              <option value="afternoon" {{ (old('shift') ?? $employee->shift) == 'afternoon' ? 'selected':''}}>afternoon</option>
              <option value="night" {{ (old('shift') ?? $employee->shift) == 'night' ? 'selected':''}}>night</option>
            </select>
        </div>
        @error('shift')
          <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection