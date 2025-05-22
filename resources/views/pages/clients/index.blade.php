@extends('layouts.app')
@section('content')
@section('title', 'Klien Kami')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__option">
                    <a href="./index.html"><span class="fa fa-home"></span> Beranda</a>
                    <span>Klien Kami</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<!-- Feature Section Begin -->
<section class="about-section spad">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Klien Kami</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                <div class="feature__item" style="box-shadow:none">
                    <img src="{{ asset('assets/img/clients/tavia.png') }}" alt="" style="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                <div class="feature__item" style="padding: 45px 35px 50px 35px; box-shadow: none">
                    <img src="{{ asset('assets/img/clients/gcr.png') }}" alt="">

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                <div class="feature__item" style="box-shadow:none">
                    <img src="{{ asset('assets/img/clients/alhijra.png') }}" alt="">

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                <div class="feature__item" style="box-shadow:none">
                    <img src="{{ asset('assets/img/clients/sunter.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                <div class="feature__item" style="box-shadow:none">
                    <img src="{{ asset('assets/img/clients/plumpang.png') }}" alt="">

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                <div class="feature__item" style="box-shadow:none">
                    <img src="{{ asset('assets/img/clients/pulomas.png') }}" alt="">

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                <div class="feature__item" style="box-shadow:none">
                    <img src="{{ asset('assets/img/clients/cempaka-satu.png') }}" alt="">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

@endsection
