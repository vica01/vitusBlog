@extends ('main')

@section('title', '| Edit Post')

@section('active')
  <li class="active"><a href="/home">Home <span class="sr-only">(current)</span></a></li>
  <li><a href="/about">About-Us</a></li>
  <li><a href="/contact">Contact</a></li>
@endsection

@section('content')

  <div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="col-md-8">
      {{ Form::label('title', 'Title:') }}
      {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

      {{ Form::label('slug', 'Slug:', ["class" => 'form-spacing-top']) }}
      {{ Form::text('slug', null, ["class" => 'form-control']) }}

      {{ Form::label('body', 'Body:', ["class" => 'form-spacing-top']) }}
      {{ Form::textarea('body', null, ["class" => 'form-control']) }}

    </div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Create At:</dt>
          <dd>{{date( 'M j, Y h:ia',strtotime($post -> created_at))}}</dd>
        </dl>
        <dl class="dl-horizontal">
          <dt>Last Updated:</dt>
          <dd>{{date( 'M j, Y h:ia',strtotime($post -> updated_at))}}</dd>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.show', 'Cancel', array($post -> id), array('class' => 'btn btn-danger btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
