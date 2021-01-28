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
}
