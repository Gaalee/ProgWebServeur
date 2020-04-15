<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<script src="https://kit.fontawesome.com/3cdd8deb39.js" crossorigin="anonymous"></script>
<link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" >

</head>
<body>

<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Blog</li>
<li><a href="/">Home</a></li>
<li><a href="/articles">Articles</a></li>
<li><a href="{{ route('articles.index')}}">Articles View By Admin</a></li>
<li><a href="{{ route('articles.create')}}">Add Articles</a></li>
<li><a href="/contact">Contact</a></li>

</div>


<div class="top-bar-right">
    <ul class="menu">
    @guest
<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
 @else
<li>{{ Auth::user()->name }}</li>
<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 @csrf
 </form>
</li>
@endguest
</ul>
    </ul>
  </div>
  </div>

<div class="callout large primary">
<div class="row column text-center">
<h1>Our Blog</h1>
<h2 class="subheader">Such a Simple Blog Layout</h2>
</div>
</div>

<div class="row medium-8 large-7 columns">
@yield('content')
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
