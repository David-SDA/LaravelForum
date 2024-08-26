@extends('layouts.default')

@section('title') Login @endsection

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

    <form action="/login" method="post">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="current-password" required>
        </div>
        <div>
            <button>Login</button>
        </div>
    </form>
@endsection