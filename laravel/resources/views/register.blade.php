@extends("main")

@section("content")

<main class="container d-flex justify-content-center align-items-center">
        <div class="register-container">
            <form class="register-form" method="post">
                <div class="d-flex justify-content-center p-3">
                    <a><img src="{{ asset('images/LOGOVIP.png') }}" alt="LOGO" width="114"></a>
                </div>

                <x-form-input for="email" label="Email" name="email" type="text" placeholder="Email" />

                <x-form-input for="nome" label="Nome" name="nome" type="text" placeholder="Digite seu Nome" />

                <x-form-input for="senha" label="Senha" name="senha" type="password" placeholder="Senha" />

                <x-form-input for="contato" label="Contato" name="contato" type="tel" placeholder="numero" />

                <x-form-input for="rua" label="Rua" name="endereco" type="text" placeholder="Rua do Aluno(a)" />
                <div class="d-flex flex-column align-items-center justify-content-center gap-3 p-3">
                    <p>Já tem conta? <a href="{{ route('login') }}" class="text-primary fw-semibold">Clique aqui</a></p>
                    <button type="submit" id="register" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </main>
@endsection
@section('scripts')
    <script src="{{asset('js/register.js')}}"></script>
@endsection