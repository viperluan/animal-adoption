@extends('index')

@section('title', 'Cadastro de Usuário')

@section('content')
    <div class="user-register-page">
        <h1>Cadastro de usuário</h1>
        <form class="form-container user" action="/user/register" method="POST">
            @csrf
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <span class="input-error-message">{{ $message }}</span>
            @enderror

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <span class="input-error-message">{{ $message }}</span>
            @enderror

            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
            @error('password')
                <span class="input-error-message">{{ $message }}</span>
            @enderror

            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}">
            @error('cpf')
                <span class="input-error-message">{{ $message }}</span>
            @enderror

            <label for="birthday">Data de nascimento</label>
            <input type="date" name="birthday" id="birthday" value="{{ old('birthday') }}">
            @error('birthday')
                <span class="input-error-message">{{ $message }}</span>
            @enderror

            <button type="submit">Cadastrar</button>
        </form>

        <div class="links-container">
            <p>
                Você já está cadastrado como usuário?
                <a href="/user/login">Fazer login</a>
            </p>

            <p>
                Deseja cadastrar como instituição?
                <a href="/institution/register">Cadastrar instituição</a>
            </p>
        </div>
    </div>
@endsection
