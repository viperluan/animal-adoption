@extends('index')

@section('title', 'Verificação de email')

@section('content')

    <div class="verify-email-container">
        <h1>Verifique sua caixa de mensagens, enviamos um link para confirmar seu cadastro.</h1>
        <form action="/email/verification-notification" method="POST">
            @csrf

            <div class="resend-email">
                <p>{{ session('message') }}</p>
                <button type="submit">Reenviar email.</button>
            </div>
        </form>
    </div>

@endsection
