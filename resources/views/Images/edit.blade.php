@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <br>
    <br>
    <h1 class="mb-4">Modifier une Image</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" value="{{ $image->nom }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="file">Image</label>
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="bien_id">Bien</label>
                    <select name="bien_id" class="form-control" required>
                        @foreach($biens as $bien)
                            <option value="{{ $bien->id }}" {{ $image->bien_id == $bien->id ? 'selected' : '' }}>{{ $bien->intitule }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </div>
</div>
@endsection
