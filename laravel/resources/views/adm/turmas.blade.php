@extends('home')
@section('home-content')

<x-dropdown id="droptools">
    <x-slot:slot>
        <ul class="p-40">
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </x-slot:slot>
</x-dropdown>
    <div class="flex justify-center gap-5 mb-5">
        <button id="resgistrar-turma" data-target="turmas-dialog"
                class="bg-blue-500 hover:bg-blue-600 p-2 rounded text-white open-dialog"><i
                    class="fa-solid fa-address-book"></i> Cadastar Nova Turma
        </button>
    </div>
    <x-modal.modal-root id="alunos-dialog">
        <x-slot:header>
            <x-modal.modal-header>
            </x-modal.modal-header>
        </x-slot:header>
        <x-slot:slot>
            <p>Cadastrar alunos na turma</p>
        </x-slot:slot>
        <x-slot:footer>
            <x-modal.modal-footer>
                <x-button-confirm id="adicionar-aluno"/>
                <x-button-cancel/>
            </x-modal.modal-footer>
        </x-slot:footer>
    </x-modal.modal-root>

    <x-modal.modal-root id="turmas-dialog">
        <x-slot:slot>
            <p class="text-center p-2 font-semibold">Cadastrar nova turma</p>
            <x-modal.modal-input label="Nome" type="text" placeholder="" name="nome"/>
        </x-slot:slot>
        <x-slot:footer>
            <x-modal.modal-footer>
                <x-button-confirm id="cadastrar-turma"/>
                <x-button-cancel/>
            </x-modal.modal-footer>
        </x-slot:footer>
    </x-modal.modal-root>
    <x-modal.modal-root id="atividades-dialog">
        <x-slot:slot>
            <p class="text-center p-2 font-semibold">Postar Atividade</p>
            <x-modal.modal-input label="Nome" type="text" placeholder="" name="nome"/>
        </x-slot:slot>
        <x-slot:footer>
            <x-modal.modal-footer>
                <x-button-confirm id="salvar-atividade"/>
                <x-button-cancel/>
            </x-modal.modal-footer>
        </x-slot:footer>
    </x-modal.modal-root>

    <x-modal.modal-root id="menu-turma">
        <x-slot:slot>
            <div class="flex flex-col justify-center h-48 items-center gap-16 text-center">
                <i class="fa-solid fa-exclamation-triangle text-4xl bg-red-700 p-4 text-white rounded-full text"></i>
                <p>Tem certeza de que deseja excluir essa turma?</p>
            </div>
        </x-slot:slot>
        <x-slot:footer>
            <x-modal.modal-footer>
                <x-button-confirm id="cadastrar-turma"/>
                <x-button-cancel/>
            </x-modal.modal-footer>
        </x-slot:footer>
    </x-modal.modal-root>

    {{-- botao para o dropdowntest --}}

    <button id="drop-tools" class="p-2 bg-red-400 text-white ">BotaoDroptest</button>

    <div class="flex flex-wrap gap-5">
        @forelse($dataTurma as $results)
            <div class="flex flex-col justify-between gap-2 w-full max-w-96 min-h-56 bg-white rounded shadow-md">
                <header class="p-4 w-full flex flex-col items-center justify-center">
                    <div>
                        <img class="w-20" src="{{asset('images/LOGOVIP.png')}}" alt="logo">
                        <p class="text-sm text-center my-5">{{$results->name}}</p>
                    </div>
                </header>
                <footer class="border-t flex justify-between">
                    <div class="p-2"><p class="p-2">06/2024</p></div>
                    <div class="p-2">
                        <button data-target="alunos-dialog" class="open-dialog hover:bg-zinc-200 rounded-full"><i
                                    class="fa-solid fa-user-plus p-2"></i></button>
                        <button data-target="atividades-dialog" class="open-dialog hover:bg-zinc-200 rounded-full"><i
                                    class="fa-regular fa-clipboard p-2"></i></button>
                        <button data-target="menu-turma" class="open-dialog hover:bg-zinc-200 rounded-full"><i
                                    class="fa-solid fa-trash p-2"></i></button>
                    </div>
                </footer>
            </div>

            
        @empty
            <p>Ainda não há turmas cadastradas no sistema</p>
        @endforelse
    </div>
@endsection