@extends ('main')

@section('title', '| Create New Post')

@section('active')
  <li class="active"><a href="/home">Home <span class="sr-only">(current)</span></a></li>
  <li><a href="/about">About-Us</a></li>
  <li><a href="/contact">Contact</a></li>
@endsection

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Post</h1>
      <hr>
      {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}

        {{ Form::label('title', 'Title:') }}
        {{  Form::text('title', null, array('class' => 'form-control', 'required'=>'')) }}

        {{ Form::label('slug', 'Slug:') }}
        {{  Form::text('slug', null, array('class' => 'form-control', 'required'=>'', 'minlength' => '5', 'maxlength' => '255')) }}

        {{ Form::label('body', 'Post Body:')  }}
        {{ Form::textarea('body', null, array('class' => 'form-control', 'required'=>''))  }}

        {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))  }}



      {!! Form::close() !!}



    </div>
  </div>
@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@endsection
