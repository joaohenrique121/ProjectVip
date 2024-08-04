<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V.I.P English Pinhal</title>
    <link rel="shortcut icon" href="{{ asset('images/LOGOVIP.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="{{ asset('js/login.js') }}" defer></script>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="expand d-flex">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="bi bi-list "></i>
                </button>
            </div>
            <ul class="sidebar-nav">
                <a href="" class="sidebar-link pl-4">
                    <i class="bi bi-person-badge fa-lg"></i>
                    <span>Atividades</span>
                 </a>
            </ul>
            <div class="sidebar-footer pl-4">
                <a href="#" class="sidebar-link pl-4">
                    <i class="lni lni-cog fa-lg"></i>
                    <span>Configurações</span>
                </a>
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
                <button class="bg-transparent border-0" id="profile" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-person-circle text-light p-4 sidebar-item"></i></button>
            </div>
        </div>
    </div>


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul id="profilelist">
                            <li id="name"></li>
                            <li id="email"></li>
                            <li id="contato"></li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" id="" class="btn btn-primary save">Salvar</button>
                    </div>
                </div>
            </div>
        </div>







    <script src="../scripts/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </nav>
</body>

</html>