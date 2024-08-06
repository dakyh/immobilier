@extends('layouts.app')


@section('content')

    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">


    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    {{-- css biens --}}
    <link rel="stylesheet" href="{{ asset('css/biens/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/biens/color.css') }}">
    <title>HALBI</title>

</head>
<body>
  <header class="header" id="header">
    <nav class="nav container">
        <a href="/" class="nav__logo">
            Holding Ahmad Loyal Business Invest <i class='bx bxs-home-alt-2'></i>
        </a>

        {{-- <div class="nav__menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="/#home" class="nav__link active-link">
                        <i class='bx bx-home-alt-2' ></i>
                        <span>Accueil</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="/#popular" class="nav__link">
                        <i class='bx bx-building-house' ></i>
                        <span>Résidences</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="/#value" class="nav__link">
                        <i class='bx bx-award' ></i>
                        <span>Services</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="/#contact" class="nav__link">
                        <i class='bx bx-phone' ></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div> --}}

        <!-- Theme change button -->
        <i class='bx bx-moon change-theme' id="theme-button" ></i>

        <a href="login" class="button nav__button">
            Mon espace
        </a>
    </nav>
</header>


<section class="home section" id="home">
  <div class="home__container container ">
      <div class="">
          <h1 class="home__title">

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
                                            <img src="{{ $bien->image ? asset('storage/' . $bien->image->url) : asset('img/home.jpg') }}" alt="pimage">
                                            <div class="sale bg-secondary text-white">À vendre</div>
                                            <div class="price text-primary text-capitalize">{{ $bien->surface }} m²</div>
                                        </div>
                                        <div class="featured-thumb-data shadow-one">
                                            <div class="p-4">
                                                <h5 class="text-secondary hover-text-primary mb-2 text-capitalize">
                                                    <a href="#">{{ $bien->intitule }}</a>
                                                </h5>
                                                <span class="location text-capitalize">
                                                    <i class="fas fa-map-marker-alt text-primary"></i>{{ $bien->adresse }}
                                                </span>
                                            </div>
                                            <div class="px-4 pb-4 d-inline-block w-100">
                                                <div class="float-left text-capitalize">
                                                    <i class="fa-solid fa-house text-primary mr-1"></i> Type : {{ $bien->typebien->nom }}
                                                </div>
                                                <div class="float-right">
                                                    <i class="far fa-calendar-alt text-primary mr-1"></i> {{ $bien->datePublication->format('d-m-Y') }}
                                                </div>
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
                                            <option value="{{ $type->id }}">{{ $type->nom }}</option>
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
