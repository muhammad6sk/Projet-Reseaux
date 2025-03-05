@extends('layouts.app')

@section('content')
    <h1>Liste des Clients</h1>
    <a href="{{ route('client.create') }}" class="btn btn-primary mb-3">Ajouter un client</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Contact</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($client as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->prenom }}</td>
                    <td>{{ $client->contact }}</td>
                    <td>{{ $client->adresse }}</td>
                    <td>
                        <a href="{{ route('client.edit', $client) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('client.destroy', $client) }}" method="POST" style="display:inline-block;">
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
