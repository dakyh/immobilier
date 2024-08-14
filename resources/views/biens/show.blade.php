<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <link rel="stylesheet" href="{{ asset('css/biens/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/biens/layerslider.css') }}">
    <title>HALBI</title>

</head>
<body>
  <header class="header" id="header">
    <nav class="nav container">
        <a href="/" class="nav__logo">
            Holding Ahmad Loyal Business Invest <i class='bx bxs-home-alt-2'></i>
        </a>

        

        <!-- Theme change button -->
        <i class='bx bx-moon change-theme' id="theme-button" ></i>

        <a href="{{ route('welcome') }}" class="button nav__button">
            Accueil
        </a>
    </nav>
</header>

<section class="home section" id="home">
  <div class="home__container container ">
      <div class="">
          <h1 class="home__title">
            Parcourez <br> notre sélection de propriétés
          </h1>
          


          
      </div>

      {{-- <div class="home__images">
          <div class="home__orbe"></div>

          <div class="home__img">
              <img src="{{ asset('img/home.jpg') }}" alt="">
          </div>
      </div> --}}
  </div>
</section>

<div class="full-row">
    <div class="container">
        <div class="row">
        
            
          
            <div class="col-lg-8">

                <div class="row">
                    <div class="col-md-12">
                        <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                            <!-- Slide 1-->
                            @foreach($bien->images as $image)
                            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="{{ asset($image->url) }}" class="ls-bg" alt="" /> </div>
                            @endforeach
                            
                            {{-- <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="{{ asset('img/home.jpg') }}" class="ls-bg" alt="" /> </div>
                            
                            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="{{ asset('img/home.jpg') }}" class="ls-bg" alt="" /> </div>
                            
                            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="{{ asset('img/home.jpg') }}" class="ls-bg" alt="" /> </div>
                            
                            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="{{ asset('img/home.jpg') }}" class="ls-bg" alt="" /> </div> --}}
                        
                        </div>
                    </div>
                </div>
                <div class="row mb-4" >
                    <div class="col-md-6">
                        <div class="bg-primary d-table px-3 py-2 rounded text-white text-capitalize">A vendre </div>
                        <h5 class="mt-2 text-secondary text-capitalize">{{ $bien->intitule }} </h5>
                        <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-primary font-12"></i> &nbsp;{{ $bien->adresse }}</span>
                    </div>
                    <div class="col-md-6" style="text-align: end;" >
                        <div class="text-primary text-left h5 my-2 text-md-right">{{ number_format($bien->prix, 0, ',', ' ') }} CFA
                        </div>
                        <div class="text-left text-md-right">référence: {{ $bien->reference }}</div>
                    </div>
                </div>
                <div class="property-details">
                    <div class="bg-gray property-quantity px-4 pt-4 w-100">
                        <ul>
                            
                            {{-- si appartements --}}
                            <li><span class="text-secondary"> {{ $bien->nombreDePieces==null?'N/R':$bien->nombreDePieces  }} </span> nombre de pieces</li>
                            <li><span class="text-secondary"> {{ $bien->nombreDeChambres==null?'N/R':$bien->nombreDeChambres  }} </span> nombre de chambres</li>
                            <li><span class="text-secondary"> {{ $bien->nombreDeSallesDeBain==null?'N/R':$bien->nombreDeSallesDeBain  }} </span> nombre de salles de Bains</li>
                            {{-- si terrain --}}
                            <li><span class="text-secondary"> {{ $bien->cloture==null?'N/R':$bien->cloture  }} </span> clôturé</li>
                            {{-- si immeuble --}}
                            <li><span class="text-secondary"> {{ $bien->nombreDAppartements==null?'N/R':$bien->nombreDAppartements  }} </span> nombre d'appartements</li>

                        </ul>
                    </div>
                    <h4 class="text-secondary my-4">Description</h4>
                    <p>{{ $bien->description }}</p>
                    
                    <h5 class="mt-5 mb-4 text-secondary">Résumé de la propriétée</h5>
                    <div  class="table-striped font-14 pb-2">
                        <table class="w-100">
                            <tbody>
                                <tr>
                                    
                                    <td>Type Propriétée :</td>
                                    <td class="text-capitalize">{{ $bien->typebien->name }}</td>
                                </tr>
                                <tr>
                                    
                                    <td>Surface :</td>
                                    <td class="text-capitalize">{{ $bien->surface }}m²</td>
                                </tr>
                                <tr>
                                    
                                    <td>État :</td>
                                    <td class="text-capitalize">{{ $bien->etat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    {{-- <h5 class="mt-5 mb-4 text-secondary">Floor Plans</h5>
                    <div class="accordion" id="accordionExample">
                        <button class="bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Floor Plans </button>
                        <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <img src="{{ asset('img/home.jpg') }}" alt="Not Available"> </div>
                        <button class="bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Basement Floor</button>
                        <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <img src="{{ asset('img/home.jpg') }}" alt="Not Available"> </div>
                        <button class="bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Ground Floor</button>
                        <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <img src="{{ asset('img/home.jpg') }}" alt="Not Available"> </div>
                    </div> --}}

                    {{-- <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contact Agent</h5> --}}

                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget mt-5">
                    <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recent Property Add</h4>
                    <ul class="property_list_widget">
                    
                        
                        <li> <img src="{{ asset('img/home.jpg') }}" alt="pimage">
                            <h6 class="text-secondary hover-text-primary text-capitalize"><a href="#">dfghjkl</a></h6>
                            <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> kk</span>
                            
                        </li>

                    </ul>
                </div>
            </div>
            
            
        </div>
    </div>
</div>


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
      </span>

      <div class="footer__privacy">
          <a href="#">Conditions et accords</a>
          <a href="#">Politique de confidentialité</a>
      </div>
  </div>

</footer>

<!--========== SCROLL UP ==========-->
<a href="#" class="scrollup" id="scroll-up">
  <i class='bx bx-chevrons-up'></i>
</a>

<!--=============== SCROLLREVEAL ===============-->
<script src="{{ asset('js/scrollreveal.min.js') }}"></script>

<!--=============== SWIPER JS ===============-->
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

<!--=============== MAIN JS ===============-->
<script src="{{ asset('js/main.js') }}"></script>

<script src="{{ asset('js/biens/jquery.min.js')}} "></script> 
<script src="{{ asset('js/biens/greensock.js')}} "></script> 
<script src="{{ asset('js/biens/layerslider.transitions.js')}} "></script> 
<script src="{{ asset('js/biens/layerslider.kreaturamedia.jquery.js')}} "></script> 
<script src="{{ asset('js/biens/popper.min.js')}} "></script> 
 <script src="{{ asset('js/biens/bootstrap.min.js')}} "></script> 
<script src="{{ asset('js/biens/owl.carousel.min.js')}} "></script> 
<script src="{{ asset('js/biens/tmpl.js')}} "></script> 
<script src="{{ asset('js/biens/jquery.dependClass-0.1.js')}} "></script> 
<script src="{{ asset('js/biens/draggable-0.1.js')}} "></script> 
<script src="{{ asset('js/biens/jquery.slider.js')}} "></script> 
 <script src="{{ asset('js/biens/wow.js')}} "></script> 
<script src="{{ asset('js/biens/custom.js')}} "></script>  

</body>
</html>
