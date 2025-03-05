@extends('layouts.app')

@section('content')
    <h1>Liste des Documents</h1>
    <a href="{{ route('document.create') }}" class="btn btn-primary mb-3">Ajouter un document</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du fichier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($document as $document)
                <tr>
                    <td>{{ $document->id }}</td>
                    <td>{{ $document->file_name }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $document->file_path) }}" class="btn btn-info" target="_blank">Télécharger</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
