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
            <tbody>
            @forelse($alunos as $aluno)
                <tr>
                    <td class="text-center px-4 py-2 border border-gray-300">{{$aluno->email}}</td>
                    <td class="text-center px-4 py-2 border border-gray-300">{{$aluno->name}}</td>
                    <td class="text-center px-4 py-2 border border-gray-300">{{$aluno->contato}}</td>
                    <td class="px-4 py-2 border border-gray-300">
                        <button class="btn btn-success px-2 py-1 text-white hover:bg-green-600 bg-green-500 rounded" id="{{$aluno->id}}"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">Editar
                        </button>
                    </td>
                    <td class="px-4 py-2 border border-gray-300">
                        <button class="btn btn-danger px-2 py-1 text-white hover:bg-red-600 bg-red-500 rounded" id="{{$aluno->id}}">Deletar
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