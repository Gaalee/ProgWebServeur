@extends('layouts/main')
@section('content')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="callout success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@foreach ( $posts as $post )
<div class="blog-post">
    <h3 class="inline"><?php echo $post->post_title; ?><small> <?php echo $post->post_date; ?></small></h3><div class="right"><a href="{{ route('articles.edit',$post->id)}}" class="button">Edit</a>
    <form class="inline" action="{{ route('articles.destroy', $post->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button class="alert button" type="submit">Delete</button>
    </form></div><br>
    
    @if($post->post_media == '')
    <img class=img_article src="https://via.placeholder.com/1500x450">
    @else
    <img class=img_article src="{{ asset('images/' . $post->post_media) }}">
    @endif
    <p><?php echo $post->post_content; ?></p>
    <div class="callout">
    <a href="#">Auteur: <?php echo $post->author->name; ?></a>
    </div>
</div>
<hr/>
@endforeach

@endsection

