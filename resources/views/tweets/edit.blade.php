@extends('layout')

@section('content')
  <div class="contents row">
    <div class="container">
      {{ Form::open(['url' => "/tweets/$tweet->id", 'method' => 'patch']) }}
        <h3>編集する</h3>
        <input placeholder="Image Url" type="text" name="image" value="{{$tweet->image}}">
        <textarea placeholder="text" name="text" cols="30" rows="10">{{$tweet->text}}</textarea>
        <input type="submit" value="SEND">
      {{ Form::close() }}
    </div>
  </div>
@endsection
