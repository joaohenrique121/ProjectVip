<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UpdateAlunoRequest;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function updateProfile(Request $request)
    {
        try{
        $data = $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $user = Auth::user();

            if ($request->hasFile('profile_picture')) {

                if ($user->profile_picture != null) {
                    Storage::disk('public')->delete($user->profile_picture);
                }
    
                $image = $request->file('profile_picture')->store('profile', 'public');
                $data['profile_picture'] = $image;
            } else {
                $data['profile_picture'] = $user->profile_picture;
            }
    
            $user->update($data);

            return response()->json(['code' => 200, 'mensagem' => 'success']);
    
        }catch(Exception $error){
            return false;
        }


    }

}
