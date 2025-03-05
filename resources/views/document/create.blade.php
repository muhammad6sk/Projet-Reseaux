@extends('layouts.app')

@section('content')
    <h1>Ajouter un Document</h1>
    <form action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="document" class="form-label">Choisir un document</label>
            <input type="file" class="form-control" id="document" name="document" required>
        </div>
        <button type="submit" class="btn btn-success">Uploader</button>
    </form>
@endsection
