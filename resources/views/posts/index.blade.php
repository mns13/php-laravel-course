@extends("layout.app")
@section('title', 'Create Post')
@section('content')
    <h1>Hello World</h1>
    <ul>
        @foreach($posts as $post)
            <li><a href="{{route('posts.show', $post->id)}}"> {{$post->title}} </a></li>
        @endforeach
    </ul>
@section('footer')
