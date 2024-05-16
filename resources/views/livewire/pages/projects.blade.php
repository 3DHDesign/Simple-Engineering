<div>
    <section class="page-title"
        style="background-image: url({{ asset('assets/images/background/products-image-simple0engineering.jpeg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Projects</h1>
                <ul class="page-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="featured-products">
        <span class="bg-shape"></span>
        <div class="auto-container">

            <div class="mixitup-gallery">
                <div class="filter-list row" id="MixItUp95EAB9">
                    @foreach ($projects as $project)
                        <div class="product-block all mix transport ac col-lg-3 col-md-6 col-sm-12"
                            style="display: inline-block;">
                            <div class="inner-box">
                                <div class="image"><a
                                        href="{{ route('project.inner', ['id' => $project->id, 'slug' => Str::slug($project->name)]) }}"
                                        wire:navigate><img src="{{ asset('storage/' . $project->main_image) }}"
                                            alt="{{ $project->name }}"></a>
                                </div>
                                <div class="content">
                                    <h4><a href="{{ route('project.inner', ['id' => $project->id, 'slug' => Str::slug($project->name)]) }}"
                                            wire:navigate>{{ $project->name }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
