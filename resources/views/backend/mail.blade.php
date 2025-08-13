@extends('Layout.appback')

@section('title', 'Accueil')

@section('content')

<div class="container mx-auto mt-8">
  <h2 class="text-2xl font-bold mb-4">Messages reçus</h2>

  <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-300">
      <thead class="bg-gray-100">
        <tr>
          <th class="border px-4 py-2 text-left">Expéditeur</th>
          <th class="border px-4 py-2 text-left">Sujet</th>
          <th class="border px-4 py-2 text-left">Date</th>
          <th class="border px-4 py-2 text-left">E-mail</th>
          <th class="border px-4 py-2 text-left">Messages</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($mails as $mail )   
            <tr>
            <th scope="row">{{ $mail->prenom}} {{ $mail->nom}}</th>       
            <td>{{ $mail->sujet }}</td>
            <td>{{ $mail->date }}</td>
            <td>{{ $mail->mail }}</td>
            <td>{{ $mail->message }}</td>
            <td>
                <form action="{{ route('remove_mail', $mail->id) }}" method="POST">
                @csrf
                @method('DELETE') 
                <input type="submit" value="Supprimer">
                </form>
            </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


@endsection