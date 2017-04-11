<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
<a class="navbar-brand" href="#">vitusBlog</a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    <li class="{{ Request::is('/') ?  "active" :"" }}"><a href="/">Home </a></li>
    <li class="{{ Request::is('blog') ?  "active" :"" }}"><a href="/blog">Blog </a></li>
    <li class="{{ Request::is('about') ?  "active" :"" }}"><a href="/about">About-Us </a></li>
    <li class="{{ Request::is('contact') ?  "active" :"" }}"><a href="/contact">Contact</a></li>
  </ul>

  <ul class="nav navbar-nav navbar-right"><!--Drop Down Start here and is aligned right-->


    <li class="dropdown">
      <button class="btn btn-info navbar-btn dropdown-toggle" id="dropdownMenu1" type="button" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> My Account <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="{{ route('posts.index') }}">Posts</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#"><i class="glyphicon glyphicon-off"></i>Logout</a></li>
      </ul>
    </li>
  </ul><!--Dropdown Ends Here -->
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<!-- nav bar ends here -->
