<footer class="footer">
    <div class="footer__body w-105">
        <nav class="footer__nav">
            <ul class="footer_nav__menu">
                <li class="footer_nav__item">
                    <h4 class="footer_nav__menu__title">BERANDA</h4>
                </li>
                <li class="footer_nav__item">
                    <a href="#" class="footer_nav__link">About Us</a>
                </li>
                <li class="footer_nav__item">
                    <a href="#" class="footer_nav__link">Berita</a>
                </li>
                <li class="footer_nav__item">
                    <a href="#" class="footer_nav__link"></a>
                </li>
                <li class="footer_nav__item">
                    <a href="#" class="footer_nav__link"></a>
                </li>
            </ul>
            <ul class="footer_nav__menu">
                <li class="footer_nav__item">
                    <h4 class="footer_nav__menu__title">INFO GUNUNG</h4>
                </li>
                <li class="footer_nav__item">
                    <a href="{{ route('info-gunung') }}" class="footer_nav__link">Info Gunung</a>
                </li>
                <li class="footer_nav__item">
                    <a href="{{ route('login') }}" class="footer_nav__link">Login</a>
                </li>
                <li class="footer_nav__item">
                    <a href="#" class="footer_nav__link"></a>
                </li>
                <li class="footer_nav__item">
                    <a href="#" class="footer_nav__link"></a>
                </li>
            </ul>
            <ul class="footer_nav__menu">
                <li class="footer_nav__item">
                    <h4 class="footer_nav__menu__title">BERITA</h4>
                </li>
                <li class="footer_nav__item">
                    <a href="{{ route('berita') }}" class="footer_nav__link">Berita</a>
                </li>
                <li class="footer_nav__item">
                    <a href="#" class="footer_nav__link"></a>
                </li>
                <li class="footer_nav__item">
                    <a href="#" class="footer_nav__link"></a>
                </li>
            </ul>
        </nav>
        <div class="footer__contact">
            <h5 class="footer__contact__title">SPK WP</h5>
            <span>Write email to us</span>
            <a href="mailto:asihrahmawati008@gmail.com" class="email">asihrahmawati008@gmail.com</a>
            @guest
                <a href="{{ route('login') }}" class="btn btn__signin">
                    <i class="far fa-user"></i> Sign In
                </a>
            @else
                <a href="#" class="btn btn__signin">
                    <i class="far fa-user"></i> {{ Auth::user()->name }}
                </a>
            @endguest
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__bottom__content w-105">
            <div class="footer__logo">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
            </div>
            <p class="footer_copyright">
                © 2024. SPK WP (@asihrhmwti).
            </p>
        </div>
        <img src="{{ asset('assets/img/mountain.png') }}" alt="Mountain" class="footer_img">
    </div>
</footer>