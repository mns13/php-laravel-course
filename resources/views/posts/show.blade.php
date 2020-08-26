@extends("layout.app")
@section('title', 'Create Post')
@section('content')
    <h1><a href="{{route('posts.edit', $post->id)}}">{{ $post->title }}</a></h1>


@section('footer')
