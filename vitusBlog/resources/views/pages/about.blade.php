@extends('main')

@section('title', '| About-Me')



@section('active')
        <li ><a href="/home">Home </a></li>
        <li class="active"><a href="/about">About-Me</a></li>
        <li><a href="/contact">Contact</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <h1>About Me</h1>
      <p>It's All About {{ $info['fullname'] }} </p>
    </div>
  </div>
@endsection
