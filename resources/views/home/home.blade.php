@extends('index')

@section('title', 'Animal Adoption - Home')

@section('content')

    <div class="home-page">
        <h1>Home Page</h1>

        <a href="/user/login">
            <button>Área do usuário</button>
        </a>

        <a href="/institution/login">
            <button>Área da instituição</button>
        </a>
    </div>

@endsection
