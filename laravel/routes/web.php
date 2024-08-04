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

    Route::get('/homeadm', function(){
        return view('adm.home');
    })->middleware(AdmMiddleware::class)->name('homeadm');

    Route::post('/logout', [authentic::class, 'logout']);
    
    Route::get('/home', function(){
        return view('home');
    })->name('home');
    
    Route::get('/alunos', [AlunoController::class, 'index'])->middleware(AdmMiddleware::class)->name('alunos');

    Route::post('/deleteuser{id}', [AlunoController::class, 'delete'])->middleware(AdmMiddleware::class)->name('deleteuser');

    Route::get('/getupdate{id}', [AlunoController::class, 'show'])->middleware(AdmMiddleware::class)->name('updatealuno');

    Route::patch('/updatealuno', [AlunoController::class, 'update'])->middleware(AdmMiddleware::class)->name('updatealuno');

    Route::get('/turmas', [TurmaController::class, 'index'])->middleware(AdmMiddleware::class)->name('turmas');

    Route::post('/turmacreate', [TurmaController::class, 'create'])->middleware(AdmMiddleware::class)->name('turmacreate');

    Route::post('/deleteturma{id}', [TurmaController::class, 'delete'])->middleware(AdmMiddleware::class)->name('deleteturma');

    Route::get('/alunoprofile', [AlunoController::class, 'profile'])->name('alunoprofile');

});
