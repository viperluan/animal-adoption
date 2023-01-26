@extends('index')

@section('title', 'Instituição - Animais')

@section('content')
    <div class="institution-dashboard-page">
        <header class="institution-dashboard-header">
            <a href="/institution/dashboard">
                <button class="institution-dashboard-button">Voltar</button>
            </a>
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
                <p>Animais da institutição</p>
            @endauth
        </main>
    </div>

@endsection
