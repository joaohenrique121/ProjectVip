<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authentic extends Controller
{
    public function register(RegisterRequest $request){
        $credentials = $request->validated();

        User::create([
            'email' => $credentials["email"],
            'name' => $credentials["name"],
            'password' => Hash::make($credentials["password"]),
            "contato" => $credentials["contato"]
        ]);

        return response()->json(["code" => 200, "messege" => "cadastro concluido com sucesso"]);
    }

    public function login(LoginRequest $request){
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            return response()->json(["code" => 200, "message" => "logado", "is_admin" => $user["is_admin"]]);
        }

        return response()->json(["code" => 404, "message" => "Credenciais inválidas"]);
    }

    public function logout(){
        Auth::logout();
        return response()->json(['code' => 200, 'message' => 'logout realizado com sucesso']);
    }
}
