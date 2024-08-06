@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Bien</h1>
    <form action="{{ route('biens.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="reference">Référence</label>
            <input type="text" name="reference" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="intitule">Intitulé</label>
            <input type="text" name="intitule" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="surface">Surface</label>
            <input type="number" name="surface" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" name="prix" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="typebien_id">Type</label>
            <select name="typebien_id" class="form-control" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="datePublication">Date de Publication</label>
            <input type="date" name="datePublication" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="etat">État</label>
            <input type="text" name="etat" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
