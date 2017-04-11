@if (Session::has('success'))

//content
<div class="alert alert-success" role="alert">
  <strong>Success:</strong> {{ Session::get('success') }}
</div>

@endif

@if (count($errors) > 0)
  <div class="alert alert-danger" role="alert">
    <strong>Errors:</strong>
    @foreach ($error -> all() as $error)
      <li> {{$error}} </li>
    @endforeach
  </div>
@endif
