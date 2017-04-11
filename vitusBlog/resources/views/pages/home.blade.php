@extends('main')

@section('title', '| Homepage')





  @section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to Emmanuel's Blog</h1>
        <p class="lead">Thank you so much for visiting. </br> Please read my Popular post</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
      </div>
    </div>
  </div><!--End of Row -->

  <div class="row">
    <div class="col-md-8"> <!-- Begining of main post -->

      @foreach ($posts as $post)
        <div class="post">
          <h3>{{ $post -> title }}</h3>
          <p>{{ substr($post -> body, 0, 255) }} {{ strlen($post->body) > 300 ? "..." : "" }}</p>
          <a href="{{ url('blog/'.$post -> slug) }}" class="btn btn-primary">Read More</a>
        </div>
        <hr>
      @endforeach
    </div><!--End of Main Post-->

    <div class="col-md-3 col-md-offset-1"><!--Begining of sideBar -->
      <h3>SideBar</h3>
    </div>

  </div>
@endsection
