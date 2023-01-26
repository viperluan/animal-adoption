@extends('index')

@section('title', 'Instituição - Dashboard')

@section('content')
    <div class="institution-dashboard-page">
        <header class="institution-dashboard-header">
            <a href="/">
                <button class="institution-dashboard-button">Voltar</button>
            </a>

            <form action="/institution/logout" method="POST">
                @csrf

                <button class="institution-dashboard-button" type="submit">Logout</button>
            </form>
        </header>

        @auth
            <p>Seja bem vindo, {{ auth()->user()->name }}!</p>
        @endauth


    </div>

@endsection
