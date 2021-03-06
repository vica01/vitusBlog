@extends('main')

@section('title', '| Contact')



@section('active')
        <li ><a href="/home">Home </a></li>
        <li ><a href="/about">About-Me</a></li>
        <li class="active"><a href="/contact">Contact</a></li>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>Contact Me</h1>
      <hr>
      <form>

        <div class="form-group">
          <label name="email">Email:</label>
          <input id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label name="subject">Subject:</label>
          <input id="subject" name="subject" class="form-control">
        </div>

        <div class="form-group">
          <label name="message">Message:</label>
          <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
        </div>

        <input type="submit" value="send message" class="btn btn-success">

    </div>
  </div>
@endsection
