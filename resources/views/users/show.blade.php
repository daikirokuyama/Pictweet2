@extends('layout')

@section('content')
  <div class="contents row">
    <p>{{ $name }}さんの投稿一覧</p>
    @foreach($tweets as $tweet)
      <div class="content_post" style="background-image: url({{ $tweet->image }});">
        <p>{{ $tweet->text }}</p>
        <span class="name">
          <a href="/users/{{$tweet->user_id}}"><span>投稿者</span>{{ $name }}</a>
        </span>
      </div>
    @endforeach
  </div>
@endsection
