@extends('layouts.app')

@section('content')
    <h1>Ajouter un Nouveau Client</h1>
    <form action="{{ route('client.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input pattern="[0-9]{8,15}" class="form-control" id="contact" name="contact" required>
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" required>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
@endsection
