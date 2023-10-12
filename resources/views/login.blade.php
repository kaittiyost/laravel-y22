@extends('layout')
@section('title', 'Login')
@section('main')

<div class="container">
    <div class="card p-3 mt-4 w-50 shadow ">
        <h1>Login Page</h1>
        @error('message')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
        <form action="{{ url('/checkuser') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-lg btn-info">Login</button>
        </form>
    </div>
</div>
@endsection
