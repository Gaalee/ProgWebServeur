@extends('layouts/main')
@section('content')
<form action="{{url('contact/confirm')}}" method="post">
<label for="title">Contact Title</label>
<input id="title" type="text" class="@error('title') is-invalid @enderror">
<input type="submit">
</form> 
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<!-- https://laravel.com/docs/5.8/validation 
https://appdividend.com/2019/03/09/laravel-5-8-form-validation-tutorial-with-example/-->


@endsection

