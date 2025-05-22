@extends('layouts.app')
@section('content')
@section('title', 'Integrated FInancial Monitoring Dashboard')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__option">
                    <a href="./index.html"><span class="fa fa-home"></span> Beranda</a>
                    <span>Integrated FInancial Monitoring Dashboard</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Hero Section Begin -->
<section class="blog-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="blog__hero__text">
                    <div class="label" style="background: #f0a211">Produk</div>
                    <h2 style="font-weight: bold">Integrated FInancial <br>
                        Monitoring Dashboard
                    </h2>
                    <ul>
                        <li>DIGIPRO by Jakarta Experience Board</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="blog__hero__pic set-bg" data-setbg="{{ asset('assets/img/services/FINANCE-BANNER.jpg') }}"></div>
</section>
<!-- Blog Hero Section End -->

<!-- Blog Details Section Begin -->
<section class="blog-details-section spad" style="padding: 60px 0">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="blog__details__text">
                    <div class="blog__details__profile"
                        style="background: #f0a211; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:10px; margin:0">
                        <div class="blog__details__profile__text">
                            <p style="font-size: 20px; color:white">Kendalikan keuangan Anda dengan dasbor keuangan kami
                                yang kuat. Platform intuitif kami memberikan wawasan secara real-time tentang kesehatan
                                keuangan Anda. Lacak metrik utama, identifikasi tren, dan buat keputusan berdasarkan
                                data dengan mudah. Dari penganggaran hingga peramalan, dasbor kami memberdayakan Anda
                                untuk mengoptimalkan kinerja keuangan dan mencapai tujuan Anda.</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
<!-- Feature Section Begin -->
<section class="feature-section spad" style="background: white; padding:30px 0 30px 0 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-titles">
                    <h3> Teknologi Kami</h3>
                </div>
                <hr style="border: 5px solid #f0a211; border-radius:10px; opacity:1; width:10%; margin-bottom: 20px"
                    class="mx-auto">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="feature__item">
                    <span class="fa fa-cloud" style="color: #f0a211"></span>
                    <h5>Berbasis Cloud</h5>
                    <p>Kembangkan bisnis Anda dengan mudah menggunakan solusi berbasis cloud kami. Bayar
                        hanya untuk apa yang Anda gunakan dan nikmati skalabilitas tanpa batas serta
                        operasional yang lancar.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="feature__item">
                    <span class="fa fa-server" style="color: #f0a211"></span>
                    <h5>Jasa Pengelolaan</h5>
                    <p>Sederhanakan infrastruktur TI Anda dengan solusi server terkelola kami. Biarkan kami
                        menangani kompleksitasnya sementara Anda fokus pada pertumbuhan bisnis Anda. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="feature__item">
                    <span class="fa fa-clock-o" style="color: #f0a211"></span>
                    <h5>Akses Secara Langsung</h5>
                    <p>Pengalaman akses secara langsung ke layanan TI komprehensif kami. Tim khusus kami tersedia
                        24/7 untuk memberikan bantuan dan dukungan yang cepat dan tepat. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('assets/img/FNC-4.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/img/FNC-1.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/img/FNC-2.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/img/FNC-3.png') }}" alt=""></div>
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
</section>
<!-- Services Section End -->

<!-- Hosting Section Begin -->
<section class="hosting-section spad" style="padding:30px 0 60px 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="hosting__text">

                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="hosting__feature__table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="2">
                                                <div class="hosting__feature__plan--choose"
                                                    style="padding: 20px; background: #f0a211">
                                                    <span style="color: white">Kami Menyediakan Fitur - Fitur
                                                        Terbaik</span>
                                                    <div class="chose__title" style="color: white">Integrated FInancial
                                                        Monitoring Dashboard
                                                    </div>
                                                </div>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hosting__feature--item">Visualisasi Data Secara Langsung</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Integrasi Laporan Keuangan dengan
                                                Dashboard</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Dashboard Kustom</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Pelacakan Pengeluaran</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Analisis Pendapatan</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Pelaporan Keuangan</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item"> Integrasi Dengan Sistem Lain</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Cocok untuk Bisnis yang Memiliki Banyak
                                                Unit Usaha untuk Konsolidasi Data</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Kustomisasi Fitur</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Dukungan Teknis</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Pembelian Satu Kali / Berlangganan</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hosting Section End -->
@endsection
