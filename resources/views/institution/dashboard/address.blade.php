@extends('index')

@section('title', 'Instituição - Endereço')

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

            @isset($address)
                <p>Endereço: {{ $address['street'] }}</p>
                <p>Bairro: {{ $address['district'] }}</p>
                <p>Número: {{ $address['number'] }}</p>
                <p>CEP: {{ $address['zip_code'] }}</p>
                <p>Complemento: {{ $address['complement'] }}</p>
                <p>Cidade: {{ $address['city'] }}</p>
                <p>Estado: {{ $address['state']['name'] }}</p>
                <p>País: {{ $address['country']['name'] }}</p>
            @endisset
        </main>
    </div>

@endsection
