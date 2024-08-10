@extends('home')
@section('home-content')

        <div class="text-right pr-5">
          
                <button id="registeraluno" type="button" class="btn btn btn-outline-primary m-3" data-toggle="modal" data-target="#modalselect">
                  <i class="bi bi-plus-square fa-xl p-2"></i> Cadastar Aluno na Turma
                </button>
            <button type="button" class="btn btn btn-outline-primary m-3" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="bi bi-plus-square fa-xl p-2"></i> Cadastar Nova Turma
              </button>
              
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Cadastar nova turma</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                           <div class="d-flex text-left">
                            
                            <div class="form-group mt-4">
                                <div class="form-group">
                                    <label for="turma">Turma</label>
                                    <input class="form-control form-control-sm " type="text" placeholder=" Nome Da Turma" id="turma">
                                </div>
                                

                            </div>
                           </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                      <button type="button" class="btn btn-primary" id="criarturma">Criar Turma</button>
                    </div>
                  </div>
                </div>
                
              </div>
        </div>

        <div class="container mt-5"> 
              <div class="row">
                  <div class="col-20 mx-auto">
                      <div class="overflow-auto" style="height: 700px">
                          <table class="table text-center">
                            <tr><th class="font-weight-bold">Turmas</th> <th class="font-weight-bold">Delete</th></tr>
                            @foreach($dataTurma as $results)
                            <tr>
                              <td>{{$results->name}}</td>
                              <td><button class="btn btn-danger deleteturma" id="{{$results->id}}">Delete</button></td>
                            </tr>
                            @endforeach
                          </table>
                      </div>
                  </div>
              </div>
          </div>




<div class="modal fade" id="modalselect" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">

                    
                    <div class="modal-body">
                      <div class="d-flex justify-content-center">
                      <div class="form-group ">
                      <select class="form-select" aria-label="Default select example" id="select">
                        <option selected>Open this select menu</option>
                        @foreach($dataTurma as $turma)
                          <option value="" id="{{$turma->id}}">{{$turma->name}}</option>
                        @endforeach
                      </select>

                      <div class="d-flex gap-4 mt-3"><input class="form-control form-control-sm mr-2 mt-1" type="text" placeholder="Nome Do Aluno" id="alunos">
                          <button class="btn btn btn-outline-success" id="search">search</button>
                         <button class="btn btn btn-outline-success" id="addaluno"><i class="bi bi-plus-square fa-xl"></i></button>
                       </div>

                       <div class="d-flex mt-3 flex-column">
                          <h5>Alunos a serem adicionados:</h5>
                          <ul id="addcaluno">

                          </ul>
                       </div>

                       <div class="form-group d-none">
                          <label for="id">id</label>
                            <input class="form-control form-control-sm " type="number" placeholder="id" id="alunoid" name="id">
                        </div>
                        <div class="form-group d-none">
                            <label for="id">id</label>
                            <input class="form-control form-control-sm " type="number" placeholder="id" id="idturma" name="id">
                          </div>
                      </div>

                      </div>
                      <div class="modal-footer">
                        <!-- <button type="submit" id="atualizar" class="btn btn-primary">Atualizar</button> -->
                      </div>         
                  </div>
                </div>
              </div>
        </div>
<div class="modal fade" id="modalveraluno" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">

                  <div class="d-flex justify-content-center mt-5"> 
                          <div class="row">
                              <div class="col-20 mx-auto">
                                  <div class="overflow-auto" style="height: 400px">
                                      <h5>Alunos:</h5>
                                      <table class="table text-center" id="tbalunoturma">
                                      
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="submit" id="atualizar" class="btn btn-primary">Atualizar</button> -->
                      </div>         
                  </div>
                </div>
              </div>
@endsection