<?php

use App\Http\Controllers\authentic;
use App\Http\Controllers\AlunoController;
use App\Http\Middleware\AdmMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmaController;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/register', function(){
    return view('register');
})->name('register');


Route::post('/register', [authentic::class, 'register']);

Route::post('/login', [authentic::class, 'login']);

Route::middleware(['auth'])->group(function(){
    Route::post('/logout', [authentic::class, 'logout']);
    
    Route::get('/home', function(){
        return view('home');
    })->name('home');

    Route::middleware(AdmMiddleware::class)->group(function(){

        //ROTAS DO FRONT-END

        Route::get('/dashboard', function(){
            return view('adm.dashboard');
        })->middleware(AdmMiddleware::class)->name('dashboard');

        Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos');

        Route::get('/turmas', [TurmaController::class, 'index'])->name('turmas');

        Route::get('atividades', function (){
            return view('adm.atividades');
        })->name('atividades');

        Route::post('/deleteuser{id}', [AlunoController::class, 'delete'])->name('deleteuser');

        Route::get('/getupdate{id}', [AlunoController::class, 'show'])->name('updatealuno');

        Route::patch('/updatealuno', [AlunoController::class, 'update'])->name('updatealuno');


        Route::post('/turmacreate', [TurmaController::class, 'create'])->name('turmacreate');

        Route::post('/deleteturma{id}', [TurmaController::class, 'delete'])->name('deleteturma');

        Route::get('/alunoprofile', [AlunoController::class, 'profile'])->name('alunoprofile');
    });



});
