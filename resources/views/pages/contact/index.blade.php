@extends('layouts.app')
@section('content')
@section('title', 'Kontak')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__option">
                    <a href="./index.html"><span class="fa fa-home"></span> Beranda</a>
                    <span>Kontak</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Section Begin -->
<section class="contact-section spad" style="margin-bottom: 100px">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact__text">
                    <h3>Informasi Kontak</h3>
                    <p>Tetap terhubung dengan Jakarta Experience Board untuk memenuhi semua kebutuhan solusi TI
                        Anda!<br>
                        <strong>#ITsolutions</strong>
                        <strong>#JakartaExperienceBoard</strong>
                    </p>
                    <ul>
                        <li>
                            <span class="fa fa-map-marker"></span>
                            <h5>Alamat</h5>
                            <p>Plaza Arcici, Jl. Letjen Suprapto No.62 RT.8/RW.3, Cemp. Putih Bar., Kec. Cemp. Putih
                                Kota Jakarta Pusat, 10520 Daerah Khusus Ibukota Jakarta</p>
                        </li>
                        <li>
                            <span class="fa fa-mobile"></span>
                            <h5>Telepon</h5>
                            <p>+62 818 301 075</p>
                        </li>
                        <li>
                            <span class="fa fa-envelope"></span>
                            <h5>Email</h5>
                            <p>hello@jxboard.com</p>
                        </li>
                    </ul>
                    <div class="contact__social">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6879315245556!2d106.86048947369929!3d-6.172520960484526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38724d9009d%3A0x822af3c7e43329b6!2sJakarta%20Experience%20Board%20(JXB)!5e0!3m2!1sen!2sid!4v1735869289596!5m2!1sen!2sid"
                        height="515" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection
