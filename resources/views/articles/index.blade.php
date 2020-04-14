@extends('layouts/main')
@section('content')

@foreach ( $posts as $post )
<div class="blog-post">
    <h3><?php echo $post->post_title; ?><small> <?php echo $post->post_date; ?></small></h3>
    <p><?php echo $post->post_content; ?></p>
    <div class="callout">
    <a href="#">Auteur: <?php echo $post->author->name; ?></a>
    </div>
</div>
<hr/>
@endforeach

@endsection

