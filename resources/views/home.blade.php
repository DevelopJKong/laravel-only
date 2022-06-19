@extends('layouts.app')

@section('content')
    <h1>Laravel Hash Project</h1>
    @if(isset($user))
        hello! {{ $user->name }}
        <a href="/logout">Logout</a>
    @else
        <a href="/signup">Signup</a>
        <a href="/login">Login</a>
    @endif
@endsection

