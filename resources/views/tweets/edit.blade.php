@extends('layout')

@section('content')
  <div class="contents row">
    <div class="container">
      {{ Form::model($tweet, ['url' => "/tweets/$tweet->id", 'method' => 'patch']) }}
        <h3>編集する</h3>
        {{ Form::text('image') }}
        {{ Form::textarea('text') }}
        {{ Form::submit('Submit') }}
        <input type="submit" value="SEND">
      {{ Form::close() }}
    </div>
  </div>
@endsection
