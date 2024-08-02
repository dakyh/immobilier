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

</head>
<body>
  <header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">
            Holding Ahmad Loyal Business Invest <i class='bx bxs-home-alt-2'></i>
        </a>

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

        <!-- Theme change button -->
        <i class='bx bx-moon change-theme' id="theme-button" ></i>

        <a href="#subscribe" class="button nav__button">
            Mon espace
        </a>
    </nav>
</header>
<section class="home section" id="home">
  <div class="home__container container ">
      <div class="">
          <h1 class="home__title">
              Découvrez <br> nos différents propriétées
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
  <div style="margin-top: 30px" id="page-wrapper">
    <div class="row"> 
        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<div class="col-lg-8">
                        <div class="row">
						
							
									
                            <div class="col-md-6">
                                <div class="featured-thumb hover-zoomer mb-4">
                                    <div class="overlay-black overflow-hidden position-relative"> <img src="{{ asset('img/home.jpg') }}"  alt="pimage">
                                        
                                        <div class="sale bg-secondary text-white">A vendre</div>
                                        <div class="price text-primary text-capitalize">100 m2</span></div>
                                        
                                    </div>
                                    <div class="featured-thumb-data shadow-one">
                                        <div class="p-4">
                                            <h5 class="text-secondary hover-text-primary mb-2 text-capitalize"><a href="#">intitule</a></h5>
                                            <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-primary"></i>adresse </div>
                                        <div class="px-4 pb-4 d-inline-block w-100">
                                            <div class="float-left text-capitalize"><i class="fa-solid fa-house text-primary mr-1"></i> type : type</div>
                                            <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> date publication</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="featured-thumb hover-zoomer mb-4">
                                  <div class="overlay-black overflow-hidden position-relative"> <img src="{{ asset('img/home.jpg') }}"  alt="pimage">
                                      
                                      <div class="sale bg-secondary text-white">A vendre</div>
                                      <div class="price text-primary text-capitalize">100 m2</span></div>
                                      
                                  </div>
                                  <div class="featured-thumb-data shadow-one">
                                      <div class="p-4">
                                          <h5 class="text-secondary hover-text-primary mb-2 text-capitalize"><a href="#">intitule</a></h5>
                                          <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-primary"></i>adresse </div>
                                      <div class="px-4 pb-4 d-inline-block w-100">
                                          <div class="float-left text-capitalize"><i class="fa-solid fa-house text-primary mr-1"></i> type : type</div>
                                          <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> date publication</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="{{ asset('img/home.jpg') }}"  alt="pimage">
                                    
                                    <div class="sale bg-secondary text-white">A vendre</div>
                                    <div class="price text-primary text-capitalize">100 m2</span></div>
                                    
                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-primary mb-2 text-capitalize"><a href="#">intitule</a></h5>
                                        <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-primary"></i>adresse </div>
                                    <div class="px-4 pb-4 d-inline-block w-100">
                                        <div class="float-left text-capitalize"><i class="fa-solid fa-house text-primary mr-1"></i> type : type</div>
                                        <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> date publication</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                      

                        </div>
                    </div>
					
                    <div class="col-lg-4">
                        <div class="sidebar-widget">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Quels types de biens cherchez-vous?</h4>
						<form class="d-inline-block w-100" action="calc.php" method="post">
                            <label class="sr-only">types</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-search"></i></i></div>
                                </div>
                                <select class="form-control" name="types" id="">
                                    <option value="all">all</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <!-- <input type="text" class="form-control" name="month" placeholder="Duration Year"> -->
                            </div>
                            
                            <button type="submit" value="submit" name="calc" class="btn btn-primary mt-4">filtrer</button>
                        </form>
                        </div>
                        
                        
                    </div>
                    
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
</body>
</html>