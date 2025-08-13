@extends('Layout.appback')

@section('title', 'Accueil')

@section('content')
<section>
<table class="mx-auto text-center table table-striped table-bordered mt-4" style="width: 600px">
  <caption class="text-center" style="font-weight: bold">
    Liste des employés 
  </caption>
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Tel</th>
      <th scope="col"  style="width: 300px">Adresse Email</th>
      <th scope="col">Post</th>
      <th scope="col">Rôle</th>
      <th scope="col">Salaire</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($employes as $employe )   
<tr>
  <th scope="row">{{ $employe->nom}}</th>       
  <td>{{ $employe->prenom}}</td>
  <td>{{ $employe->age }}</td>
  <td>{{ $employe->email }}</td>
  <td>{{ $employe->post }}</td>
  <td>{{ $employe->role }}</td>
  <td>{{ $employe->salaire }}</td>
  <td>
    <form action="{{ route('remove_employes', $employe->id) }}" method="POST">
      @csrf
      @method('DELETE') 
      <input type="submit" value="Supprimer">
    </form>
 </td>
</tr>
@endforeach
  </tbody>
</table>
</section>
<section style="padding: 10%">
<h1 class="text-center">Ajouter un Employé</h1>

<form class="d-flex flex-column mx-auto" style="width: 700px" action="{{ route('add_employes') }}" method="POST">
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name='nom'>
    <label for="prenom" >Prénom:</label>
    <input type="text" name='prenom'>
    <label for="age">Age</label>
    <input type="number"  name='age'>
    <label for="email" >Email</label>
    <input type="email" name='email'>
    <label for="post" >Poste</label>
     <select name="post" required>
        <option value=""> Choisissez un poste</option>
        <option value="Logistique">Logistique</option>
        <option value="Réception">Réception</option>
        <option value="Comptabilité">Comptabilité</option>
        <option value="Vente">Vente</option>
        <option value="Direction">Direction</option>
    </select>
    <label for="role">Rôle</label>
    <select name="role" required>
      <option value="">Choisissez un rôle</option>
      <option value="Ouvrier polyvalent">Ouvrier polyvalent</option>
      <option value="employé polyvalent">Employé polyvalent</option>
      <option value="comptable">Comptable</option>
      <option value="assistant du régional manager">Assistant du régional manager</option>
      <option value="régional manager">Régional manager</option>
    </select>
    <label for="salaire" >Salaire</label>
    <input type="decimal" name='salaire'>
    <input type="submit">
</form>
</section>



@endsection