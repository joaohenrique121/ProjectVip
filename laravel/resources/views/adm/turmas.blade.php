@extends('home')
@section('home-content')
        <div class="flex justify-center gap-5 mb-5">
            <button id="resgistrar-turma" data-target="turmas-dialog" class="bg-blue-500 hover:bg-blue-600 p-2 rounded text-white open-dialog"> <i class="fa-solid fa-address-book"></i> Cadastar Nova Turma</button>
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
                <button class="bg-red-400 text-white">delete</button>
            </x-slot:slot>
            <x-slot:footer>
                <x-modal.modal-footer>
                    <x-button-confirm id="cadastrar-turma"/>
                    <x-button-cancel/>
                </x-modal.modal-footer>
            </x-slot:footer>
            </x-modal.modal-root>

              <div class="flex justify-center flex-wrap">
                  <div class="flex flex-col justify-between gap-2 w-full max-w-96 h-56 bg-white rounded shadow-md transition-transform duration-150 hover:scale-[102%] cursor-pointer ">
                      <header class="p-4 w-full flex flex-col items-center justify-center">
                          <button class="w-full flex justify-end open-dialog" data-target="menu-turma"><i class="fa-solid fa-ellipsis-vertical delete-turma cursor-pointer" ></i></button>
                          <div>
                              <img class="w-20" src="{{asset('images/LOGOVIP.png')}}" alt="logo">
                              <p class="text-sm text-center my-5">Turma 1</p>
                          </div>
                      </header>
                      <footer class="border-t flex justify-between">
                          <div class="p-2">
                              <p class="p-2 text-sm">xd</p>
                          </div>
                          <div class=" p-2">
                              <button data-target="alunos-dialog" class="open-dialog"><i class="fa-solid fa-user-plus p-2"></i></button>
                              <button data-target="atividades-dialog" class="open-dialog"><i class="fa-regular fa-clipboard p-2"></i></button>
                          </div>
                      </footer>
                      

                  </div>
{{--                                @foreach($dataTurma as $results)--}}
{{--                                    <div>--}}
{{--                                        <td>{{$results->name}}</td>--}}
{{--                                        <td class="flex justify-center gap-2">--}}
{{--                                            <button class="registrar-aluno bg-green-400 p-1 text-white rounded hover:bg-green-500"> <i class="fa-solid fa-plus mr-2"></i>Adicionar Alunos</button>--}}
{{--                                            <button class="excluir-turma bg-red-500 p-1 text-white rounded hover:bg-red-600"> <i class="fa-solid fa-minus mr-2"></i>Excluir Turma</button>--}}
{{--                                        </td>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
                      </div>
@endsection