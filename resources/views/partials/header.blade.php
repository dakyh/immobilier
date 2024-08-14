<header class="header" id="header">
    <style>
        .header {
            margin-bottom: 40px; /* Adjust the value as needed */
        }
    </style>
    
    <nav class="nav container">
        <a href="{{ route('home') }}" class="nav__logo">
            Holding Ahmad Loyal Business Invest <i class='bx bxs-home-alt-2'></i>
        </a>

        @auth
    
        <div class="nav__menu">
            <ul class="nav__list">

                <li class="nav__item">
                    <a href="{{ route('biens.gestion') }}" class="nav__link active-link">
                        <i class='bx bx-home-alt-2'></i>
                        <span>Gestion des Biens</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('typebiens.index') }}" class="nav__link">
                        <i class='bx bx-building-house'></i>
                        <span>Types de Biens</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('accompagnements.index') }}" class="nav__link">
                        <i class='bx bx-award'></i>
                        <span>Accompagnements</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('typeacs.index') }}" class="nav__link">
                        <i class='bx bx-phone'></i>
                        <span>Types d'Accompagnements</span>
                    </a>
                </li>

                <li class="nav__item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="button nav__button">Déconnexion</button>
                    </form>
                </li>
            </ul>
        </div>
        @endauth

        @guest

        <a href="{{ route('login') }}" class="button nav__button">
            Mon espace
        </a>
        
        <div class="nav__menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">
                        <i class='bx bx-home-alt-2'></i>
                        <span>Accueil</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="#popular" class="nav__link">
                        <i class='bx bx-building-house'></i>
                        <span>Résidences</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="#value" class="nav__link">
                        <i class='bx bx-award'></i>
                        <span>Services</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="#contact" class="nav__link">
                        <i class='bx bx-phone'></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>

      
        @endguest

    </nav>
</header>
