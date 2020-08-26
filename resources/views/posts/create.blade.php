@extends("layout.app")
@section('title', 'Create Post')
@section('content')
    <h1>Create a Post</h1>
{{--    <form action="/posts" method="post">--}}

    {!! Form::open(['url'=>'/posts']) !!}
        @csrf
        <input type="text" name="title">
        <button type="submit" name="submit">submit</button>
    {!! Form::close() !!}

{{--    </form>--}}
@section('footer')
