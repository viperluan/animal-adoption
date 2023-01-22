@extends('index')

@section('title', 'Animal Adoption - Dashboard')

@section('content')
    <div class="user-dashboard-page">
        @auth
            <p>Seja bem vindo, {{ auth()->user()->name }}!</p>
        @endauth

        <form action="/user/logout" method="POST">
            @csrf

            <button type="submit">Logout</button>
        </form>
    </div>

@endsection
