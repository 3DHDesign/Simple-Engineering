<div>
    <section class="page-title" style="background-image: url({{ asset('storage/' . $news->breadcrumb_image) }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">News</h1>
                <ul class="page-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>News</li>
                    <li>{{ $news->name }}</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="team-details">
        <div class="container pb-100">
            <div class="team-details__top pb-70">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 mb-4">
                        <div class="team-details__top-left">
                            <div class="team-details__top-img"> <img src="{{ asset('storage/' . $news->image) }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 mt-4">
                        <div class="team-details__top-right">
                            <div class="team-details__top-content">
                                <h3 class="team-details__top-name">{{ $news->name }}</h3>
                                <div class="team-details__social"> <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i
                                            class="fab fa-pinterest-p"></i></a> <a href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                {!! $news->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-details__bottom pt-30">
                <div class="row">
                    @foreach (json_decode($news->images) as $item)
                        <div class="col-xl-4 col-lg-4">
                            <div class="team-details__top-left">
                                <div class="team-details__top-img">
                                    <img src="{{ asset('storage/' . $item) }}" alt="{{ $item }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
