@extends('layouts2.app')

@section('title', 'Info Gunung di JATENG')

@section('content')
<section class="hero w-120">
    <div class="hero__content">
        <div class="hero__text">
            <h1 class="hero__title">Informasi Gunung di Jawa Tengah</h1>
            <p class="hero__description">
                Dapatkan informasi lengkap mengenai gunung-gunung di Jawa Tengah - rute pendakian, pemandangan, dan tips terbaik untuk pendakian Anda!
            </p>
            <a href="{{ route('login') }}" class="btn btn__hero">Lihat Info Gunung</a>
        </div>
        <div class="hero__img">
            <img src="{{ asset('assets/img/hero.png') }}" alt="">
        </div>
    </div>
</section>

<section class="opportunities">
    <div class="opportunities__img">
        <img src="{{ asset('assets/img/leaf.png') }}" alt="">
    </div>
    <div class="opportunities__content w-105">
        <div class="opportunities__head">
            <h2 class="opportunities__title">Peluang Baru</h2>
            <p class="opportunities__description">Kami menyediakan informasi terbaru dan terlengkap tentang gunung-gunung di Jawa Tengah untuk membantu Anda merencanakan petualangan yang tak terlupakan.</p>
        </div>
        <div class="opportunities__body">
            <div class="opportunity">
                <img src="{{ asset('assets/img/opportunites/gunung slamet.jpg') }}" alt="Icon" class="opportunity__icon">
                <div class="opportunity__text">
                    <h3 class="opportunity__title">Gunung Slamet</h3>
                    <p class="opportunity__description">Gunung Slamet merupakan gunung tertinggi kedua di Pulau Jawa, dan tertinggi pertama di Jawa Tengah. Gunung Slamet memiliki ketinggian 3.432 mdpl. Lokasinya masuk ke dalam wilayah administrasi Kabupaten Brebes, Banyumas, Purbalingga, Tegal, dan Pemalang.
                    </p>
                </div>
            </div>
            <div class="opportunity">
                <img src="{{ asset('assets/img/opportunites/gunung merbabu.jpg') }}" alt="Icon" class="opportunity__icon">
                <div class="opportunity__text">
                    <h3 class="opportunity__title">Gunung Merbabu</h3>
                    <p class="opportunity__description">Gunung Merbabu memiliki ketinggian 3.145 mdpl. Lokasinya masuk ke dalam wilayah administrasi Kabupaten Magelang, Boyolali, dan Semarang.

                    </p>
                </div>
            </div>
            <div class="opportunity">
                <img src="{{ asset('assets/img/opportunites/gunung lawu.jpg') }}" alt="Icon" class="opportunity__icon">
                <div class="opportunity__text">
                    <h3 class="opportunity__title">Gunung Lawu</h3>
                    <p class="opportunity__description">Gunung Lawu memiliki ketinggian 3.265 mdpl. Lokasinya masuk ke dalam wilayah administrasi Kabupaten Karanganyar, Ngawi (Jawa Timur), dan Magetan (Jawa Timur).

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="invest w-105">
    <div class="invest__content">
        <div class="invest__head">
            <h2 class="invest__title">Gunung Favorit Pendaki</h2>
            <p class="invest__description">Berikut adalah beberapa gunung favorit yang sering dikunjungi oleh para pendaki di Jawa Tengah.</p>
        </div>
        <div class="invest__body">
            <div class="invest__item">
                <div class="invest__item__head">
                    <h5 class="invest__item__subtitle">FAVORITE</h5>
                </div>
                <div class="invest__item__body">
                    <h4 class="invest__item__title">Gunung Merapi</h4>
                    <p class="invest__item_description">
                        Gunung Merapi adalah salah satu gunung berapi aktif di Jawa Tengah. Terkenal dengan pemandangannya yang spektakuler dan tantangan pendakiannya.
                    </p>
                </div>
                <div class="invest__item__footer">
                    <a href="https://www.gearberg.com/gunung/info-gunung/1014/gunung-merapi" class="btn btn__invest">Explore Gunung Merapi</a>
                </div>
            </div>
            <div class="invest__item">
                <div class="invest__item__head">
                    <h5 class="invest__item__subtitle">POPULAR</h5>
                </div>
                <div class="invest__item__body">
                    <h4 class="invest__item__title">Gunung Lawu</h4>
                    <p class="invest__item_description">
                        Gunung Lawu menawarkan keindahan alam dan jalur pendakian yang menantang, sangat populer di kalangan pendaki pemula maupun berpengalaman.
                    </p>
                </div>
                <div class="invest__item__footer">
                    <a href="https://www.gearberg.com/gunung/info-gunung/1015/gunung-lawu" class="btn btn__invest">Discover Gunung Lawu</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-is-works w-120">
    <div class="works__content">
        <div class="works__head">
            <h2 class="works__title">Cerita Pendaki</h2>
            <p class="works__description">
                Cerita dan pengalaman mendaki gunung dari para pendaki yang telah menjelajahi keindahan alam di Jawa Tengah.
            </p>
        </div>
        <div class="works__body">
            <ul class="form_progressbar">
                <li class="progressbar__step active" data-step="1">01</li>
                <li class="progressbar__step" data-step="2">02</li>
                <li class="progressbar__step" data-step="3">03</li>
                <li class="progressbar__step" data-step="4">04</li>
            </ul>
        </div>
        <div class="works__footer">
            <div class="works__step__content first_step">
                <h3 class="works__step_title"> Pengalaman di Gunung Slamet</h3>
                <p class="works__step_description">
                    Mendaki Gunung Slamet memberikan tantangan tersendiri. Jalurnya terjal namun pemandangan dari puncak sangat menakjubkan, terutama saat matahari terbit.
                </p>
            </div>
            <div class="works__step__content">
                <h3 class="works__step_title">Keunikan Gunung Prau</h3>
                <p class="works__step_description">
                    Gunung Prau dikenal dengan pemandangan golden sunrise yang memukau. Jalurnya relatif mudah, cocok bagi pendaki pemula.
                </p>
            </div>
            <div class="works__step__content">
                <h3 class="works__step_title">Petualangan di Gunung Ungaran</h3>
                <p class="works__step_description">
                    Gunung Ungaran menawarkan trek yang menantang dengan pemandangan yang indah, sangat cocok untuk pendaki yang mencari tantangan.
                </p>
            </div>
            <div class="works__step__content">
                <h3 class="works__step_title">Pesona Gunung Sindoro</h3>
                <p class="works__step_description">
                    Gunung Sindoro menyajikan pemandangan yang memukau dengan jalur pendakian yang menantang namun sangat memuaskan.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="testimonials__content">
        <div class="testimonials__head w-105">
            <img src="{{ asset('assets/img/quote.svg') }}" alt="Quote" class="testimonials__quote">
            <h2 class="testimonials__title">Kisah Pendaki Jawa Tengah</h2>
        </div>
        <div class="testimonials__body">
            <div class="testimonials__list">
                <div class="testimonial">
                    <div class="testimonial__profile">
                        <div class="testimonial__img">
                            <img src="{{ asset('assets/img/testimonials/4.png') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial__info">
                            <h4 class="testimonial__name"> Budi Santoso</h4>
                            <h4 class="testimonial__title">Pendaki Pengalaman</h4>
                        </div>
                    </div>
                    <p class="testimonial__description">
                        “ Informasi dari situs ini sangat membantu dalam merencanakan pendakian saya di Gunung Merbabu. Terima kasih! “
                    </p>
                </div>
                <div class="testimonial">
                    <div class="testimonial__profile">
                        <div class="testimonial__img">
                            <img src="{{ asset('assets/img/testimonials/5.png') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial__info">
                            <h4 class="testimonial__name"> Siti Aisyah</h
                            </div>
                        </div>
                        <p class="testimonial__description">
                            “ Informasi yang saya dapatkan sangat lengkap dan membantu. Saya merasa lebih percaya diri untuk mendaki Gunung Lawu. “
                        </p>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial__profile">
                            <div class="testimonial__img">
                                <img src="{{ asset('assets/img/testimonials/6.png') }}" alt="Testimonial">
                            </div>
                            <div class="testimonial__info">
                                <h4 class="testimonial__name"> Rudi Hartono</h4>
                                <h4 class="testimonial__title">Pendaki Adventurer</h4>
                            </div>
                        </div>
                        <p class="testimonial__description">
                            “ Petualangan saya di Gunung Ungaran menjadi sangat berkesan berkat panduan dan tips yang saya dapatkan dari situs ini. “
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonials__footer w-105">
                <div class="testimonials__directions">
                    <button class="btn__testimonials btn__testimonials__prev disable">
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button class="btn__testimonials btn__testimonials__next">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    
    <section class="farm-invest w-105">
        <h2 class="farm-invest__title">Lakukan <span>SPK</span> untuk menentukan pendakian</h2>
        <a href="{{ route('login') }}" class="btn btn__farm--invest">Lakukan SPK</a>
    </section>
    
    @endsection