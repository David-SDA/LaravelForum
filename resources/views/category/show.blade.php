@extends('layouts.default')

@section('title', $category->name)

@section('content')
    <h1>{{ $category->name }}</h1>
@endsection