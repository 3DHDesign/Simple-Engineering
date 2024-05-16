<div>
    <section class="page-title"
        style="background-image: url({{ asset('assets/images/background/products-image-simple0engineering.jpeg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Products</h1>
                <ul class="page-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="featured-products">
        <span class="bg-shape"></span>
        <div class="auto-container">

            <div class="mixitup-gallery">
                <div class="filter-list row" id="MixItUp95EAB9">

                    @foreach ($products as $product)
                        <div class="product-block all mix transport ac col-lg-3 col-md-6 col-sm-12"
                            style="display: inline-block;">
                            <div class="inner-box">
                                <div class="image"><a
                                        href="{{ route('product.inner', ['id' => $product->id, 'slug' => $product->slug]) }}"
                                        wire:navigate><img src="{{ asset('storage/' . $product->image) }}"
                                            alt="{{ $product->name }}"></a>
                                </div>
                                <div class="content">
                                    <h4><a href="{{ route('product.inner', ['id' => $product->id, 'slug' => $product->slug]) }}"
                                            wire:navigate>{{ $product->name }}</a>
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
