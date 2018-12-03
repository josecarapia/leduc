@extends('layouts.app')

@section('content')
<a href='/posts' class='btn btn-default'>Back</a>
  <h1>{{$post->date}}</h1>
  <h1>Name: {{$post->user->name}}</h1>
  <h1>Location: {{$post->location}}</h1>
  <h1>Sub-location: {{$post->sublocation}}</h1>
  <h1>Category: {{$post->category}}</h1>
  <h1>Sub-Category: {{$post->subcategory}}</h1>
  <?php 
    if (strlen((string)$post->timein_hour)<2){
      $timein_hour = '0'.$post->timein_hour;
    }
    else{
      $timein_hour = $post->timein_hour;
    }
    if (strlen((string)$post->timein_min)<2){
      $timein_min = '0'.$post->timein_min;
    }
    else{
      $timein_hour = $post->timein_hour;
    }
    if (strlen((string)$post->timeout_hour)<2){
      $timeout_hour = '0'.$post->timeout_hour;
    }
    else{
      $timeout_hour = $post->timeout_hour;
    }
    if (strlen((string)$post->timeout_min)<2){
      $timeout_min = '0'.$post->timeout_min;
    }
    else{
      $timeout_min = $post->timeout_min;
    }
  ?>
    <h1>Time In: {{$timein_hour}}:{{$timein_min}}</h1>
    <h1>Time Out: {{$timeout_hour}}:{{$timeout_min}}</h1>
  
  
  <h1>Notes: {!!$post->body!!}</h1>
  <br><br>
<div>
  {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
@if(!Auth::guest())
  @if(Auth::user()->id == $post->user_id)
  <div class='row'>
    <div class='col-md-1'>
    <a href='/posts/{{$post->id}}/edit' class='btn btn-default'>Edit</a>
    </div>
    <div class='col-md-6'>
    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'']) !!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close() !!}
  </div>
  @endif
@endif
@endsection