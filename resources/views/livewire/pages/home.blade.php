<div>

    <section class="main-slider-two">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    @foreach ($sliders as $key => $slider)
                        <li data-index="rs-{{ $key }}" data-transition="zoomin">

                            <img src="{{ asset('storage/' . $slider->image) }}" alt class="rev-slidebg">
                            <div class="tp-caption text-center" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[15,15,15,15]" data-paddingright="[0,0,0,0]"
                                data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-width="['825','825','825','480']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['-150','-150','-150','-130']"
                                data-x="['center','center','center','center']"
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <span class="title">{{ $slider->slogan }}</span>
                            </div>
                            <div class="tp-caption text-center" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[15,15,15,15]" data-paddingright="[15,15,15,15]"
                                data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-width="['825','825','825','500']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['-10','0','0','0']"
                                data-x="['center','center','center','center']"
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <h2 class="text-white">{!! $slider->title !!}</h2>
                            </div>
                            <div class="tp-caption text-center" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[15,15,15,15]" data-paddingright="[15,15,15,15]"
                                data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-width="['700','750','700','450']" data-whitespace="normal"
                                data-hoffset="['0','0','0','0']" data-voffset="['180','210','180','180']"
                                data-x="['center','center','center','center']"
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <a href="{{ route('contact') }}" class="theme-btn btn-style-one"><span
                                        class="btn-title">Discover
                                        More</span></a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>


    <section class="service-section pt-0 pt-md-100 pb-md-70 pb-90">
        <div class="auto-container">
            <div class="row">

                <div class="service-block-three col-md-6 col-lg-4">
                    <div class="inner-box">
                        <div class="lower-content">
                            <a href="{{ route('products') }}" class="read-more theme-btn btn-style-one"><span
                                    class="btn-title">View
                                    Details</span></a>
                            <h4 class="title"><a href="page-service-details.html">Hydro Load Controller</a></h4>
                            <div class="text">Optimize off-grid hydro with our Load Controller for peak efficiency.
                            </div>
                        </div>
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('assets/images/resource/service1-1.jpg') }}" alt></figure>
                        </div>
                    </div>
                </div>

                <div class="service-block-three col-md-6 col-lg-4">
                    <div class="inner-box">
                        <div class="lower-content">
                            <a href="{{ route('products') }}" class="read-more theme-btn btn-style-one"><span
                                    class="btn-title">View
                                    Details</span></a>
                            <h4 class="title"><a href="page-service-details.html">Grid Synchronizer Relay</a></h4>
                            <div class="text">Ensure a secure and smooth grid connection with our reliable Relay.
                            </div>
                        </div>
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('assets/images/resource/service1-2.jpg') }}" alt></figure>
                        </div>
                    </div>
                </div>

                <div class="service-block-three col-md-6 col-lg-4">
                    <div class="inner-box">
                        <div class="lower-content">
                            <a href="{{ route('products') }}" class="read-more theme-btn btn-style-one"><span
                                    class="btn-title">View
                                    Details</span></a>
                            <h4 class="title"><a href="page-service-details.html">Automatic Synchronizer</a></h4>
                            <div class="text">Effortlessly sync with our Automatic Synchronizer for convenience.
                            </div>
                        </div>
                        <div class="image-box">
                            <figure class="image overlay-anim"><img
                                    src="{{ asset('assets/images/resource/service1-3.jpg') }}" alt></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-section-five pt-0 pb-60">
        <div class="auto-container">
            <div class="row">

                <div class="image-column col-xl-5">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1 overlay-anim wow fadeInUp">
                            <img src="{{ asset('assets/images/resource/about4-1.jpg') }}" alt>
                        </figure>
                        <div class="feature-box bounce-y">
                            <div class="box-wrapper">
                                <i class="icon flaticon-ac1-mechanic"></i>
                                <div class="icon-text mt-20">
                                    <h4 class="title">10+</h4>
                                    <p class="text">Years Of Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-column pl-lg-15 col-xl-7 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Your Trusted Solar Energy Partner</span>
                            <h2>Pioneering Solar Systems for Sustainable Living</h2>
                            <div class="text">Simple Engineering is a renewable/sustainable energy engineering company. We specialize in machine selection & quality assessment, 
                            energy auditing, carbon footprint analysis, factory automation, development & maintenance of hydro power plants and solar PV systems. Our expertise comes
                            from the knowledge and experience of workforce with electrical, mechanical, electronics and physics background.</div>
                            <div class="row mt-40">
                                <div class="about-block-five col-md-7">
                                    <h4 class="font-size-20">Empowering You with Solar Innovation</h4>
                                    <ul class="list-style-two mb-50 mt-25">
                                        <li><i class="fal fa-arrow-right"></i> Harness the power of solar energy to
                                            reduce your carbon
                                            footprint</li>
                                        <li><i class="fal fa-arrow-right"></i> Experience cutting-edge technology for
                                            efficient solar
                                            solutions</li>
                                        <li><i class="fal fa-arrow-right"></i> Our commitment to quality ensures
                                            reliable and durable
                                            solar systems</li>
                                        <li><i class="fal fa-arrow-right"></i> Discover cost-effective solar solutions
                                            for a sustainable
                                            future</li>
                                    </ul>
                                </div>
                                <div class="about-block-five col-md-5">
                                    <div class="graph-box">
                                        <div class="pie-graph">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#4CAF50"
                                                    data-bgColor="#f2f2f2" data-width="125" data-height="125"
                                                    data-linecap="normal" value="90">
                                                <div class="inner-text count-box"><span class="count-text txt"
                                                        data-stop="90" data-speed="2000"></span>%</div>
                                            </div>
                                            <h6 class="title">Leadership in Solar <br>Energy Solutions</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="why-choose-us-three">
        <div class="bg-image overlay-anim"
            style="background-image: url({{ asset('assets/images/background/bg1.jpg') }})"></div>
        <div class="floating-objects bounce-y d-none d-xl-block"><img
                src="{{ asset('assets/images/icons/dot-object1.png') }}" alt></div>
        <div class="large-container">
            <div class="row">

                <div class="content-column col-lg-6">
                    <div class="inner-column wow fadeInLeft">
                        <div class="sec-title light">
                            <h2>WHY SIMPLE ENGINEERING?</h2>
                            <div class="text">We bring you the benefit, each with over many years of experience. We
                                know exactly
                                what is required and when it needs to be done. You can count on us.</div>
                        </div>
                        <div class="row">

                            <div class="feature-block-two col-lg-4">
                                <div class="inner-box overlay-anim">
                                    <img src="{{ asset('assets/images/resource/news-6.jpg') }}" alt>
                                </div>
                            </div>

                            <div class="feature-block-two col-lg-8">
                                <ul class="list-style-four mb-50">
                                    <li><i class="far fa-square-check"></i> Building Better Products</li>
                                    <li><i class="far fa-square-check"></i> Cost optimized layout plan</li>
                                    <li><i class="far fa-square-check"></i> Total Quality Services</li>
                                    <li><i class="far fa-square-check"></i> Cost optimized layout plan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6"></div>
            </div>
        </div>
    </section>

    <section class="service-section-two pt-200 pb-200">
        <div class="floating-object1 bounce-y"><img src="{{ asset('assets/images/icons/floating-obj1.png') }}"
                alt=""></div>
        <div class="floating-object2 bounce-y"><img src="{{ asset('assets/images/icons/floating-obj3.png') }}"
                alt=""></div>
        <div class="auto-container">
            <div class="row">

                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="sec-title">
                        <span class="sub-title">SERVICES WE OFFER</span>
                        <h2>Comprehensive Energy Solution Services</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image overlay-anim mb-0"><img
                                        src="{{ asset('assets/images/resource/service2-1.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4 class="title"><a href="{{ route('services') }}">Energy Auditing</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image overlay-anim mb-0"><img
                                        src="{{ asset('assets/images/resource/service2-2.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4 class="title"><a href="{{ route('services') }}">Carbon Footprint Analysis</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image overlay-anim mb-0"><img
                                        src="{{ asset('assets/images/resource/service2-3.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4 class="title"><a href="{{ route('services') }}">Solar PV Solutions</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image overlay-anim mb-0"><img
                                        src="{{ asset('assets/images/resource/service2-4.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4 class="title"><a href="{{ route('services') }}">Hydro Power Plant
                                        Development</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image overlay-anim mb-0"><img
                                        src="{{ asset('assets/images/resource/service2-5.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4 class="title"><a href="{{ route('services') }}">Hydro Power Plant
                                        Maintenance</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-6">

                    <div class="service-block-two style2">
                        <div class="inner-box">
                            <div class="lower-content">
                                <p>Explore Advanced Energy Solutions</p>
                                <h4 class="title"><a href="energy-service-details.html">Unlock Sustainable Solutions
                                        for Your Energy
                                        Needs</a></h4>
                                <a href="{{ route('services') }}" class="theme-btn btn-style-one"><span
                                        class="btn-title">Discover
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="call-to-action style-four pt-100 pb-90">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="title-column text-center">
                        <div class="sec-title light">
                            <h1 class="title mb-0">Empowering Spaces with Advanced Energy Solutions</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="project-section-home4 pt-120 pb-0 pb-md-100">
        <div class="auto-container">
            <div class="sec-title">
                <span class="sub-title">Recent Project</span>
                <h2>Checkout Our Recently <br>Closed Projects</h2>
            </div>
        </div>
        <div class="container-fluid py-0">
            <div class="row">
                <div class="home4-project-slider owl-carousel owl-theme">

                    @if (!empty($projects))
                        @foreach ($projects as $project)
                            <div class="project-block-two wow fadeInUp">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a class="icon far fa-plus"
                                                href="{{ route('project.inner', ['id' => $project->id, 'slug' => Str::slug($project->name)]) }}"></a>
                                            <a class="w-100 lightbox-image"
                                                href="{{ asset('storage/' . $project->main_image) }}"><img
                                                    src="{{ asset('storage/' . $project->main_image) }}" alt></a>
                                        </figure>
                                        <div class="info-box">
                                            <h4 class="title my-0"><a
                                                    href="{{ route('project.inner', ['id' => $project->id, 'slug' => Str::slug($project->name)]) }}">{{ $project->name }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>
    @if (!empty($allnews))
        <section class="news-section pb-90">
            <div class="auto-container">
                <div class="text-center">
                    <div class="sec-title">
                        <span class="sub-title">Our Publications</span>
                        <h2>News & Articles</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($allnews as $news)
                        @php
                            $created_at = $news->created_at;

                            // Extracting day and month from the created_at date
                            $day = $created_at->format('d');
                            $month = $created_at->format('M');

                            // Converting month abbreviation to its numeric representation
                            $month_number = Carbon\Carbon::createFromFormat('M', $month)->format('m');

                            // Creating a Carbon instance with the extracted date
                            $date = Carbon\Carbon::createFromFormat('m-d', $month_number . '-' . $day);

                            $formatted_date = $date->format('d M');
                        @endphp
                        <div class="news-block col-lg-4 col-md-6 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a
                                            href="{{ route('news.inner', ['id' => $news->id, 'slug' => Str::slug($news->name)]) }}"><img
                                                src="{{ asset('storage/' . $news->image) }}" alt></a>
                                    </figure>
                                    <span class="date">{{ $formatted_date }}</span>
                                </div>
                                <div class="lower-content">
                                    <h4 class="title"><a
                                            href="{{ route('news.inner', ['id' => $news->id, 'slug' => Str::slug($news->name)]) }}">{{ $news->name }}</a>
                                    </h4>
                                    <a href="{{ route('news.inner', ['id' => $news->id, 'slug' => Str::slug($news->name)]) }}"
                                        class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

    @endif


    <section>
        <div class="container-fluid p-0">
            <div class="row">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.900229386625!2d79.97014779999999!3d6.9025338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d364d78e8d%3A0xaa0c7d64f464eb58!2sSimple%20Engineering%20(Pvt)%20Ltd!5e0!3m2!1sen!2slk!4v1705652745335!5m2!1sen!2slk"
                    data-tm-width="100%" height="500" allowfullscreen></iframe>
            </div>
        </div>
    </section>

</div>
