@extends('index')

@section('title', 'Cadastro de Instituição')

@section('content')
    <div class="institution-register-page">

        <h1>Cadastro de instituição</h1>
        <form class="form-container user" action="/institution/register" method="POST">
            @csrf
            <label for="name">Nome</label>
            <input type="name" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <span class="input-error-message">{{ $message }}</span>
            @enderror

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <span class="input-error-message">{{ $message }}</span>
            @enderror

            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            @error('password')
                <span class="input-error-message">{{ $message }}</span>
            @enderror

            <label for="cnpj">CNPJ</label>
            <input type="cnpj" name="cnpj" id="cnpj" value="{{ old('cnpj') }}">
            @error('cnpj')
                <span class="input-error-message">{{ $message }}</span>
            @enderror

            <button type="submit">Cadastrar</button>
        </form>

        <div class="links-container">
            <p>
                Você já está cadastrado como instituição?
                <a href="/institution/login">Fazer login</a>
            </p>

            <p>
                Deseja cadastrar como usuário?
                <a href="/user/register">Cadastrar usuário</a>
            </p>
        </div>
    </div>
@endsection
