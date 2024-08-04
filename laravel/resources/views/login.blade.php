<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>V.I.P English Pinhal</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/LOGOVIP.png') }}" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="{{ asset('js/login.js') }}" defer></script>
</head>

<body>


    <main id="home" class="d-flex">
        <div class="container align-self-center">
            <div class="row bord">
                <div class="fundo">
                    <div class="col-md-12 menu ">
                        <header class="bord">
                            <a href=""><img src="{{ asset('images/LOGOVIP.png') }}" alt="LOGO" width="114"></a>
                        </header>
                        <form action="">
                            <div class="d-flex form-group justify-content-center m-4 flex-wrap">

                                <div class="senha"><input class="form-control form-control-sm p-3" type="text" placeholder="Email" name="email" id="email"></div>
                            </div>
                            <div class="d-flex form-group justify-content-center  m-4 flex-wrap">
                                <div class="senha"><input class="form-control form-control-sm p-3" type="password" placeholder="Password" name="pass" id="senha"></div>
                            </div>

                            <div class="d-flex form-group justify-content-center mt-3 flex-wrap">

                                <div class="esqueci m-2"><a href="#">Esqueci minha senha</a></div>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center mt-3 flex-wrap">
                            <div class="mr-4"> <button class="btn btn-primary"><a href="{{ route('register') }}" class="text-light">Cadastrar</a></button></div>
                            <div class="ml-4"> <input id="loginform" type="submit" class="btn btn-primary " value="Login"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>