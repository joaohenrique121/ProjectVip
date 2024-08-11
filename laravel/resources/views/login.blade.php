@extends('main')

@section('content')
    <main class="flex justify-center items-center w-full">
        <div class="login-container">
                <form id="loginform" class="login-form flex flex-col gap-5">
                    <div>
                        <a><img src="{{ asset('images/LOGOVIP.png') }}" alt="LOGO" width="114"></a>
                    </div>
                    <x-form-input for="email" label="Email" name="email" type="text" placeholder="email@email.com" />
                    <x-form-input for="password" label="Senha" name="senha" type="password" placeholder="••••••••" />
                    <div class="flex flex-col items-center justify-center p-5 gap-3">
                            <p>Ainda não tem conta? <a href="{{route('register')}}" class="text-red-600 font-semibold">
                                     Clique aqui
                                </a></p>
                        <button type="submit" class="bg-red-600 p-2 rounded text-white hover:bg-red-700">
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
