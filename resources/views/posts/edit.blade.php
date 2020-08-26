@extends("layout.app")
@section('title', 'Create Post')
@section('content')
    <h1>Edit Post</h1>
        <form action="/posts/{{$post->id}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="text" name="title" value="{{$post->title}}">
            <button type="submit" name="submit">submit</button>
        </form>
        <form action="/posts/{{$post->id}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit">delete</button>
        </form>

@section('footer')

