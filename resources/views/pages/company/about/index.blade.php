@extends('layouts.app')
@section('content')
@section('title', 'Tentang Kami')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-section ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__option">
                    <a href="./index.html"><span class="fa fa-home"></span> Beranda</a>
                    <span>Tentang Kami</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- About Section Begin -->
<section class="about-section spad">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__img">
                    <img src="{{ asset('assets/img/hero/headline.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__text">
                    <h2>Selamat Datang di Layanan TI Kami</h2>
                    <p>Sebagai perusahaan terkemuka di Jakarta, Jakarta Experience Board memperluas layanannya dengan
                        menghadirkan rangkaian lengkap solusi TI. Tim TI kami yang berpengalaman berkomitmen untuk
                        memberikan solusi TI inovatif dan disesuaikan dengan kebutuhan Anda, yang mendorong efisiensi
                        dan pertumbuhan bisnis. Baik Anda perlu mengembangkan aplikasi perangkat lunak baru,
                        meningkatkan infrastruktur TI yang ada, atau meningkatkan keamanan siber Anda, kami memiliki
                        keahlian untuk membantu.</p>
                    <a href="https://wa.link/x05vgu" class="primary-btn">Ayo Mulai Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Feature Section Begin -->
<section class="feature-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Inovasi dalam Genggaman Tangan Anda</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="feature__item">
                    <span class="fa fa-cloud"></span>
                    <h5>Berbasis Cloud</h5>
                    <p>Kembangkan bisnis Anda dengan mudah menggunakan solusi berbasis cloud kami. Bayar
                        hanya untuk apa yang Anda gunakan dan nikmati skalabilitas tanpa batas serta
                        operasional yang lancar.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="feature__item">
                    <span class="fa fa-server"></span>
                    <h5>Jasa Pengelolaan</h5>
                    <p>Sederhanakan infrastruktur TI Anda dengan solusi server terkelola kami. Biarkan kami
                        menangani kompleksitasnya sementara Anda fokus pada pertumbuhan bisnis Anda. </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="feature__item">
                    <span class="fa fa-clock-o"></span>
                    <h5>Akses Secara Langsung</h5>
                    <p>Pengalaman akses secara langsung ke layanan TI komprehensif kami. Tim khusus kami tersedia
                        24/7 untuk memberikan bantuan dan dukungan yang cepat dan tepat. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<section class="feature-section spad" style="background: white; padding:30px 0 30px 0 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Projek Kami</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('assets/img/IT-1.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/IT-2.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/IT-3.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/IT-4.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/IT-5.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/HRIS-1.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/HRIS-2.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/FNC-4.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/FNC-1.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/CRM-1.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/CRM-2.png') }}" alt=""></div>

                </div>
                <div class="swiper-pagination"></div>
                <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
