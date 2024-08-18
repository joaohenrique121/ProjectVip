<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchAlunos(Request $request){
       if($request->name != ""){
           $alunos = User::where("name", "like", "%". $request->name . "%")->limit(10)->get(['id', 'name']);
           return response()->json($alunos);
       }
       return response()->json('');
    }
}
