<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class GlobalController extends Controller
{
    public function backendwelcome(){
         return view('backendWelcome');
    }
    
    public function employes(){
        $employes = Employe::all();
         return view('backend.employes', compact('employes'));
    }
    
    public function create(){
         return view('create');        
    }
    
    public function store(Request $request){
            $request->validate([
        'post' => 'required|in:Logistique,Réception,Comptabilité,Vente,Direction',
        'role' => 'required|in:Ouvrier polyvalent,employé polyvalent, comptable,assistant du régional manager,régional manager'
    ]);

        $employe = new Employe(); 
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->age = $request->age;
        $employe->email = $request->email;
        $employe->post = $request->post;
        $employe->role = $request->role;
        $employe->salaire = $request->salaire;

        
        $employe->save(); 
        $employes = Employe::all();
        return view('backend.employes', compact('employes'));
    }
    public function destroy($id){
        $employes = Employe::where("id", $id);
        $employes->delete();

        $employes = Employe::all(); 
        return view('backend.employes', compact('employes'));
    }

    public function mail(){
         return view('backend.mail');
    }
        public function storemessage(Request $request){

        $mail = new Message(); 
        $mail->nom = $request->mail;
        
        $employe->save(); 
        $employes = Employe::all();
        return view('backend.employes', compact('employes'));
    }
}