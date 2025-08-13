@extends('Layout.appback')

@section('title', 'Accueil')

@section('content')
<section>
    <p class="flex justify-center text-3xl text-red-900 font-extrabold italic text-shadow-sm text-shadow-black">Passage au serveur backend </p>
  <table class="mx-auto text-center table table-striped table-bordered mt-4" style="width: 900px">
    <caption class="text-center text-2xl" style="font-weight: bold">
      Liste des employés 
    </caption>
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col" style="width: 300px">Tel</th>
        <th scope="col"  style="width: 300px">Adresse Email</th>
        <th scope="col" style="width: 300px">Post</th>
        <th scope="col" style="width: 300px">Rôle</th>
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

  <!-- Bouton pour ouvrir le modal -->
  <div class="text-center mt-4">
    <button type="button" class="bg-green-700 px-12 text-white" data-bs-toggle="modal" data-bs-target="#addEmployeModal">
      Ajouter un Employé
    </button>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="addEmployeModal" tabindex="-1" aria-labelledby="addEmployeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addEmployeModalLabel">Ajouter un Employé</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addEmployeForm" action="{{ route('add_employes') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="nom" class="form-label">Nom:</label>
            <input type="text" class="form-control" name='nom' required>
          </div>
          <div class="mb-3">
            <label for="prenom" class="form-label">Prénom:</label>
            <input type="text" class="form-control" name='prenom' required>
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" class="form-control" name='age' required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name='email' required>
          </div>
          <div class="mb-3">
            <label for="post" class="form-label">Poste:</label>
            <select name="post" class="form-select" required>
              <option value="">Choisissez un poste</option>
              <option value="Logistique">Logistique</option>
              <option value="Réception">Réception</option>
              <option value="Comptabilité">Comptabilité</option>
              <option value="Vente">Vente</option>
              <option value="Direction">Direction</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Rôle:</label>
            <select name="role" class="form-select" required>
              <option value="">Choisissez un rôle</option>
              <option value="Ouvrier polyvalent">Ouvrier polyvalent</option>
              <option value="employé polyvalent">Employé polyvalent</option>
              <option value="comptable">Comptable</option>
              <option value="assistant du régional manager">Assistant du régional manager</option>
              <option value="régional manager">Régional manager</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="salaire" class="form-label">Salaire:</label>
            <input type="number" step="0.01" class="form-control" name="salaire" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" form="addEmployeForm" class="bg-green-700 px-12 text-white">Ajouter l'employé</button>
        <button type="button" class="bg-red-700 px-12 text-white" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

@endsection