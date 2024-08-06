@extends('layouts.app')

@section('content')
<section class="home section" id="home">
  <div class="home__container container ">
      <div class="">
          <h1 class="home__title">
              Découvrez <br> nos différents propriétés
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
                                        <div class="overlay-black overflow-hidden position-relative">
                                            <img src="{{ $bien->image ? asset('storage/' . str_replace('storage/', '', $bien->image->url)) : asset('img/home.jpg') }}" alt="pimage">
                                            <div class="sale bg-secondary text-white">A vendre</div>
                                            <div class="price text-primary text-capitalize">{{ $bien->surface }} m2</div>
                                        </div>
                                        <div class="featured-thumb-data shadow-one">
                                            <div class="p-4">
                                                <h5 class="text-secondary hover-text-primary mb-2 text-capitalize">
                                                    <a href="#">{{ $bien->intitule }}</a>
                                            
                                                <a href="#">{{ $bien->intitule }}</a>
                                            </h5>
                                            <span class="location text-capitalize">
                                                <i class="fas fa-map-marker-alt text-primary"></i>{{ $bien->adresse }}
                                            </span>
                                        </div>
                                        <div class="px-4 pb-4 d-inline-block w-100">
                                            <div class="float-left text-capitalize">
                                                <i class="fa-solid fa-house text-primary mr-1"></i> type : {{ $bien->typebien->name }}
                                            </div>
                                            <div class="float-right">
                                                <i class="far fa-calendar-alt text-primary mr-1"></i> {{ $bien->datePublication->format('d-m-Y') }}
                                            </div>
                                        </div>
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
                                        <option value="all">Tous</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
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
@endsection
