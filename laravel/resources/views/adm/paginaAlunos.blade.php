@extends('home')
@section('home-content')

    <div class="w-full flex flex-col items-center gap-10 p-5">

        <button class="bg-blue-500 hover:bg-blue-600 p-2 text-white rounded"> <i class="fa-solid fa-user-plus pr-2"></i> Cadastrar Aluno</button>

        <table class="border border-gray-300 shadow-lg bg-white w-1/2">
            <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border border-gray-300">Email</th>
                <th class="px-4 py-2 border border-gray-300">Nome</th>
                <th class="px-4 py-2 border border-gray-300">Contato</th>
                <th class="px-4 py-2 border border-gray-300"></th>
                <th class="px-4 py-2 border border-gray-300"></th>
            </tr>
            </thead>
            <x-modal.modal-root id="dialog-alerta">
                <x-slot:slot>
                    <div class="flex flex-col justify-center h-48 items-center gap-16 text-center">
                        <i class="fa-solid fa-exclamation-triangle text-4xl bg-red-700 p-4 text-white rounded-full text"></i>
                        <p>Tem certeza de que deseja excluir essa turma?</p>
                    </div>
                </x-slot:slot>
                <x-slot:footer>
                    <x-modal.modal-footer>
                        <x-button-confirm id="deletealuno"/>
                        <x-button-cancel/>
                    </x-modal.modal-footer>
                </x-slot:footer>
            </x-modal.modal-root>
            <tbody>
            <x-modal.modal-root id="dialog-update">
                <x-slot:slot>
                    <x-modal.modal-input type="email" name="email" label="Email:" placeholder="email"/>
                    <x-modal.modal-input type="text" name="namealuno" label="Nome:" placeholder="nome"/>
                    <x-modal.modal-input type="text" name="contato" label="Contato:" placeholder="contato"/>
                </x-slot:slot>
                <x-slot:footer>
                    <x-modal.modal-footer>
                        <x-button-confirm id="save"/>
                        <x-button-cancel/>
                    </x-modal.modal-footer>
                </x-slot:footer>
            </x-modal.modal-root>
            @forelse($alunos as $aluno)
                <tr>
                    <td class="text-center px-4 py-2 border border-gray-300 info">{{$aluno->email}}</td>
                    <td class="text-center px-4 py-2 border border-gray-300 info">{{$aluno->name}}</td>
                    <td class="text-center px-4 py-2 border border-gray-300 info">{{$aluno->contato}}</td>
                    <td class="px-4 py-2 border border-gray-300">
                        <button class="btn btn-success px-2 py-1 text-white hover:bg-green-600 bg-green-500 rounded buttonedit"
                                data-target="dialog-update">Editar
                        </button>
                    </td>
                    <td class="px-4 py-2 border border-gray-300">
                        <button data-target="dialog-alerta" class="btn btn-danger px-2 py-1 text-white hover:bg-red-600 bg-red-500 rounded open-alert" id="{{$aluno->id}}">Deletar
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center px-4 py-2">Não há alunos no sistema</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
