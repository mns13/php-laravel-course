@extends("layout.app")
@section('title', 'Create Post')
@section('content')
    <form action="/posts" method="post">
        @csrf
        <input type="text" name="title">
        <button type="submit" name="submit">submit</button>
    </form>
@section('footer')
