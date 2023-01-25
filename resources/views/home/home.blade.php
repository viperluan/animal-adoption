@extends('index')

@section('title', 'Animal Adoption - Home')

@section('content')

    <div class="home-page">
        <x-home.header class="home-header" hrefHomeButton="/" containerAccount="teste" />
        <h1>Página inicial</h1>

        @guest('web')
            @guest('institution')
                <a href="/user/login">
                    <button>Área do usuário</button>
                </a>

                <a href="/institution/login">
                    <button>Área da instituição</button>
                </a>
            @endguest
        @endguest


    </div>

@endsection
