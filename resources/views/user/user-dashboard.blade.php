@extends('index')

@section('title', 'Animal Adoption - Dashboard')

@section('content')
    <div class="user-dashboard-page">
        <a href="/">
            <button>Voltar</button>
        </a>

        @auth
            <p>Seja bem vindo, {{ auth()->user()->name }}!</p>
        @endauth

        <form action="/user/logout" method="POST">
            @csrf

            <button type="submit">Logout</button>
        </form>
    </div>

@endsection
