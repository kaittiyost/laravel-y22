@extends('layout')
@section('title','Create')
@section('main')

<iframe src="{{url('/storage/app/'.$game->slug.'/FileGame/index.html')}}" frameborder="0" style="width:100%; height:600px">
</iframe>

@endsection
