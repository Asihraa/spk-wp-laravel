@extends('layouts2.app')

@section('title', 'SPK Gunung di JATENG')

@section('content')
<section class="hero w-120">
    <div class="hero__content">
        <div class="hero__text">
            <h1 class="hero__title">Sistem Pendukung Keputusan untuk Menentukan Pendakian Gunung Terbaik di Jawa Tengah</h1>
            <p class="hero__description">
                Temukan Keindahan Alam Jawa Tengah di Setiap Langkah Pendakianmu - Pelajari, Nikmati, dan Rasakan Petualangan yang Tidak Terlupakan!
            </p>
            <a href="{{ route('login') }}" class="btn btn__hero">Lakukan SPK</a>
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
            <h2 class="opportunities__title">Kesempatan Baru</h2>
            <p class="opportunities__description">Kami adalah sistem pendukung keputusan terbaik di Jawa Tengah yang membantu Anda merencanakan pendakian gunung dengan aman dan cerdas.</p>
        </div>
        <div class="opportunities__body">
            <div class="opportunity">
                <img src="{{ asset('assets/img/opportunites/opportunity-1.svg') }}" alt="Icon" class="opportunity__icon">
                <div class="opportunity__text">
                    <h3 class="opportunity__title">Fitur Pendakian</h3>
                    <p class="opportunity__description">Kami menyediakan fitur lengkap untuk memudahkan perencanaan pendakian Anda.</p>
                </div>
            </div>
            <div class="opportunity">
                <img src="{{ asset('assets/img/opportunites/opportunity-2.svg') }}" alt="Icon" class="opportunity__icon">
                <div class="opportunity__text">
                    <h3 class="opportunity__title">Keamanan Terjamin</h3>
                    <p class="opportunity__description">Keamanan Anda adalah prioritas kami dalam setiap pendakian yang Anda lakukan.</p>
                </div>
            </div>
            <div class="opportunity">
                <img src="{{ asset('assets/img/opportunites/opportunity-3.svg') }}" alt="Icon" class="opportunity__icon">
                <div class="opportunity__text">
                    <h3 class="opportunity__title">Panduan Ahli</h3>
                    <p class="opportunity__description">Dapatkan panduan dari para ahli untuk membuat pendakian Anda lebih aman dan menyenangkan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="invest  w-105">
    <div class="invest__content">
        <div class="invest__head">
            <h2 class="invest__title">Mendaki kemana hari ini?</h2>
            <p class="invest__description">Bingung harus mendaki kemana?? mungkin kalian perlu mencari referensi terkait gunung yang akan di daki terlebih dahulu</p>
        </div>
        <div class="invest__body">
            <div class="invest__item">
                <div class="invest__item__head">
                    <h5 class="invest__item__subtitle">TODAY</h5>
                </div>
                <div class="invest__item__body">
                    <h4 class="invest__item__title">Gunung Andong</h4>
                    <p class="invest__item_description">
                        Gunung Andong adalah sebuah gunung di Kabupaten Magelang, Jawa Tengah.
                    </p>
                </div>
                <div class="invest__item__footer">
                    <a href="https://www.gearberg.com/gunung/info-gunung/1012/gunung-andong" class="btn btn__invest">Browse Gunung Andong</a>
                </div>
            </div>
            <div class="invest__item">
                <div class="invest__item__head">
                    <h5 class="invest__item__subtitle">YESTERDAY</h5>
                </div>
                <div class="invest__item__body">
                    <h4 class="invest__item__title">Gunung Sumbing
                    </h4>
                    <p class="invest__item_description">
                        Gunung Sumbing adalah gunung api yang terdapat di Jawa Tengah, Indonesia. (Ketinggian puncak 3.371 mdpl), gunung Sumbing merupakan gunung tertinggi ketiga di Pulau Jawa setelah Gunung Semeru dan Gunung Slamet.
                    </p>
                </div>
                <div class="invest__item__footer">
                    <a href="https://www.gearberg.com/gunung/info-gunung/1013/gunung-sumbing" class="btn btn__invest">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-is-works w-120">
    <div class="works__content">
        <div class="works__head">
            <h2 class="works__title">Kata-kata hari ini dari Pendaki Senior</h2>
            <p class="works__description">
                Berikut adalah pengalaman dan kata-kata dari para pendaki yang telah menikmati keindahan dan tantangan mendaki gunung.
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
                <h3 class="works__step_title"> Pengalaman Mendaki Gunung Merbabu</h3>
                <p class="works__step_description">
                    Mendaki Gunung Merbabu adalah pengalaman yang luar biasa. Pemandangan dari puncaknya sangat indah, terutama saat matahari terbit. Jalurnya menantang namun sangat memuaskan.
                </p>
            </div>
            <div class="works__step__content">
                <h3 class="works__step_title"> Keindahan Gunung Sindoro</h3>
                <p class="works__step_description">
                    Gunung Sindoro menawarkan keindahan alam yang mempesona. Jalur pendakiannya cukup menantang, namun setibanya di puncak, semua usaha terasa terbayar dengan pemandangan yang spektakuler.
                </p>
            </div>
            <div class="works__step__content">
                <h3 class="works__step_title">Petualangan di Gunung Sumbing</h3>
                <p class="works__step_description">
                    Gunung Sumbing memberikan pengalaman mendaki yang penuh tantangan. Trek yang terjal dan panjang, namun pemandangan dari puncaknya sangat menakjubkan dan memberikan kepuasan tersendiri.
                </p>
            </div>
            <div class="works__step__content">
                <h3 class="works__step_title"> Keajaiban Gunung Andong</h3>
                <p class="works__step_description">
                    Gunung Andong adalah gunung yang lebih kecil namun tetap menawarkan pemandangan yang indah. Cocok bagi pendaki pemula yang ingin merasakan keindahan alam Jawa Tengah tanpa terlalu banyak tantangan.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="testimonials__content">
        <div class="testimonials__head w-105">
            <img src="{{ asset('assets/img/quote.svg') }}" alt="Quote" class="testimonials__quote">
            <h2 class="testimonials__title">Ingin merasakan serunya berpetualang dan berkemah di pegunungan Jawa Tengah??</h2>
        </div>
        <div class="testimonials__body">
            <div class="testimonials__list">
                <div class="testimonial">
                    <div class="testimonial__profile">
                        <div class="testimonial__img">
                            <img src="{{ asset('assets/img/testimonials/1.png') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial__info">
                            <h4 class="testimonial__name"> Jefri Nichol</h4>
                            <h4 class="testimonial__title">Pendaki Pemula</h4>
                        </div>
                    </div>
                    <p class="testimonial__description">
                        “ Pendakian saya menjadi lebih mudah dan terencana dengan menggunakan SPK Gunung. Terima kasih! “
                    </p>
                </div>
                <div class="testimonial">
                    <div class="testimonial__profile">
                        <div class="testimonial__img">
                            <img src="{{ asset('assets/img/testimonials/2.png') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial__info">
                            <h4 class="testimonial__name"> Ayu Ting-Ting</h4>
                            <h4 class="testimonial__title">Pendaki Senior</h4>
                        </div>
                    </div>
                    <p class="testimonial__description">
                        “ Keamanan dan kenyamanan adalah hal yang utama bagi saya, dan SPK Gunung memberikan semua itu. “
                    </p>
                </div>
                <div class="testimonial">
                    <div class="testimonial__profile">
                        <div class="testimonial__img">
                            <img src="{{ asset('assets/img/testimonials/3.png') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial__info">
                            <h4 class="testimonial__name"> Angga Yunanda</h4>
                            <h4 class="testimonial__title">Pendaki Fomo</h4>
                        </div>
                    </div>
                    <p class="testimonial__description">
                        “ Dengan panduan dari SPK Gunung, saya dapat menikmati setiap langkah pendakian saya dengan tenang. “
                    </p>
                </div>
                <div class="testimonial">
                    <div class="testimonial__profile">
                        <div class="testimonial__img">
                            <img src="{{ asset('assets/img/testimonials/1.png') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial__info">
                            <h4 class="testimonial__name"> Jefri Nichol</h4>
                            <h4 class="testimonial__title">Pendaki Pemula</h4>
                        </div>
                    </div>
                    <p class="testimonial__description">
                        “ Pendakian saya menjadi lebih mudah dan terencana dengan menggunakan SPK Gunung. Terima kasih! “
                    </p>
                </div>
                <div class="testimonial">
                    <div class="testimonial__profile">
                        <div class="testimonial__img">
                            <img src="{{ asset('assets/img/testimonials/2.png') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial__info">
                            <h4 class="testimonial__name"> Ayu Ting-Ting</h4>
                            <h4 class="testimonial__title">Pendaki Senior</h4>
                        </div>
                    </div>
                    <p class="testimonial__description">
                        “ Keamanan dan kenyamanan adalah hal yang utama bagi saya, dan SPK Gunung memberikan semua itu. “
                    </p>
                </div>
                <div class="testimonial">
                    <div class="testimonial__profile">
                        <div class="testimonial__img">
                            <img src="{{ asset('assets/img/testimonials/3.png') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial__info">
                            <h4 class="testimonial__name"> Angga Yunanda</h4>
                            <h4 class="testimonial__title">Pendaki Fomo</h4>
                        </div>
                    </div>
                    <p class="testimonial__description">
                        “ Dengan panduan dari SPK Gunung, saya dapat menikmati setiap langkah pendakian saya dengan tenang. “
                    </p>
                </div>
            </div>
        </div>
        <div class="testimonials__footer  w-105">
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
