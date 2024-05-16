<div>
    <section class="page-title"
        style="background-image: url({{ asset('assets/images/background/services-image-simple-engineering.jpeg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Serives</h1>
                <ul class="page-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Serives</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="service-section pt-150 pb-40">
        <div class="auto-container">
            <div class="row mt-20">
                @foreach ($services as $service)
                    <div class="service-block mb-80 col-md-6 col-lg-4">
                        <div class="inner-box">
                            <div class="lower-content">

                                <a href="{{ route('service.inner', ['id' => $service->id, 'slug' => Str::slug($service->name)]) }}"
                                    class="read-more" wire:navigate><i class="fa-solid fa-arrow-right"></i></a>
                                <h4 class="title"><a
                                        href="{{ route('service.inner', ['id' => $service->id, 'slug' => Str::slug($service->name)]) }}"
                                        wire:navigate>{{ $service->name }}</a>
                                </h4>
                                <div class="text">{{ $service->short_description }}</div>
                            </div>
                            <div class="image-box">
                                <figure class="image overlay-anim"><img
                                        src="{{ asset('storage/' . $service->main_image) }}" alt="{{ $service->name }}">
                                </figure>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

</div>
