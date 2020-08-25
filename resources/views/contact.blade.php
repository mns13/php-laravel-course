@extends("layout.app")
@section('title', 'Contact')
@section('content')

    <h1>Contact Page</h1>
    <ul>
    @if(count($coworkers))
        @foreach($coworkers as $coworker)
            <li>{{$coworker}}</li>
        @endforeach
    @endif
    </ul>
@stop
