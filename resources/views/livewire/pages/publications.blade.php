<div>
    <section class="page-title"
        style="background-image: url({{ asset('assets/images/background/publication-image-simple-engineering.jpeg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Publications</h1>
                <ul class="page-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Publications</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="project-section-three pt-120 pb-80">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Publications</h2>
                <span class="sub-title">Our group of experts contributed to the enhancement of energy sector in numerous
                    ways. Followings are the examples of their attempts to share their knowledge and experience with
                    community during the last few decades with the help of their previous organizations and
                    colleagues.</span>
            </div>
            <div class="row">
                @foreach ($publications as $publication)
                    <div style="width: 347px; margin-right: 30px;">
                        <div class="project-block wow fadeInUp animated animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a class="w-100 lightbox-image"
                                            href="{{ asset('storage/' . $publication->image) }}"><img
                                                style="width: 100%;" src="{{ asset('storage/' . $publication->image) }}"
                                                alt="{{ $publication->name }}"></a>
                                    </figure>
                                    <div class="info-box">
                                        <h5 class="title font-size-20 mt-0"><a href="{{ $publication->link }}"
                                                target="_blank">{{ $publication->name }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
