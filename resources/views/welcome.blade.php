@extends('layouts/main')
@section('content')
@if(session()->get('error'))
    <div class="callout alert">
    <i class="fas fa-exclamation-triangle red" style="color:red;"></i> {{ session()->get('error') }}  
    </div>
  @endif
<h1>Home that display the first three posts</h1>
<ul>
@foreach ( $posts as $post )
<li><a href="articles/<?php echo $post->post_name; ?>">{{ $post->post_title }}</a></li>

@endforeach
</ul>
@endsection

