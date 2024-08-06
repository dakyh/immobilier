@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Détails du Bien</h1>
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">{{ $bien->intitule }}</h2>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4"><strong>Référence:</strong></div>
                <div class="col-md-8">{{ $bien->reference }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Description:</strong></div>
                <div class="col-md-8">{{ $bien->description }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Surface:</strong></div>
                <div class="col-md-8">{{ $bien->surface }} m²</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Prix:</strong></div>
                <div class="col-md-8">{{ $bien->prix }} €</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Adresse:</strong></div>
                <div class="col-md-8">{{ $bien->adresse }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Date de Publication:</strong></div>
                <div class="col-md-8">{{ $bien->datePublication->format('d-m-Y') }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>État:</strong></div>
                <div class="col-md-8">{{ $bien->etat }}</div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="{{ route('biens.edit', $bien->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('biens.destroy', $bien->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
