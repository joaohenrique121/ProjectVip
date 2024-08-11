<?php

use App\Http\Controllers\authentic;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use App\Http\Middleware\AdmMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/register', function(){
    return view('register');
})->name('register');


Route::post('/register', [authentic::class, 'register']);

Route::post('/login', [authentic::class, 'login']);

Route::middleware(['auth'])->group(function(){
    Route::post('/logout', [authentic::class, 'logout'])->name('logout');
    
    Route::get('/home', function(){
        return view('home');
    })->name('home');

    Route::post('/profileUpdate', [AlunoController::class, 'updateProfile']);

    //MIDDLEWARE DO ADMIN

    Route::middleware(AdmMiddleware::class)->group(function(){

        //ROTAS DO FRONT-END

        Route::get('/dashboard', function(){
            return view('adm.dashboard');
        })->name('dashboard');

        Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos');

        Route::get('/turmas', [TurmaController::class, 'index'])->name('turmas');


        Route::get('atividades', function (){
            return view('adm.atividades');
        })->name('atividades');

        Route::get('/alunoprofile', [AlunoController::class, 'profile'])->name('alunoprofile');

        //Rotas da "api"

        Route::apiResources([
            'turma' => TurmaController::class,
            'aluno' => AlunoController::class,
        ]);

    });



});
