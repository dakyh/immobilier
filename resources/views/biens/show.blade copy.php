@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Détails du Bien</h1>
    <div class="card">
        
        <div class="card-body">
            <div id="carouselImages" class="carousel slide mx-auto" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($bien->images as $image)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ asset($image->url) }}" class="d-block w-100 custom-image-size" alt="{{ $bien->intitule }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <p><strong>Référence:</strong> {{ $bien->reference }}</p>
            <p><strong>Type:</strong> {{ $bien->type }}</p>
            <p><strong>Surface:</strong> {{ $bien->surface }} m²</p>
            <p><strong>Prix:</strong> {{ $bien->prix }} cfa</p>
            <p><strong>Adresse:</strong> {{ $bien->adresse }}</p>
            <p><strong>Description:</strong> {{ $bien->description }}</p>
            <p><strong>Date de Publication:</strong> {{ \Carbon\Carbon::parse($bien->datePublication)->format('d-m-Y') }}</p>
            <p><strong>État:</strong> {{ $bien->etat }}</p>

            <!-- Display Images as a Carousel -->
            {{-- <h5 class="mt-4">Images du Bien:</h5> --}}
            

            <a href="{{ route('biens.edit', $bien->id) }}" class="btn btn-warning mt-4">Modifier</a>
            <form action="{{ route('biens.destroy', $bien->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-4">Supprimer</button>
            </form>
        </div>
    </div>
</div>

<style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: transparent; /* Make the background transparent */
        background-image: none; /* Remove the default icon */
    }

    .carousel-control-prev-icon::after {
        content: '\2039'; /* Unicode for left arrow */
        font-size: 50px;
        color: black;
    }

    .carousel-control-next-icon::after {
        content: '\203A'; /* Unicode for right arrow */
        font-size: 50px;
        color: black;
    }
    
    .custom-image-size {
        width: 100%;
        height: 400px; /* Adjust the height as needed */
        object-fit: contain;
        object-position: center;
    }
</style>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
