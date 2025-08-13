@extends('Layout.app')

@section('title','MyLittleCompany')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Notre Boutique</h1>
    
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($produits as $produit)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ $produit->img }}" class="card-img-top p-3" alt="{{ $produit->nom }}" style="height: 200px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">{{ $produit->nom }}</h5>
                    <p class="card-text text-muted">{{ $produit->type }}</p>
                    <p class="card-text">{{ Str::limit($produit->descriptif, 50) }}</p>
                </div>
                <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-red-500">{{ number_format($produit->prix, 2) }} €</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="https://imgs.search.brave.com/r1Lrf2k7rdBj7XTENe0iDd1wmjN3HddY3ZjO0vVAmsQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS1jZG4uY2l0YWRp/dW0uY29tL2ltYWdl/LzI4LzgvNzYyNjI4/OC5wbmc_Zml0PWJv/dW5kcyZiZy1jb2xv/cj1FQkVERUYmd2lk/dGg9NTAwJmhlaWdo/dD03NTAmY2FudmFz/PTUwMC03NTA" class="card-img-top p-3" alt="" style="height: 200px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">Veste</h5>
                    <p class="card-text text-muted">Textile</p>
                    <p class="card-text">Taille M, Cuir, Carhartt</p>
                </div>
                <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-red-500">200€</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection