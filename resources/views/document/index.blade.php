@extends('layouts.app')

@section('content')
    <h1>Liste des Documents</h1>
    <a href="{{ route('document.create') }}" class="btn btn-primary mb-3">Ajouter un document</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Date Upload</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($document as $document)
                <tr>
                    <td>{{ $document->id }}</td>
                    <td>{{ $document->titre }}</td>
                    <td>{{ $document->description }}</td>
                    <td>{{ $document->dateUpload }}</td>
                    <td>
                        <a href="{{ route('document.edit', $document) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('document.destroy', $document) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
