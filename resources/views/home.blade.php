@extends('layouts.default')

@section('title', 'Laravel Forum')

@section('content')
    <h1>Laravel Forum Home Page</h1>
    
    @if(Auth::user())
        <p>Welcome {{ Auth::user()->name }}</p>
        <form action="{{ url('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endif
@endsection