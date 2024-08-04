<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>V.I.P English Pinhal</title>
    <link rel="shortcut icon" href="{{ asset('images/LOGOVIP.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pgaluno.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="{{ asset('js/crudTurma.js') }}" defer></script>
    <script src="{{ asset('js/login.js') }}" defer></script>
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check2" viewBox="0 0 16 16">
          <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
          <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
          <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
          <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
        </symbol>
      </svg>
  
      <!-- Inicio Toggle modo dark -->
      <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center bg-white"
                id="bd-theme"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
          <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
          <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
              <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
              Claro
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
              <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
              Escuro
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
              <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
              Auto
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
        </ul>
      </div>

    <div class="wrapper d-flex" >
        <aside id="sidebar" class="expand d-flex">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="bi bi-list "></i>
                </button>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item pl-4">
                    <a href="{{ route('alunos') }}" class="sidebar-link pl-4">
                        <i class="bi bi-person-badge fa-lg"></i>
                        <span>Alunos</span>
                    </a>
                </li>
                <li class="sidebar-item pl-4">
                    <a href="{{ route('turmas') }}" class="sidebar-link pl-4">
                        <i class="bi bi-card-checklist fa-lg"></i>
                        <span>Turmas</span>
                    </a>
                </li>
                
                <li class="sidebar-item pl-4">
                    <a href="paginaAtividade.php" class="sidebar-link pl-4">
                        <i class="bi bi-journal-bookmark fa-lg"></i>
                        <span>Atividades</span>
                    </a>
                </li>
               
            </ul>
            <div class="sidebar-footer pl-4">
                <a href="#" class="sidebar-link pl-4" data-toggle="modal" data-target="#myModal">
                    <i class="lni lni-cog fa-lg"></i>
                    <span>Configurações</span>
                </a>
               
    
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-co=ntent">
           
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                   <div class="d-flex text-left">
                    <div class="form-group mt-4">
                        <div class="form-group">
                            <i class="bi bi-key"></i>
                            <button class="btn ">Alterar Senha</button>
                        </div>
                   </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
            </div>
          </div>
        </div>
      </div>
     </div>
     </div>
            <div class="sidebar-footer pl-4">
                <a href="" id="logout" class="sidebar-link pl-4">
                <i class="bi bi-box-arrow-left"></i>
                    <span>Sair</span>
                </a>
            </div>
        </aside>
    <div class="main ">
        <div class="text-right p-3" style="background-color: #4169E1;">
            <i class="bi bi-person-circle text-light p-4 sidebar-item fa-xl"></i>
        </div>
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
        </div>
        </div>
         
</div>

  </nav>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
</html>