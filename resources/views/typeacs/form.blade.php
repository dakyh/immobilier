@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <br>
    <br>
    <h1 class="mb-4">{{ isset($typeac) ? 'Modifier' : 'Ajouter' }} un Type d'Accompagnement</h1>

    <form action="{{ isset($typeac) ? route('typeacs.update', $typeac->id) : route('typeacs.store') }}" method="POST">
        @csrf
        @if(isset($typeac))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" name="name" class="form-control" value="{{ isset($typeac) ? $typeac->name : '' }}" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($typeac) ? 'Mettre à jour' : 'Ajouter' }}</button>
    </form>
</div>
@endsection
