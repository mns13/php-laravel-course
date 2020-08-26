@extends("layout.app")
@section('title', 'Create Post')
@section('content')
    <h1>Create a Post</h1>
{{--    <form action="/posts" method="post">--}}

    {!! Form::open(['url'=>'/posts']) !!}
        {!! Form::label('title', 'Posts Title:') !!}
        {!! Form::text('title') !!}
        {!! Form::submit('Create') !!}
    {!! Form::close() !!}

{{--    </form>--}}
@section('footer')
