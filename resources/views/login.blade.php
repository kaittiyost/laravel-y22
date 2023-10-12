@extends('layout')
@section('title', 'Login')
@section('main')

    <div class="row p-3 " style="margin-left:20%; margin-right:20%">

            <div class="card p-4 mt-4 justify-content-center">
                <h1 class="mb-3">Login Page</h1>
                @error('message')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                <form action="{{ url('/checkuser') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Username</span>
                        <input type="text"  name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Password</span>
                        <input type="password"  name="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Login</button>
                </form>
            </div>

    </div>

@endsection
