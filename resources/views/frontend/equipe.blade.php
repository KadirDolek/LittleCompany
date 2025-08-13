@extends('Layout.app')

@section('title','Notre Équipe')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Notre Équipe</h1>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($employes as $employe)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">{{ $employe->prenom }} {{ $employe->nom }}</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="me-4">
                            <img src="https://cdn.pixabay.com/photo/2017/05/18/14/27/working-2323760_640.png" 
                                 class="rounded-circle" 
                                 style="width: 100px; height: 100px; object-fit: cover;" 
                                 alt="Photo {{ $employe->prenom }}">
                        </div>
                        <div>
                            <p class="mb-1"><strong>Poste:</strong> {{ $employe->post }}</p>
                            <p class="mb-1"><strong>Rôle:</strong> {{ $employe->role }}</p>
                            <p class="mb-1"><strong>Email:</strong> {{ $employe->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection