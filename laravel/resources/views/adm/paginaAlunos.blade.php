@extends('home')
@section('home-content')

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table text-center">
                    <thead>
                    <th class="font-weight-bold">Email:</th>
                    <th class="font-weight-bold">Nome:</th>
                    <th class="font-weight-bold">Contato:</th>
                    <th class="font-weight-bold">Editar</th>
                    <th class="font-weight-bold">Deletar:</th>
                    </thead>

                    @foreach($alunos as $aluno)
                        <tr>
                            <td class="text-center">{{$aluno->email}}</td>
                            <td class="text-center">{{$aluno->name}}</td>
                            <td class="text-center">{{$aluno->contato}}</td>
                            <td>
                                <button class="btn btn-success editbutton" id="{{$aluno->id}}"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">Editar
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger deletebutton" id="{{$aluno->id}}">Deletar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" id="formnote">
                            <div class="form-group d-flex flex-column justify-content-center">
                                <label for="">Nome:</label>
                                <input type="text" id="name" class="form-control">
                            </div>

                            <div class="form-group d-flex flex-column justify-content-center">
                                <label for="">Email</label>
                                <input type="text" id="email" class="form-control">
                            </div>

                            <div class="form-group d-flex flex-column justify-content-center">
                                <label for="">Contato:</label>
                                <input type="tell" id="contato" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" id="" class="btn btn-primary save">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
@endsection