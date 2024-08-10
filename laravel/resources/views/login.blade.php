@extends('main')

@section('content')
    <main class="container d-flex justify-content-center align-items-center">
        <div class="login-container">
                <form id="loginform" class="login-form">
                    <div>
                        <a><img src="{{ asset('images/LOGOVIP.png') }}" alt="LOGO" width="114"></a>
                    </div>
                    <x-form-input for="email" label="Email" name="email" type="text" placeholder="email@email.com" />
                    <x-form-input for="password" label="Senha" name="senha" type="password" placeholder="••••••••" />
                    <div class="d-flex flex-column align-items-center justify-content-center p-5 gap-3">
                            <p>Ainda não tem conta? <a href="{{route('register')}}" class="text-primary fw-semibold">
                                     Clique aqui
                                </a></p>
                        <button type="submit" class="btn btn-primary">
                            Enviar
                        </button>
                    </div>
                </form>
        </div>
    </main>
@endsection
@section('scripts')
    <script src="{{ asset('js/login.js') }}" defer></script>
@endsection
