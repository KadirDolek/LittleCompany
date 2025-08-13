@extends('Layout.appback')

@section('title', 'Accueil')

@section('content')



<table class="mx-auto text-center table table-striped table-bordered mt-4" style="width: 900px">
  <caption class="text-center text-2xl" style="font-weight: bold">
    <h2>Liste des produits:</h2>
  </caption>
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Type</th>
      <th scope="col" style="width: 300px">Descriptif</th>
      <th scope="col" style="width: 300px">Image</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th class="align-middle">Veste</th>
    <td class="align-middle">Textile</td>
    <td class="align-middle">Taille M, Cuir, Carhartt</td>
    <td>
        <img style="width: 100px; height:100px" class="mx-auto" src="https://imgs.search.brave.com/r1Lrf2k7rdBj7XTENe0iDd1wmjN3HddY3ZjO0vVAmsQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS1jZG4uY2l0YWRp/dW0uY29tL2ltYWdl/LzI4LzgvNzYyNjI4/OC5wbmc_Zml0PWJv/dW5kcyZiZy1jb2xv/cj1FQkVERUYmd2lk/dGg9NTAwJmhlaWdo/dD03NTAmY2FudmFz/PTUwMC03NTA" alt="">
    </td>
        <td class="align-middle">200</td>
    </tr>
@foreach ($produits as $produit ) 
<tr>
  <th class="align-middle" scope="row">{{ $produit->nom}}</th>       
  <td class="align-middle">{{ $produit->type}}</td>
  <td class="align-middle">{{ $produit->descriptif }}</td>
  <td class="align-middle"><img src="{{ $produit->img }}" alt=""></td> 
  <td>{{ $produit->prix }}</td>
  <td>
    <form action="{{ route('remove_produit', $produit->id) }}" method="POST">
      @csrf
      @method('DELETE') 
      <input type="submit" value="Supprimer">
    </form>
 </td>
</tr>
@endforeach
  </tbody>
</table>

<div class="text-center mt-4">
  <button type="button" class="bg-green-700 px-12 text-white" data-bs-toggle="modal" data-bs-target="#addProduitModal">
    Ajouter un produit
  </button>
</div>

<div class="modal fade" id="addProduitModal" tabindex="-1" aria-labelledby="addProduitModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProduitModalLabel">Ajouter un Produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addProduitForm" action="{{ route('add_produit') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="nom" class="form-label">Nom:</label>
            <input type="text" class="form-control" name='nom' required>
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" class="form-control" name='type' required>
          </div>
          <div class="mb-3">
            <label for="descriptif" class="form-label">Descriptif:</label>
            <input type="text" class="form-control" name='descriptif' required>
          </div>
          <div class="mb-3">
            <label for="img" class="form-label">Url de l'image:</label>
            <input type="url" class="form-control" name="img" required>
          </div>
          <div class="mb-3">
            <label for="prix" class="form-label">Prix:</label>
            <input type="number" step="0.01" class="form-control" name="prix" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" form="addProduitForm" class="bg-green-700 px-12 text-white">Ajouter le produit</button>
        <button type="button" class="bg-red-700 px-12 text-white" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
@endsection