<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>HALBI</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                Holding Ahmad Loyal Business Invest <i class='bx bxs-home-alt-2'></i>
            </a>

            @guest
                <!-- Lien vers la page de connexion si l'utilisateur n'est pas connecté -->
                <a href="{{ route('login') }}" class="button nav__button">
                    Login
                </a>
            @endguest

            @auth
                <!-- Lien vers biens.index si l'utilisateur est connecté -->
                <a href="{{ route('biens.index') }}" class="button nav__button">
                    Mes biens
                </a>
            @endauth

            
            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class='bx bx-home-alt-2' ></i>
                            <span>Accueil</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#popular" class="nav__link">
                            <i class='bx bx-building-house' ></i>
                            <span>Résidences</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#value" class="nav__link">
                            <i class='bx bx-award' ></i>
                            <span>Services</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bx-phone' ></i>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

           

            
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Découvrez <br> la propriété la plus convenable
                    </h1>
                    <p class="home__description">
                        Trouvez très facilement une variété de propriétés qui vous conviennent, 
                        oublier toutes les difficultés à trouver une résidence pour vous.
                    </p>


                    <div class="home__value">
                        <div>
                            <h1 class="home__value-number">
                                9K <span>+</span>
                            </h1>
                            <span class="home__value-description">
                                biens <br> immobiliers
                            </span>
                        </div>
                        <div>
                            <h1 class="home__value-number">
                                2K <span>+</span>
                            </h1>
                            <span class="home__value-description">
                                Client <br> Satisfait
                            </span>
                        </div>
                        <div>
                            <h1 class="home__value-number">
                                28K <span>+</span>
                            </h1>
                            <span class="home__value-description">
                                services <br> d'accompagnements
                            </span>
                        </div>
                    </div>
                </div>

                <div class="home__images">
                    <div class="home__orbe"></div>

                    <div class="home__img">
                        <img src="{{ asset('img/home.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== LOGOS ====================-->
        <section class="logos section">
            <div class="logos__container container grid">
                <div class="logos__img">
                    <img src="{{ asset('img/logo1.png') }}" alt="">
                </div>
                <div class="logos__img">
                    <img src="{{ asset('img/logo2.png') }}" alt="">
                </div>
                <div class="logos__img">
                    <img src="{{ asset('img/logo3.png') }}" alt="">
                </div>
                <div class="logos__img">
                    <img src="{{ asset('img/logo4.png') }}" alt="">
                </div>
            </div>
        </section>

        <!--==================== POPULAR ====================-->
        <section class="section" id="popular">
            <div class="container">
                <span class="section__subtitle">Meilleur choix</span>
                <h2 class="section__title">
                    Résidences Populaires<span>.</span>
                </h2>
                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
                        @foreach($biens as $bien)
                            <article class="popular__card swiper-slide">
                                <div id="carousel-{{ $bien->id }}" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @if($bien->images->isNotEmpty())
                                            <div class="carousel-item active">
                                                <img src="{{ asset($bien->images->first()->url) }}" class="card-img-top fixed-size" alt="{{ $bien->intitule }}">
                                            </div>
                                        @endif
                                    </div>
                                    <!-- Carousel controls omitted since there will be only one image -->
                                </div>
                                
                                <div class="popular__data">
                                    <h2 class="popular__price">
                                        {{ number_format($bien->prix, 0, ',', ' ') }} <span>€</span>
                                    </h2>
                                    <h3 class="popular__title">
                                       [Ref = {{ $bien->reference }}]
                                    </h3>
                                    <p class="popular__description">
                                        {{ $bien->adresse }} <i class='bx bxs-map'></i>
                                    </p>
                                </div>
                            </article>
                        @endforeach
                    </div>
        
                    <div class="swiper-button-next">
                        <i class='bx bx-chevron-right'></i>
                    </div>
        
                    <div class="">
                        <a href="{{ route('biens.index') }}">voir plus...</a>
                    </div>
                    <div class="swiper-button-prev">
                        <i class='bx bx-chevron-left'></i>
                    </div>
                </div>
            </div>
        </section>
        
        
        

        <!--==================== VALUE ====================-->
        <section class="value section" id="value">
            <div class="value__container container grid">
                <div class="value__images">
                    <div class="value__orbe"></div>

                    <div class="value__img">
                        <img src="{{ asset('img/value.jpg') }}" alt="">
                    </div>
                </div>

                <div class="value__content">
                    <div class="value__data">
                        <span class="section__subtitle">Nos services</span>
                        <h2 class="section__title">
                            les différents types d'accompagnements que nous vous offrons<span>.</span>
                        </h2>
                        <p class="value__description">
                            Nous sommes toujours prêts à vous aider en vous fournissant le meilleur service possible. 
                        </p>
                    </div>

                    <div class="value__accordion">
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bxs-shield-x value__accordion-icon' ></i>
                                <h3 class="value__accordion-title">
                                    service1
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow' ></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    description
                                </p>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bxs-x-square value__accordion-icon' ></i>
                                <h3 class="value__accordion-title">
                                    service2
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow' ></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Le prix que nous vous proposons est le meilleur pour vous, 
                                    nous garantissons qu'il n'y aura pas de changement de prix sur votre 
                                    propriété en raison de divers coûts imprévus qui pourraient survenir.
                                </p>
                            </div>
                        </div>

                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class='bx bxs-bar-chart-square value__accordion-icon' ></i>
                                <h3 class="value__accordion-title">
                                    service3
                                </h3>
                                <div class="value__accordion-arrow">
                                    <i class='bx bxs-down-arrow' ></i>
                                </header>

                                <div class="value__accordion-content">
                                    <p class="value__accordion-description">
                                        Chaque jour, nous nous efforçons de rester très compétitifs sur le 
                                        marché en vous proposant les meilleures résidences aux meilleurs prix.
                                    </p>
                                </div>
                            </div>

                            <div class="value__accordion-item">
                                <header class="value__accordion-header">
                                    <i class='bx bxs-check-square value__accordion-icon' ></i>
                                    <h3 class="value__accordion-title">
                                        services4
                                    </h3>
                                    <div class="value__accordion-arrow">
                                        <i class='bx bxs-down-arrow ' ></i>
                                    </div>
                                </header>

                                <div class="value__accordion-content">
                                    <p class="value__accordion-description">
                                        Nous nous engageons à respecter les données de nos clients.
                                        Vos données sont chiffrés et stockées sur des serveurs français.
                                    </p>
                                </div>
                            </div>
                            <div class="value__accordion-item">
                                <header class="value__accordion-header">
                                    <a href="services">voir plus...</a>
                                    
                                </header>

                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
      </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section" id="contact">
                <div class="contact__container container grid">
                    <div class="contact__images">
                        <div class="contact__orbe"></div>

                        <div class="contact__img">
                            <img src="{{ asset('img/contact 2.png') }}" alt="">
                        </div>
                    </div>

                    <div class="contact__content">
                        <div class="contact__data">
                            <span class="section__subtitle">Contactez-nous</span>
                            <h2 class="section__title">
                                Facilité de contact <span>.</span>
                            </h2>
                            <p class="contact__description">
                                Vous avez des difficultés à trouver la maison de vos rêves ? Vous avez besoin d'un 
                                conseiller pour l'achat d'une première maison, ou d'une consultation 
                                sur des questions résidentielles ? <br> Contactez-nous.
                            </p>
                        </div>

                        <div class="contact__card">
                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class='bx bxs-phone-call'></i>
                        
                                    <div>
                                        <h3 class="contact__card-title">
                                            Appelez
                                        </h3>
                                        <p class="contact__card-description">
                                             77 637 45 49
                                        </p>
                                    </div>
                                </div>
                        
                                <a href="tel:+221776374549" class="button contact__card-button" style="text-align: center">
                                    Appelez <br> maintenant
                                </a>
                            </div>
                        
                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class='bx bxs-envelope'></i>
                        
                                    <div>
                                        <h3 class="contact__card-title">
                                            Message
                                        </h3>
                                        <p class="contact__card-description">
                                            Whatsapp
                                        </p>
                                    </div>
                                </div>
                        
                                <a href="https://wa.me/+221776374549" class="button contact__card-button" style="text-align: center">
                                    Envoyez <br> un message
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--==================== SUBSCRIBE ====================-->
            {{-- <section class="subscribe section" id="subscribe">
                <div class="subscribe__container container">
                    <h1 class="subscribe__title">
                        S'abonner à Holux Immobilier
                    </h1>
                    <p class="subscribe__description">
                        Abonnez-vous à notre newsletter et trouvez des prix super attractifs.
                        Trouvez votre résidence bientôt.
                    </p>
                    <a href="#" class="button subscribe__button">
                        S'abonner
                    </a>
                </div>
            </section> --}}
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="#" class="footer__logo">
                        Holding Ahmad Loyal Business Invest <i class='bx bxs-home-alt-2'></i>
                    </a>
                    <p class="footer__description">
                        Notre vision est de faire en sorte que tout le monde <br> 
                        puisse trouver le meilleur endroit où vivre.
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">
                            À propos
                        </h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Qui sommes-nous</a>
                            </li>

                            

                            <li>
                                <a href="#" class="footer__link">Conditions générales de ventes</a>
                            </li>

                            <li>
                                <a href="#" class="footer__link">Mentions légales</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">
                            Entreprise
                        </h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Nos agences</a>
                            </li>

                            <li>
                                <a href="#" class="footer__link">Nos partenaires</a>
                            </li>

                            <li>
                                <a href="#" class="footer__link">Nous rejoindre !</a>
                            </li>

                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">
                            Ressources
                        </h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Aide et FAQ</a>
                            </li>

                            <li>
                                <a href="#" class="footer__link">Information légales</a>
                            </li>

                            <li>
                                <a href="#" class="footer__link">Contact</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="footer__title">
                            Suivez-nous
                        </h3>

                        <ul class="footer__social">
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-facebook-circle' ></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="https://www.pinterest.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-pinterest' ></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; Holding Ahmad Loyal Business Invest.
->
        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>