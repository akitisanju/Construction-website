<?php include 'includes/header.php';?>

    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">Contact</span>
                        <img src="" alt="">
                        <h1 class="title">
                            Contact Us
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="index.php">home</a>
                            <a class="current" href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->

           <!-- portfolio team area start -->
           <div class="portfolio1-team-area-bg rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-center-style-one">
                        <span class="pre">Recent Projects</span>
                        <h2 class="title1">Our Completed Projects</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt--40">
            <div class="col-lg-12">
                <div class="swiper-wrapper-project">
                    <div class="swiper mySwiper-project-1" dir="ltr">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single project area start -->
                                <div class="project-area-start-1">
                                    <a href="gallery.php" class="thumbnail">
                                        <img src="assets/images/swiper/02.png" alt="">
                                    </a>
                                </div>
                                <!-- single project area end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single project area start -->
                                <div class="project-area-start-1">
                                    <a href="project-details.html" class="thumbnail">
                                        <img src="assets/images/swiper/22.png" alt="">
                                    </a>
                                </div>
                                <!-- single project area end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single project area start -->
                                <div class="project-area-start-1">
                                    <a href="project-details.html" class="thumbnail">
                                        <img src="assets/images/swiper/32.png" alt="">
                                    </a>
                                </div>
                                <!-- single project area end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single project area start -->
                                <div class="project-area-start-1">
                                    <a href="project-details.html" class="thumbnail">
                                        <img src="assets/images/swiper/42.png" alt="">
                                    </a>
                                    
                                </div>
                                <!-- single project area end -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- rta contact area stsart -->
    <div class="rts-contact-area-page rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pr--60 pr_sm--0 mb_sm--30 pr_md--10 pb_md--25 pb_sm--25">
                    <div class="contact-main-wrapper-left">
                        <span>Get In Touch</span>
                        <h3 class="title-main">
                        Have a question? We’re just a message away and happy to help.
                        </h3>
                        <p class="disc">
                        Connect with us to discuss your project, request a quote, or learn more about our services. We’re ready to support you every step of the way.
                        </p>
                        <div class="row g-24">
                            <div class="col-lg-6">
                                <div class="quick-contact-page-1">
                                    <div class="icon">
                                        <img src="assets/images/contact/01.svg" alt="contact">
                                    </div>
                                    <h5 class="title">Call Center</h5>
                                    <p>
                                       +91 1234567890 <br> +91 0987654321
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="quick-contact-page-1">
                                    <div class="icon">
                                        <img src="assets/images/contact/02.svg" alt="contact">
                                    </div>
                                    <h5 class="title">Our Office</h5>
                                    <p>
                                      Telangana ,Ranga reddy-501512<br> vanasthalipuram 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="form-messages"></div>
                    <form id="contact-form" action="mailer.php" class="contact-form-area-wrapper">
                        <h4 class="title">Let’s Get in Touch</h4>
                        <div class="half-inpur-wrapper">
                            <div class="single">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                            <div class="single">
                                <input type="text" name="email" placeholder="number" required>
                            </div>
                        </div>
                        <div class="single">
                            <input name="subject" type="text" placeholder="Email Address...">
                        </div>
                        <textarea name="message" id="" placeholder="Type Your Message"></textarea>
                        <button type="submit" class="rts-btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- rta contact area end -->

    <div class="rts-map-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-map-main-wrapper">
                        <div id="map-contact" class="map-contact" data-map-zoom="16" data-map-scroll="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php';?>