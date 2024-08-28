@extends('layouts.default')

@section('title', 'Categories')

@section('content')
    <h1>Categories</h1>

    @foreach ($categories as $category)
        <h2><a href="{{ route('category.show', ['id' => $category->id]) }}">{{ $category->name }}</a></h2>
    @endforeach
@endsection