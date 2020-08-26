@extends("layout.app")
@section('title', 'Create Post')
@section('content')
    <h1>Create a Post</h1>

    {!! Form::open(['url'=>'/posts']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Posts Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@section('footer')
