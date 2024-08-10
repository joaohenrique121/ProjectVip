<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UpdateAlunoRequest;
use Illuminate\Support\Facades\Auth;

class AlunoController extends Controller
{
    public function index(){
        $alunos = User::where('is_admin', false)->get();

        return view('adm.paginaAlunos', compact('alunos'));
    }

    public function delete($id){
        User::where('id', $id)->delete();
        
        return response()->json(['code' => 200, 'messege' => 'deletado com sucesso']);
    }


    public function update(UpdateAlunoRequest $request){
        $update = $request->validated();

        $userid = $update["id"];
        unset($update["id"]);

        User::where('id', $userid)->update($update);

        return response()->json(['code' => 200, 'message' => 'success']);
        
    }
    public function show($id){
        $user = User::select('id', 'name', 'email', 'contato')->where('id', $id)->first();
        return compact("user");
    }

}
