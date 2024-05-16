<div>
    <section class="page-title" style="background-image: url({{ asset('storage/' . $service->breadcrumb_image) }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Services</h1>
                <ul class="page-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Services</li>
                    <li>{{ $service->name }}</li>
                </ul>
            </div>
        </div>
    </section>
    <style>
        h3 {
            font-size: 26px;
        }

        .container {
            padding-top: 30px !important;
        }
    </style>
    <section class="services-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <img src="{{ asset('storage/' . $service->main_image) }}" alt="{{ $service->name }}">
                        <h3 class="mt-4">{{ $service->name }}</h3>
                        <p> {!! $service->description !!}</p>
                        <div class="mb-5 mb-lg-0 innerpage">
                            @if (!empty($faqs))
                                <ul class="accordion-box wow fadeInRight animated"
                                    style="visibility: visible; animation-name: fadeInRight; margin-top: 30px;">
                                    @foreach ($faqs as $faq)
                                        <li class="accordion block active-block">
                                            <div class="acc-btn active">
                                                {{ $faq->title }}
                                                <div class="icon fa fa-plus"></div>
                                            </div>
                                            <div class="acc-content" style="display: block;">
                                                <div class="content pt-20">
                                                    <div class="text">{{ $faq->description }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-4">
                    <div class="service-sidebar">

                        <div class="sidebar-widget service-sidebar-single">
                            <div class="service-sidebar-single-services wow fadeInUp animated" data-wow-delay="0.1s"
                                data-wow-duration="1200m"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <div class="title">
                                    <h3>All Services</h3>
                                </div>
                                <ul>
                                    @foreach ($services as $service)
                                        <li>
                                            <a
                                                href="{{ route('service.inner', ['id' => $service->id, 'slug' => Str::slug($service->name)]) }}">{{ $service->name }}
                                                <i class="fa fa-angle-right"></i></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget service-sidebar-single">
                            <div class="service-sidebar-single-contact-box text-center wow fadeInUp animated animated"
                                data-wow-delay="0.3s" data-wow-duration="1200m"
                                style="background-image: url(&quot;images/resource/news-2.jpg&quot;); visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="icon">
                                    <span class="lnr lnr-icon-phone"></span>
                                </div>
                                <div class="title">
                                    <h2>Best <br>Services</h2>
                                </div>
                                <p class="phone"><a href="tel:+940112413841"> +94 (0)11 241 3841</a></p>
                                <p>Call Us Anytime</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
