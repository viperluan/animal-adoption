@extends('index')

@section('title', 'Animal Adoption - User Login')

@section('content')
    <div class="user-login-page">
        <h1>Área do usuário</h1>
        <h3>Faça seu login</h3>
        <form action="/user/login" method="POST">
            @csrf

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

            @error('credentials')
                <span class="input-error-message">{{ $message }}</span>
            @enderror


            <button type="submit">Entrar</button>
        </form>

        <div class="links-container">
            <p>Não tem cadastro ainda?</p>
            <p><a href="/user/register">Criar uma conta de usuário</a></p>
            <p><a href="/institution/register">Criar uma conta de instituição</a></p>
        </div>
    </div>

@endsection
