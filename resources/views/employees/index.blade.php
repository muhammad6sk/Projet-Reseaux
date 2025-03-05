@extends('layouts.app')

@section('content')
    <h1>Liste des employés</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Ajouter un employé</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>EMAIL</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->nom }}</td>
                    <td>{{ $employee->prenom }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->adresse }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline-block;">
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
