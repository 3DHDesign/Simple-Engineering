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
    <section class="project-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-details__top">
                        <div class="project-details__img"> <img src="{{ asset('storage/' . $service->main_image) }}"
                                alt="{{ $service->name }}">
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .project-details__content-left ul {
                    list-style-type: square !important;
                    margin-left: 25px;
                }
            </style>
            <div class="project-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__content-left">
                            <h3>{{ $service->name }}</h3>
                            {!! $service->description !!}
                        </div>
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
        </div>
    </section>
</div>
