<?php

namespace App\Http\Controllers;
use App\Models\Turma;
use Illuminate\Http\Request;
use App\Http\Requests\TurmaRequest;

class TurmaController extends Controller
{
    public function index(){
        $dataTurma = Turma::all();

        return view('adm.turmas', compact('dataTurma'));
    }


    public function create(TurmaRequest $request){
        $data = $request->validated();
        Turma::create($data);

        return response()->json(['code' => 200, 'message' => 'success']);

    }

    public function delete($id){
        Turma::where('id', $id)->delete();

        return response()->json(['code' => 200, 'message' => 'success']);
    }
}
