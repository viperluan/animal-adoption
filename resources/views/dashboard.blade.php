@extends('index')

@section('title', 'Dashboard')

@section('content')

    <div class="dashboard">
        <h1>Dashboard</h1>

        @auth
            <p>Seja bem vindo, {{ explode(' ', auth()->user()->name)[0] }}!</p>
        @endauth
    </div>

@endsection
