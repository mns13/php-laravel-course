@extends("layout.app")
@section('title', 'Create Post')
@section('content')
    <h1>Hello World <small><a href="posts/create">Create Post</a></small></h1>
    <ul>
        @foreach($posts as $post)
            <div class="image-container">
                <img height="100" src="{{$post->path}}" alt="">
            </div>
            <li><a href="{{route('posts.show', $post->id)}}"> {{$post->title}} </a></li>
        @endforeach
    </ul>
@section('footer')
