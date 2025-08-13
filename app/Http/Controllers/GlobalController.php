<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Message;
use App\Models\Produit;

class GlobalController extends Controller
{
    
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
         $mails = Message::all(); 
            return view('backend.mail', compact('mails'));
    }




    public function storemail(Request $request){

        $mail = new Message(); 
        $mail->nom = $request->nom;
        $mail->prenom = $request->prenom;
        $mail->sujet = $request->sujet;
        $mail->date = $request->date;
        $mail->message = $request->message;
        $mail->tel = $request->tel;
        $mail->mail = $request->mail;

        $mail->save();

    return redirect()->route('mail');
    }




    public function destroymail($id){
        $mails = Message::where("id", $id);
        $mails->delete();

        $mails = Message::all();
        return view('backend.mail', compact('mails'));
    }

    public function contact(){
        return view('frontend.contact');
    }


    public function produits(){
    $produits = Produit::all(); 
    return view('backend.produit', compact('produits'));
}
    public function storeproduit(Request $request){
        $produits = new Produit(); 
        $produits->nom = $request->nom;
        $produits->type = $request->type;
        $produits->descriptif = $request->descriptif;
        $produits->img = $request->img;
        $produits->prix = $request->prix;
        $produits->save();

        $produits = Produit::all(); 
        return view('backend.produit', compact('produits')); 
    }

    public function destroyproduit($id){
        $produit = Produit::where("id", $id);
        $produit->delete();

        $produits = Produit::all(); 
        return view('backend.produit', compact('produits')); 
}

    public function produitshop(){
        $produits = Produit::all();
        return view('frontend.produitshop', compact('produits'));
    }
}