@extends('layouts.default')

@section('title', $topic->title)

@section('content')
    <br>
    <article>
        <h1>{{ $topic->title }}</h1>
        <p>{{ $topic->content }}</p>
    </article>
    <br>
@endsection