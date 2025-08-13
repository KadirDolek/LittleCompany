
<div class="container py-5">
    <h1 class="text-center mb-5 border-bottom pb-3 text-secondary">Quelques produits:</h1>
@foreach ($produits as $produit)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ $produit->img }}" class="card-img-top p-3" alt="{{ $produit->nom }}" style="height: 200px; object-fit: contain;">
                <div class="card-body mx-auto text-center">
                    <h5 class="card-title">Nom: {{ $produit->nom }}</h5>
                    <p class="card-text text-muted font-bold">Type: {{ $produit->type }}</p>
                    <p class="card-text font-bold">Description: {{ $produit->descriptif }}</p>
                </div>
                <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-red-500 mx-auto">Prix: {{ number_format($produit->prix, 2) }} €</span>
                    </div>
                </div>
            </div>
        </div>
@endforeach
</div>