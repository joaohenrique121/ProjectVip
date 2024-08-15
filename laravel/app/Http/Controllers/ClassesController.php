<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassesRequest;
use App\Http\Requests\TurmaRequest;
use App\Http\Resources\TurmasResource;
use App\Models\Classes;
use App\Models\Turma;
use Illuminate\Http\Request;

class ClassesController extends Controller
{

    public function index(){
        return view('adm.turmas')->with(['dataTurma' => TurmasResource::collection(Classes::all())]);
    }

    public function store(ClassesRequest $request)
    {
        dd($request->all());
        $data = $request->validated();


        return new TurmasResource(Turma::create($data));
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassesRequest $request, string $id)
    {
        //
    }

    public function destroy($id){
        $turma = Turma::where('id', $id)->delete();
        return new TurmasResource($turma);
    }

}
