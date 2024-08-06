@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Ajouter une Image</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="file">Image</label>
                    <input type="file" name="file" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <label for="bien_id">Bien</label>
                    <select name="bien_id" class="form-control" required>
                        @foreach($biens as $bien)
                            <option value="{{ $bien->id }}">{{ $bien->intitule }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection
