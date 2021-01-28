<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Utente;

class UtentiController extends Controller
{
    public function index(){
        $users = Utente::all();
        
        return view('users', compact('users'));
    }
    public function show($id){
        $user = Utente::find($id);
        return view('user', compact('user'));
    }
}
