@extends('layouts/main')
@section('content')
<ul>
@foreach ( $posts as $post )
<li><a href="articles/<?php echo $post->post_name; ?>">{{ $post->post_title }}</a></li>

@endforeach
</ul>
@endsection

