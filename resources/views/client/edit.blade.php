@extends('layouts.app')

@section('content')
    <h1>Modifier le Client</h1>
    <form action="{{ route('client.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $client->nom }}" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $client->prenom }}" required>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input pattern="[0-9]{8,15}" class="form-control" id="contact" name="contact" value="{{ $client->contact }}" required>
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $client->adresse }}" required>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
@endsection
