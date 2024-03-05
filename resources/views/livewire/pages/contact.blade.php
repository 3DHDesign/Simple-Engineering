<div>
    <section class="page-title"
        style="background-image: url({{ asset('assets/images/background/contact-image-simple-engineering.jpeg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Contact</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            <div class="text">Lorem ipsum is simply free text available dolor sit amet, consectetur
                                notted adipisicing elit sed do eiusmod tempor incididunt simply free ut labore et dolore
                                magna aliqua.</div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Have any question?</h6>
                                    <a href="tel:980089850"><span>Free</span> +92 (020)-9850</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Write email</h6>
                                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>Visit anytime</h6>
                                    <span>66 broklyn golden street. New York</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">Send us email</span>
                        <h2>Feel free to write</h2>
                    </div>

                    <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php"
                        method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Name <small>*</small></label>
                                    <input name="form_name" class="form-control" type="text"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Email <small>*</small></label>
                                    <input name="form_email" class="form-control required email" type="email"
                                        placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Subject <small>*</small></label>
                                    <input name="form_subject" class="form-control required" type="text"
                                        placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input name="form_phone" class="form-control" type="text"
                                        placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Message</label>
                            <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="mb-3">
                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="submit" class="theme-btn btn-style-one"
                                data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                            <button type="reset" class="theme-btn btn-style-one"><span
                                    class="btn-title">Reset</span></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid p-0">
            <div class="row">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d680.2917646320938!2d79.8734671296754!3d6.8815633439817745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259f8883ebd35%3A0xe0dd4d519d8b1ce0!2s3dh%20design!5e0!3m2!1sen!2slk!4v1708321248868!5m2!1sen!2slk"
                    data-tm-width="100%" height="500" allowfullscreen="" style="width: 100%;"></iframe>
            </div>
        </div>
    </section>
</div>
