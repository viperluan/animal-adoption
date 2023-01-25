@extends('index')

@section('title', 'Instituição - Dashboard')

@section('content')
    <div class="institution-dashboard-page">
        <a href="/">
            <button>Voltar</button>
        </a>

        @auth
            <p>Seja bem vindo, {{ auth()->user()->name }}!</p>
        @endauth

        <form action="/institution/logout" method="POST">
            @csrf

            <button type="submit">Logout</button>
        </form>
    </div>

@endsection
