@extends("layout.app")
@section('title', 'Create Post')
@section('content')
    <h1>Edit Post</h1>
{{--        <form action="/posts/{{$post->id}}" method="post">--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="_method" value="PUT">--}}
{{--            <input type="text" name="title" value="{{$post->title}}">--}}
{{--            <button type="submit" name="submit">submit</button>--}}
{{--        </form>--}}
    {!! Form::open(['url'=>['posts', $post->id], 'method'=>'put', 'class'=>'form-control']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Posts Title:',['class'=>'form-control']) !!}
            {!! Form::text('title', $post->title) !!}
        </div>
        {!! Form::submit('Update') !!}
    {!! Form::close() !!}

{{--        <form action="/posts/{{$post->id}}" method="post">--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="_method" value="DELETE">--}}
{{--            <button type="submit">delete</button>--}}
{{--        </form>--}}
    {!! Form::open(['url'=>['/posts', $post->id], 'method'=>'delete']) !!}
    {!! Form::submit('Delete') !!}
    {!! Form::close() !!}
@section('footer')

