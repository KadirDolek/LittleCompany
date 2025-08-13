@extends('Layout.app')

@section('title','MyLittleCompany')

@section('content')

<div class="max-w-xl mx-auto bg-gradient-to-br from-white to-gray-50 shadow-lg rounded-2xl p-8 mt-12 border border-gray-100">
    <h2 class="text-3xl font-extrabold mb-6 text-center bg-gradient-to-r from-blue-500 to-indigo-600 text-transparent bg-clip-text">
        Formulaire de Contact
    </h2>

    <form action="{{ route('storemail') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="nom" class="block text-gray-700 font-medium mb-1">Nom</label>
            <input type="text" id="nom" name="nom"
                class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition"
                placeholder="Votre nom" required>
        </div>

     
        <div>
            <label for="prenom" class="block text-gray-700 font-medium mb-1">Prénom</label>
            <input type="text" id="prenom" name="prenom"
                class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition"
                placeholder="Votre prénom" required>
        </div>

      
        <div>
            <label for="sujet" class="block text-gray-700 font-medium mb-1">Sujet</label>
            <input type="text" id="sujet" name="sujet"
                class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition"
                placeholder="Sujet de votre message" required>
        </div>

        
        <div>
            <label for="date" class="block text-gray-700 font-medium mb-1">Date</label>
            <input type="date" id="date" name="date"
                class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition"
                required>
        </div>

       
        <div>
            <label for="message" class="block text-gray-700 font-medium mb-1">Message</label>
            <textarea id="message" name="message" rows="4"
                class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400 transition"
                placeholder="Votre message..." required></textarea>
        </div>

       
        <div>
            <label for="tel" class="block text-gray-700 font-medium mb-1">Téléphone</label>
            <input type="tel" id="tel" name="tel"
                class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition"
                placeholder="Votre numéro">
        </div>

    
        <div>
            <label for="mail" class="block text-gray-700 font-medium mb-1">E-mail</label>
            <input type="email" id="mail" name="mail"
                class="w-full border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 transition"
                placeholder="Votre adresse e-mail" required>
        </div>

      
        <div class="text-center">
            <button type="submit"
                class="w-full bg-gradient-to-r from-yellow-500 to-red-600 text-white font-semibold py-3 rounded-pill shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition duration-200">
                ✉ Envoyer
            </button>
        </div>
    </form>
</div>

@endsection
