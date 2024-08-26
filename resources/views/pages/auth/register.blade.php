@extends('layouts.default')

@section('title') Register @endsection

@section('content')
    <h2>Register</h2>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/register" method="post">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" autofocus required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}" required>
        </div>
        <div>
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" required>
        </div>
        <div>
            <button>Register</button>
        </div>
    </form>

@endsection