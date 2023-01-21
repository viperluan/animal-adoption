@extends('index')

@section('title', 'Dashboard')

@section('content')

    <div class="verify-email-container">
        <h1>Verifique seu email</h1>
        <form action="/email/verification-notification" method="POST">
            @csrf

            <div class="resend-email">
                <p>{{ session('message') }}</p>
                <button type="submit">Reenviar email.</button>
            </div>
        </form>
    </div>

@endsection
