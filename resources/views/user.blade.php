@extends('layout')
@section('title', 'User')
@section('main')

    <div class="card p-3 shadow mt-4">
        <div class="row">
            <div class="col-8">
                <h1>Show All User</h1>
            </div>
            <div class="col-4">
                <form action="{{ url('/search') }}" method="post" class="mb-3">
                    @csrf
                    <div class="form-append d-flex">
                        <input type="text" name="keyword" class="form-control me-2">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <td>id</td>
                    <td>username</td>
                    <td>password</td>
                    <td>user_type</td>
                    <td>regis_time</td>
                    <td>last_login</td>
                    <td>score</td>
                    <td>blocked</td>
                    <td>resons</td>
                    <td>create_at</td>
                    <td>update_at</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="text-danger">{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->user_type }}</td>
                        <td>{{ $user->registered_time }}</td>
                        <td>{{ $user->last_login }}</td>
                        <td>{{ $user->score }}</td>
                        <td>{{ $user->blocked }}</td>
                        <td>{{ $user->reasons }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
