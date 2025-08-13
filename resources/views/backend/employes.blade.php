@extends('Layout.appback')

@section('title', 'Accueil')

@section('content')
<table class="mx-auto text-center table table-striped table-bordered mt-4" style="width: 600px">
  <caption class="text-center" style="font-weight: bold">
    Liste des élèves  
  </caption>
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Classe</th>
      <th scope="col">Age</th>
      <th scope="col"  style="width: 300px">Adresse Email</th>
      <th scope="col">Supprimer l'étudiant</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($employes as $employes )
    <tr>
      <th scope="row">{{ $employes['nom']}}</th>
      <td>{{ $employes['']}}</td>
      <td>{{ $employes['age'] }}</td>
      <td>{{ $employes['email'] }}</td>
      <td>
        {{-- <form action="{{ route('remove_student', $etudiants['id']) }}" method="POST"> --}}
          @csrf
          @method('DELETE') 
          <input type="submit" value="Supprimer">
        </form>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection