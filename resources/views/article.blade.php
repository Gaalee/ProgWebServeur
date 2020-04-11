@extends('layouts/main')

@section('content')
<div class="blog-post">
    <h3><?php echo $post->post_title; ?><small><?php echo $post->post_date; ?></small></h3>
    <p><?php echo $post->post_content; ?></p>
    <div class="callout">
    <ul class="menu simple">
    <li><a href="#">Auteur: <?php echo $post->author->name; ?></a></li>
    </ul>
    </div>
</div>
@endsection


