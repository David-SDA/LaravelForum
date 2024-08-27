@extends('layouts.default')

@section('title', 'Topics')

@section('content')
    <br>
    <h1>Topics</h1>
    <br>
    @foreach ($topics as $topic)
        <article>
            <h2>{{ $topic->title }}</h2>
            <p>{{ $topic->content }}</p>
            <p>
                <a href="{{ route('topic.show', ['slug' => $topic->slug, 'id' => $topic->id]) }}">Lire la suite</a>
            </p>
        </article>
    @endforeach
    <br>
    {{ $topics->links() }}
    <br>
@endsection