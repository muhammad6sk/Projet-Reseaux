@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center mb-5">Tableau de Bord</h1>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title">Ajouter un Employé</h5>
          <p class="card-text">Gérez les employés de Smarttech avec facilité.</p>
          <a href="{{ route('employees.create') }}" class="btn btn-primary">Ajouter Employé</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title">Ajouter un Client</h5>
          <p class="card-text">Enregistrez et suivez vos clients.</p>
          <a href="{{ route('client.create') }}" class="btn btn-success">Ajouter Client</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title">Ajouter un Document</h5>
          <p class="card-text">Téléchargez et partagez des documents importants.</p>
          <a href="{{ route('document.create') }}" class="btn btn-warning">Ajouter Document</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
