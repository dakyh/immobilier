@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <br>
    <br>
    <h1 class="mb-4">{{ isset($typebien) ? 'Modifier' : 'Ajouter' }} un Type de Bien</h1>

    <form action="{{ isset($typebien) ? route('typebiens.update', $typebien->id) : route('typebiens.store') }}" method="POST">
        @csrf
        @if(isset($typebien))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" name="name" class="form-control" value="{{ isset($typebien) ? $typebien->name : '' }}" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($typebien) ? 'Mettre à jour' : 'Ajouter' }}</button>
    </form>
</div>
@endsection
