@extends('layout')
@section('title','Game')
@section('main')

<div class="p-3 mt-4">
    <div class="row">
        <div class="col-8">
            <h1 class="text-light">Show All Game
                <a type="button" class="btn btn-success" href="{{url('/game/create')}}"><i class="fas fa-plus"></i> New</a>
            </h1>

        </div>
        <div class="col-4">
            <form action="{{ url('/search') }}" method="post" class="mb-3">
                @csrf
                <div class="form-append d-flex">
                    <input type="text" name="keyword" class="form-control me-2">
                    <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4 p-3">
        @foreach ($games as $game)
        <div class="card col-md-2 p-2 me-3 rounded-4">
            <img class="rounded-2" src="{{url('storage/app/'.$game->slug.'/'.$game->thumbnail)}}">

                <h3> <a href="{{url('/game/play/'.$game->slug)}}"> {{ $game->id.$game->title }}</a></h3>
                <label for="">
                    {{ $game->description }}
                </label>
                {{-- <label for="">SLUG : {{ $game->slug }}</label> --}}
                {{-- <label for="">USER_ID : {{ $game->user_id }}</label> --}}

        </div>
        @endforeach
    </div>
</div>

@endsection
