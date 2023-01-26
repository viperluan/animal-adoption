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

        <main class="institution-dashboard-main">
            <aside class="institution-dashboard-aside">
                <ul>
                    <li>
                        <a href="/institution/dashboard/info">Dados da instituição</a>
                    </li>
                    <li>
                        <a href="/institution/dashboard/address">Endereço</a>
                    </li>
                    <li>
                        <a href="/institution/dashboard/adoptions">Adoções</a>
                    </li>
                    <li>
                        <a href="/institution/dashboard/animals">Animais cadastrados</a>
                    </li>
                </ul>
            </aside>

            @auth
                <p>Seja bem vindo, {{ auth()->user()->name }}!</p>
            @endauth
        </main>
    </div>

@endsection
