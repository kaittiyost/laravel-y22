@extends('layout')
@section('title','Create')
@section('main')
<br>
<form action="{{url('/game/upload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group card p-3" style="margin-left:20%; margin-right:20%">
        <h3>
            <a href="{{url('/game')}}"><i class="fas fa-arrow-left text-secondary"></i></a>
            Add New Game</h3> <br>
        <div class="input-group mb-3">
            <span class="input-group-text">Title</span>
            <input type="text"  name="title" class="form-control" placeholder="Title">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Description</span>
            <input type="text"  name="description" class="form-control" placeholder="Description">
        </div>
        <span>Tumpnail :</span>
        <div class="input-group mb-3">
            <input type="file"  name="thumbnail" class="form-control" placeholder="Tumpnail">
        </div>
        <span>Game File :</span>
        <div class="input-group mb-3">
            <input type="file"  name="gamefile" class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Slug</span>
            <input type="text"  name="slug" class="form-control" placeholder="Slug">
        </div>
        <br>
        <button class="btn btn-lg btn-success float-right" type="submit" style="width: 20%"><i class="fas fa-upload"></i> Upload</button>
    </div>
</form>

@endsection
