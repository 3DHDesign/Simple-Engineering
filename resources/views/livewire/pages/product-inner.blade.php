<div>
    <section class="page-title" style="background-image: url({{ asset('storage/' . $product->breadcrumb_image) }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Products</h1>
                <ul class="page-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Products</li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="services-details">
        <div class="container">
            <div class="row">

                <style>
                    .services-details__content ul {
                        list-style-type: square !important;
                        margin-left: 25px;
                    }
                </style>

                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                            style="margin-bottom: 20px">
                        <h3>{{ $product->name }}</h3>
                        {!! $product->description !!}
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
                                            <a href="{{ route('service.inner', ['id' => $service->id, 'slug' => Str::slug($service->name)]) }}"
                                                wire:navigate>{{ $service->name }}<i class="fa fa-angle-right"></i></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <div class="sidebar-widget service-sidebar-single">
                            <div class="service-sidebar-single-contact-box text-center wow fadeInUp animated"
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
