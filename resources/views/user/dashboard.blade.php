@extends('index')

@section('title', 'Animal Adoption - Dashboard')

@section('content')
    <div class="user-dashboard-page">
        <header class="user-dashboard-header">
            <a href="/">
                <button class="user-dashboard-button">Voltar</button>
            </a>

            <form action="/user/logout" method="POST">
                @csrf

                <button class="user-dashboard-button" type="submit">Logout</button>
            </form>
        </header>

        @auth
            <p>Seja bem vindo, {{ auth()->user()->name }}!</p>
        @endauth
    </div>

@endsection
