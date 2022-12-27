@extends('layouts.main')
@section('container')
<div class="container vh-100">
    <h1>Ini Sign in</h1>
    <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection