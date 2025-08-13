<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function backendwelcome(){
         return view('backendWelcome');
    }
    public function employes(){
         return view('backend.employes');
    }
}
