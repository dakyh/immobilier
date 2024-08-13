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
        
        <a href="#subscribe" class="button nav__button">
            Mon espace
        </a>
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
                    <a href="{{ route('images.index') }}" class="nav__link">
                        <i class='bx bx-image'></i>
                        <span>Images</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Theme change button -->
        <i class='bx bx-moon change-theme' id="theme-button"></i>
    </nav>
</header>
