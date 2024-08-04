<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>V.I.P English Pinhal</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/LOGOVIP.png') }}" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script> 
    <script src="{{ asset('js/register.js') }}" defer></script>
</head>

<body>
    <main id="home" class="d-flex">
        <div class="container align-self-center">
            <div class="row bord">
                <div class="fundo">
                    <div class="col-md-12">
                        <form action="" method="post">
                            <div class="d-flex justify-content-center">
                                <div class="form-group m-4">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input class="form-control form-control-sm " type="email" placeholder="Email" id="email" name="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="Nome">Nome</label>
                                        <input class="form-control form-control-sm " type="text" id="nome" placeholder="Digite seu Nome" name="nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="Senha">Senha</label>
                                        <input class="form-control form-control-sm " type="password" placeholder="Senha" id="senha" name="senha">
                                    </div>
                                    <div class="form-group">
                                        <label for="Conta">Contato(s)</label>
                                        <input class="form-control form-control-sm " type="tell" id="contato" placeholder="numero" name="contato">
                                    </div>
                                </div>
                                <div class="form-group m-4">
                                    <div class="form-group ">
                                        <label for="Rua">Rua</label>
                                        <input class="form-control form-control-sm " type="text" placeholder="Rua do Aluno(a)" id="rua" name="endereco">
                                    </div>
                                </div>
                            </div>
                            <div class="menu"><input class="btn btn-primary " value="cadastrar" type="submit" id="register"> <a href="{{ route('login') }}" class="btn btn-primary">Login</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>