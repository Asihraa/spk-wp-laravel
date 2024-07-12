<header>
    <nav class="header__nav w-120">
        <div class="header__logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
        </div>
        <div class="header__nav__content">
            <div class="nav-close-icon"></div>
            <ul class="header__menu">
                <li class="menu__item">
                    <a href="{{ url('/') }}" class="menu__link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                </li>
                <li class="menu__item">
                    <a href="{{ route('info-gunung') }}" class="menu__link {{ request()->is('info-gunung') ? 'active' : '' }}">Info Gunung</a>
                </li>
                <li class="menu__item">
                    <a href="{{ route('berita') }}" class="menu__link {{ request()->is('berita') ? 'active' : '' }}">Berita</a>
                </li>
            </ul>
            <div class="header__signup">
                @guest
                    <a href="{{ route('login') }}" class="btn btn__signup">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn__signup">
                        <i class="fas fa-user-plus"></i> Sign Up
                    </a>
                @else
                    <a href="#" class="btn btn__signup">
                        <i class="fas fa-user"></i> {{ Auth::user()->name }}
                    </a>
                @endguest
            </div>
        </div>
        <div class="hamburger-menu-wrap">
            <div class="hamburger-menu">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </nav>
</header>
