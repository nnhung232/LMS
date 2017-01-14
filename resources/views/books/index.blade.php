@extends('layout')

@section('content')
    <h1>All books</h1>
    @foreach ($books as $book)
        <div>
            {{ $book->title }}
        </div>
    @endforeach
@stop