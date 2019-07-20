@extends('layout')
@section('title')
Homepage
@endsection

@section('content')
<div>
    <h1>Hello there, this is my site</h1>
    <ul>
    @foreach ($tasks as $task)
        <li>{{$task}}</li>
    @endforeach
    </ul>
</div>
@endsection


