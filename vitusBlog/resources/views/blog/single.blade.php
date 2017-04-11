@extends('main')

@section('title', "| $post->title" )

@section('active')
  <li class="active"><a href="/home">Home <span class="sr-only">(current)</span></a></li>
  <li><a href="/about">About-Us</a></li>
  <li><a href="/contact">Contact</a></li>
@endsection

@section ('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>{{ $post -> title }}</h1>
    <p>{{ $post -> body }}</p>
  </div>
</div>
@endsection
