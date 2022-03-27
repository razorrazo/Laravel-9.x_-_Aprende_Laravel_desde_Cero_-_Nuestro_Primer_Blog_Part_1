@extends('layouts.master')
@section('content')

@foreach($posts as $post)
<div class="card" >
  <div class="card-body">
    <h5 class="card-title">{{ $post['title'] }}</h5>
    <p class="card-text">{{ $post['content'] }}.</p>
    <a href="{{ route('blog.post', ['id'=> array_search($post, $posts)]) }}" class="btn btn-primary">Ver mas</a>
  </div>
</div>
@endforeach

@endsection