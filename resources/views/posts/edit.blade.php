@extends("layout.app")
@section('title', 'Create Post')
@section('content')
    <h1>Edit Post</h1>
{{--edit post--}}
    {!! Form::open(['url'=>['posts', $post->id], 'method'=>'put', 'class'=>'form-control']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Posts Title:',['class'=>'form-control']) !!}
            {!! Form::text('title', $post->title) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
{{--delete post--}}
    {!! Form::open(['url'=>['/posts', $post->id], 'method'=>'delete']) !!}
    {!! Form::submit('Delete') !!}
    {!! Form::close() !!}
@section('footer')

