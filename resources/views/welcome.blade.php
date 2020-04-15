@extends('layouts/main')
@section('content')
<h1>Home that display the first three posts</h1>
<ul>
@foreach ( $posts as $post )
<li><a href="articles/<?php echo $post->post_name; ?>">{{ $post->post_title }}</a></li>

@endforeach
</ul>
@endsection

