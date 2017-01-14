@extends('layout')

@section('content')
    <h1>{{ $book->title }}</h1>
    <pre>
        {{ $book }}
    </pre>
@stop