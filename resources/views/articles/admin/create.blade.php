@extends('layouts/main')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1>Add a contact</h1>
  <div>
    @if ($errors->any())
      <div class="callout alert">
        
            @foreach ($errors->all() as $error)
            <i class="fas fa-exclamation-triangle red" style="color:red;"></i>{{ $error }}<br>
            @endforeach
      
      </div><br />
    @endif
      <form method="post" action="{{ route('articles.store') }}">
      @csrf
              <label for="post_title">Post title :</label>
              <input type="text" name="post_title"/>

              <label for="post_content">Post content :</label>
              <input type="text" name="post_content"/>

            <label for="post_content">Post type :</label>
            <select name="post_type">
              <option value selected>Choose a post type</option>
              <option value="Tutorial">Tutorial</option>
              <option value="News">News</option>
              <option value="Report">Report</option>
            </select>

            <label for="post_content">Post category :</label>
            <select name="post_category">
              <option value selected>Choose a post category</option>
              <option value="Food">Food</option>
              <option value="Gaming">Gaming</option>
              <option value="Sport">Sport</option>
              <option value="Reading">Reading</option>
            </select>

          <button type="submit" class="button">Add Article</button>
      </form>
  </div>
</div>
</div>
@endsection