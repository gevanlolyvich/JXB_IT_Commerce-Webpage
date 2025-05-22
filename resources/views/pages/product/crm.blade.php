@extends('layouts.app')
@section('content')
@section('title', 'Customer Relationship Management')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__option">
                    <a href="./index.html"><span class="fa fa-home"></span>Beranda</a>
                    <span>Customer Relationship Management</span>
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
                    <div class="label" style="background: #bb2e1b">Produk</div>
                    <h2 style="font-weight: bold">Customer Relationship <br>
                        Management
                    </h2>
                    <ul>
                        <li>DIGIPRO by Jakarta Experience Board</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="blog__hero__pic set-bg" data-setbg="{{ asset('assets/img/services/CRM-BANNER.jpg') }}"></div>
</section>
<!-- Blog Hero Section End -->

<!-- Blog Details Section Begin -->
<section class="blog-details-section spad" style="padding: 60px 0">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="blog__details__text">
                    <div class="blog__details__profile"
                        style="background: #bb2e1b; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:10px; margin:0">
                        <div class="blog__details__profile__text">
                            <p style="font-size: 20px; color:white">Revolusikan bisnis Anda dengan solusi CRM mutakhir
                                kami. Optimalkan upaya penjualan dan pemasaran Anda, tingkatkan kepuasan pelanggan, dan
                                dorong pertumbuhan bisnis Anda. Platform intuitif kami menyentralkan semua data
                                pelanggan Anda, memungkinkan Anda memperoleh wawasan berharga tentang perilaku dan
                                preferensi mereka. Otomatiskan tugas-tugas berulang, lacak kesepakatan dari prospek
                                hingga penutupan, dan personalisasikan interaksi pelanggan Anda.</p>
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
                <hr style="border: 5px solid #bb2e1b; border-radius:10px; opacity:1; width:10%; margin-bottom: 20px"
                    class="mx-auto">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="feature__item">
                    <span class="fa fa-cloud" style="color: #bb2e1b"></span>
                    <h5>Berbasis Cloud</h5>
                    <p>Kembangkan bisnis Anda dengan mudah menggunakan solusi berbasis cloud kami. Bayar
                        hanya untuk apa yang Anda gunakan dan nikmati skalabilitas tanpa batas serta
                        operasional yang lancar.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="feature__item">
                    <span class="fa fa-server" style="color: #bb2e1b"></span>
                    <h5>Jasa Pengelolaan</h5>
                    <p>Sederhanakan infrastruktur TI Anda dengan solusi server terkelola kami. Biarkan kami
                        menangani kompleksitasnya sementara Anda fokus pada pertumbuhan bisnis Anda. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="feature__item">
                    <span class="fa fa-clock-o" style="color: #bb2e1b"></span>
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
                <div class="swiper-slide"><img src="{{ asset('assets/img/CRM-1.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/img/CRM-2.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/img/CRM-3.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/img/CRM-4.png') }}" alt=""></div>

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
                                                    style="padding: 20px; background: #bb2e1b">
                                                    <span style="color: white">Kami Menyediakan Fitur - Fitur
                                                        Terbaik</span>
                                                    <div class="chose__title" style="color: white">Fitur - Fitur
                                                        Customer Relationship
                                                        Management
                                                    </div>
                                                </div>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hosting__feature--item">Customer Database</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Manajemen Kemitraan</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Manajemen Customer</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Customer Service berbasis WhatssApp
                                                Business</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Bot Informatif WhatssApp
                                                Business</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Room Charting dan Booking</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Broadcast Pesan WhatssApp Business</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Product Database</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Manajemen Sales & Marketing </td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Sales Forecast</td>
                                            <td class="hosting__feature--check">
                                                <span class="fa fa-check-circle-o"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="hosting__feature--item">Backup & Restore Data</td>
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
