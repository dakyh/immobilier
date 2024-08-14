@extends('layouts.app')

@section('content')
<section class="home section" id="home">
    <br>
    <br>
    <div class="home__container container ">
        <div class="">
            <h1 class="home__title">
                Découvrez <br> nos différentes propriétés
            </h1>
        </div>
    </div>
</section>

<div style="margin-top: 30px" id="page-wrapper">
    <div class="row"> 
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            @foreach($biens as $bien)
                                <div class="col-md-6">
                                    <div class="featured-thumb hover-zoomer mb-4">
                                        <a href="{{ route('biens.show', $bien->id) }}">
                                            <div class="overlay-black overflow-hidden position-relative">
                                                <div id="carousel-{{ $bien->id }}" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @foreach($bien->images as $image)
                                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                <img src="{{ asset($image->url) }}" class="card-img-top fixed-size" alt="{{ $bien->intitule }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $bien->name }}" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $bien->id }}" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <div class="sale bg-secondary text-white">À vendre</div>
                                                <div class="price text-primary text-capitalize">{{ $bien->surface }} m²</div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2 text-capitalize">
                                                        {{ $bien->intitule }}
                                                    </h5>
                                                    <span class="location text-capitalize">
                                                        <i class="fas fa-map-marker-alt text-primary"></i>{{ $bien->adresse }}
                                                    </span>
                                                </div>
                                                <div class="px-4 pb-4 d-inline-block w-100">
                                                    <div class="float-left text-capitalize">
                                                        <i class="fa-solid fa-house text-primary mr-1"></i> Type : {{ $bien->type }}
                                                    </div>

                                                    <label for="type" class="form-label">Type</label>
           
                                                    <div class="float-right">
                                                        <i class="far fa-calendar-alt text-primary mr-1"></i> {{ \Carbon\Carbon::parse($bien->datePublication)->format('d-m-Y') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="sidebar-widget">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Quels types de biens cherchez-vous?</h4>
                            <form class="d-inline-block w-100" action="{{ route('biens.index') }}" method="get">
                                <label class="sr-only">types</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-search"></i></div>
                                    </div>
                                    <select class="form-control" name="types" id="">
                                        <option value="all" {{ $selectedType == 'all' ? 'selected' : '' }}>Tous</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type->type }}" {{ $selectedType == $type->type ? 'selected' : '' }}>
                                                {{ $type->type }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Filtrer</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fixed-size {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
