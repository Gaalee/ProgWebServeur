@extends('layouts/main')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1>Edit an Article</h1>
  <div>
    @if ($errors->any())
      <div class="callout alert">
            @foreach ($errors->all() as $error)
            <i class="fas fa-exclamation-triangle red" style="color:red;"></i>{{ $error }}<br>
            @endforeach
      
      </div><br />
    @endif
      <form method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
      @method('PATCH')
      @csrf
              <label for="post_title">Post title :</label>
              <input type="text" name="post_title" value="{{ $article->post_title }}" />

              <label for="post_media">Post Media :</label>
              <input type="file" name="post_media"/>

              <label for="post_content">Post content :</label>
              <input type="text" name="post_content" value="{{ $article->post_content }}"/>

            <label for="post_content">Post type :</label>
            <select name="post_type">
              <option value="Tutorial" <?php if ($article->post_type == 'Tutorial') echo 'selected';?>>Tutorial</option>
              <option value="News" <?php if ($article->post_type == 'News') echo 'selected';?>>News</option>
              <option value="Report" <?php if ($article->post_type == 'Report') echo 'selected';?>>Report</option>
            </select>

            <label for="post_content">Post category :</label>
            <select name="post_category">
              <option value="Food" <?php if ($article->post_category == 'Food') echo 'selected';?>>Food</option>
              <option value="Gaming" <?php if ($article->post_category == 'Gaming') echo 'selected';?>>Gaming</option>
              <option value="Sport" <?php if ($article->post_category == 'Sport') echo 'selected';?>>Sport</option>
              <option value="Reading" <?php if ($article->post_category == 'Reading') echo 'selected';?>>Reading</option>
            </select>

            <label for="post_status">Post status :</label>
            <select name="post_status">
              <option value="open" <?php if ($article->post_status == 'open') echo 'selected';?>>Open</option>
              <option value="closed" <?php if ($article->post_status == 'closed') echo 'selected';?>>Closed</option>
            </select>

          <button type="submit" class="button">Update Article</button>
      </form>
  </div>
</div>
</div>
@endsection