@extends('layouts.app')

@section('content')
    <h1>Ajouter un Nouveau Document</h1>
    <form action="{{ route('document.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <div class="mb-3">
            <label for="dateUpload" class="form-label">Date Upload</label>
            <input type="date" class="form-control" id="dateUpload" name="dateUpload" required>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
@endsection
