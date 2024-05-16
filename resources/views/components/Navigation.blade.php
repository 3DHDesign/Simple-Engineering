<div>

    <header class="main-header header-style-four">
        <div class="header-lower">
            <div class="auto-container">

                <div class="main-box">
                    <div class="logo"><a href="/"><img src="images/logo.png" alt title="Energy company"></a>
                    </div>
                    <div class="nav-outer">
                        <nav class="nav main-menu">
                            <ul class="navigation">
                                <li class="{{ Route::is('home') ? 'current' : '' }}"><a href="{{ route('home') }}"
                                        wire:navigate>Home</a></li>
                                <li class="{{ Route::is('products') ? 'current' : '' }}"><a
                                        href="{{ route('products') }}" wire:navigate>Products</a></li>
                                <li class="{{ Route::is('projects') ? 'current' : '' }}"><a
                                        href="{{ route('projects') }}" wire:navigate>Projects</a></li>

                                <li class="{{ Route::is('services') ? 'current' : '' }}"><a
                                        href="{{ route('services') }}" wire:navigate>Services</a></li>
                                <li class="{{ Route::is('publications') ? 'current' : '' }}"><a
                                        href="{{ route('pub') }}" wire:navigate>Publications</a></li>
                                <li class="{{ Route::is('contact') ? 'current' : '' }}"><a
                                        href="{{ route('contact') }}" wire:navigate>Contact us</a></li>
                                <li class="{{ Route::is('about') ? 'current' : '' }}"><a href="{{ route('about') }}"
                                        wire:navigate>About us</a></li>
                            </ul>
                        </nav>

                        <div class="outer-box">
                            <a href="{{ route('contact') }}" class="theme-btn btn-style-two"><span class="btn-title"><i
                                        class="fal fa-calendar-check pe-1"></i> get a quote</span></a>

                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"
                                    style="color: black;"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mobile-menu">
            <div class="menu-backdrop"></div>

            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo"><a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt
                                title></a></div>
                    <div class="close-btn"><i class="icon fa fa-times"></i></div>
                </div>
                <ul class="navigation clearfix">

                </ul>
                <ul class="contact-list-one">
                    <li>

                        <div class="contact-info-box">
                            <i class="icon lnr-icon-phone-handset"></i>
                            <span class="title">Call Now</span>
                            <a href="tel:0112413841">0112 413 841</a>
                        </div>
                    </li>
                    <li>

                        <div class="contact-info-box">
                            <span class="icon lnr-icon-envelope1"></span>
                            <span class="title">Send Email</span>
                            <a href="mailto:info@simple-engineering.lk"><span
                                    class="__cf_email__">info@simple-engineering.lk</span></a>
                        </div>
                    </li>
                    <li>

                        <div class="contact-info-box">
                            <span class="icon lnr-icon-clock"></span>
                            <span class="title">Opening Hour</span>
                            Mon - Sat 09:00 - 19:00, Sunday - CLOSED
                        </div>
                    </li>
                </ul>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </nav>
        </div>


        <div class="search-popup">
            <span class="search-back-drop"></span>
            <button class="close-search"><span class="fa fa-times"></span></button>
            <div class="search-inner">
                <form method="post">
                    <div class="form-group">
                        <input type="search" name="search-field" value placeholder="Search..." required>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>


        <div class="sticky-header">
            <div class="auto-container">
                <div class="inner-container">

                    <div class="logo">
                        <a href="/" title><img src="{{ asset('assets/images/logo.png') }}" alt title></a>
                    </div>

                    <div class="nav-outer">

                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">

                                </ul>
                            </div>
                        </nav>

                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
