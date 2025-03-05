@extends('layouts.app')

@section('content')
    <h1>Modifier le Document</h1>
    <form action="{{ route('document.update', $document) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ $document->titre }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $document->description }}" required>
        </div>
        <div class="mb-3">
            <label for="dateUpload" class="form-label">Date Upload</label>
            <input type="date" class="form-control" id="dateUpload" name="dateUpload" value="{{ $document->dateUpload }}" required>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
@endsection
