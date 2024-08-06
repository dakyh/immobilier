@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier une Image</h1>
    <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ $image->nom }}" required>
        </div>
        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" class="form-control">
        </div>
        <div class="form-group">
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
@endsection
