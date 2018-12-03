@extends('layouts.app')

@section('content')
  <h1>Edit Post</h1>
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST','class'=>'form', 'enctype'=>'multipart/form-data']) !!}
    <div class='form-group'>
      {{Form::label('title' , "Title")}}
      {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class='form-group'>
      {{Form::label('date' , "Date")}}
      {{ Form::date('date', $post->date,['class' => 'form-control']) }}
    </div>
    <div class='form-group'>
      <label for="location">Location</label>
      <select class='form-control' id="location" name="location" onchange="populate_sublocation(this.id,'sublocation')">
        <option>{{$post->location}}</option>
        <option>Packing</option>
        <option>Retail</option>
        <option>Maintenance Shop</option>
        <option>Home Farm </option>
        <option>Farm 2 (38th) - West </option>
        <option>Farm 3</option>
        <option>36 1/2 St.</option>
        <option>Wolf Lake Farm</option>
        <option>38 Ave South</option>
        <option>Farm 2 (30th) Retail-East</option>
        <option>Bakers</option>
        <option>Elliot-Spartans</option>
        <option>M-40 Farm</option>
        <option>Dixie Lee</option>
        <option>Farm 3 North Franks</option>
        <option>M-43 Farm U-Pick</option>
        <option>42nd Ave. Farm</option>
        <option>Campbell Creek</option>
        <option>Sandy Slopes Farm</option>
        <option></option>
      </select>
    </div>
    <div class='form-group'>
        <label for="sublocation">Sub-Location</label>
      <select id="sublocation" name="sublocation" class="form-control">
        <option>{{$post->sublocation}}</option>
      </select>
    </div>
    <div class='form-group'>
        <label for="category">Category</label>
      <select id="category" name="category" class="form-control" onchange="populate_subwork(this.id, 'subcategory')">
        <option>{{$post->category}}</option>
        <option>Farm Work</option>
        <option>Housing</option>
        <option>Harvesting</option>
        <option>Driving</option>
      </select>
    </div>
    <div class='form-group'>
        <label for="subcategory">Sub-Category</label>
      <select id="subcategory" name="subcategory" class="form-control">
        <option>{{$post->subcategory}}</option>
      </select>
    </div>
    <div class='form-group'>
      {{Form::label('timein' , "Time In")}}
      {{Form::selectRange('timein_hour',1,12,$post->timein_hour, ['class' => 'form-control'])}}
      {{Form::selectRange('timein_min',00,59,$post->timein_min, ['class' => 'form-control'])}}
    </div>
    <div class='form-group'>
      {{Form::label('timeout' , "Time Out")}}
      {{Form::selectRange('timeout_hour',1,12,$post->timeout_hour, ['class' => 'form-control'])}}
      {{Form::selectRange('timeout_min',00,59,$post->timeout_min, ['class' => 'form-control'])}}
    </div>  
    <div class='form-group'>
      {{Form::label('body' , "Body")}}
      {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Body Text'])}}
    </div>
    <div class='form-group'>
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
  
@endsection