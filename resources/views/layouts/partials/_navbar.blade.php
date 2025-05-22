<!-- Offcanvas Menu Begin -->
<div class="offcanvas__menu__overlay"></div>
<div class="offcanvas__menu__wrapper">
    <div class="canvas__close">
        <span class="fa fa-times-circle-o"></span>
    </div>
    <div class="offcanvas__logo">
        <a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
    </div>
    <nav class="offcanvas__menu mobile-menu">
        <ul>
            <li><a href="{{ route('home-page') }}">Beranda</a></li>
            <li>
                <span href="#">Produk</span>
                <ul class="dropdown">
                    <li><a href="{{ route('product-hris-page') }}">Human Resource Information System</a></li>
                    <li><a href="{{ route('product-crm-page') }}">Customer relationship Management</a></li>
                    <li><a href="{{ route('product-finance-page') }}"> Integrated FInancial Monitoring Dashboard</a>
                    </li>
                    <li><a href="{{ route('product-itm-page') }}"> IT Media & Software Solution</a></li>
                </ul>
            </li>
            {{-- <li><a href="{{ route('demo-page') }}">Demo</a></li> --}}
            <li><a href="{{ route('about-page') }}">Tentang Kami</a></li>
            <li><a href="{{ route('clients-page') }}">Klien Kami</a></li>
            <li><a href="{{ route('contact-page') }}">Kontak</a></li>

        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__auth">
        <ul>
            <li><a href="https://www.jxboard.co.id/" target="_blank"><span
                        class="fa fa-plus-circle"></span>www.jxboard.co.id</a></li>
        </ul>
    </div>
    <div class="offcanvas__info">
        <ul>
            <li><span class="icon_phone"></span> +62 896 0364 1693</li>
            <li><span class="fa fa-envelope"></span> hello@jxboard.com</li>
        </ul>
    </div>
</div>
<!-- Offcanvas Menu End -->



<header id="header-section-main"
    class="header-section header-scrolled navbar-fixed {{ Route::is('home-page') ? '' : 'header-normal' }}"">
    <div id="header-section" class="header__info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__info-left">
                        <ul>
                            <li><span class="icon_phone"></span> +62 896 0364 1693</li>
                            <li><span class="fa fa-envelope"></span> hello@jxboard.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__info-right">
                        <ul>
                            <li>
                                <a href="https://www.jxboard.co.id/" target="_blank"><span
                                        class="fa fa-plus-circle"></span>www.jxboard.co.id</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo" style="padding-top: 0">
                    <a href="{{ route('home-page') }}"><img src="{{ asset('assets/img/logo.png') }}"
                            alt=""></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <nav class="header__menu">
                    <ul>
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a
                                href="{{ route('home-page') }}">Beranda</a>
                        </li>
                        <li
                            class="{{ (request()->is('products/*') ? 'active' : '' || request()->is('products')) ? 'active' : '' }}">
                            <a href="#">Produk</a>
                            <ul class="dropdown" style="z-index: 10">
                                <li><a href="{{ route('product-hris-page') }}">Human Resource Information System</a>
                                </li>
                                <li><a href="{{ route('product-crm-page') }}">Customer Relationship Management</a></li>
                                <li><a href="{{ route('product-finance-page') }}">Integrated FInancial Monitoring
                                        Dashboard</a>
                                </li>
                                <li><a href="{{ route('product-itm-page') }}"> IT Media & Software Solution</a></li>
                            </ul>
                        </li>
                        {{-- <li class="{{ request()->is('demo') ? 'active' : '' }}"><a
                                href="{{ route('demo-page') }}">Demo</a></li> --}}
                        <li class="{{ request()->is('company/*') ? 'active' : '' }}"><a
                                href="{{ route('about-page') }}">Tentang Kami</a>
                        </li>

                        {{-- <li class="{{ request()->is('company/*') ? 'active' : '' }}"><a href="#">Company</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('about-page') }}">About</a></li>
                                <li><a href="{{ route('news-page') }}">News</a></li>
                            </ul>
                        </li> --}}
                        <li class="{{ request()->is('our-clients') ? 'active' : '' }}"><a
                                href="{{ route('clients-page') }}">Klien Kami</a></li>
                        <li class="{{ request()->is('contact') ? 'active' : '' }}"><a
                                href="{{ route('contact-page') }}">Kontak</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="canvas__open">
            <span class="fa fa-bars bars-color" style="font-size: 2rem"></span>
        </div>
    </div>
</header>
<!-- Header End -->
