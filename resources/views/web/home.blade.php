@extends('web.layout.main')
@section('website-page-title', 'Welcome')
@section('website-active-welcome', 'active')
@section('website-main-section')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset('../web/img/cta-bg.gif') }}" alt="" data-aos="fade-in">
        {{-- <video data-aos="fade-in" class="hero-video" autoplay loop muted>
            <source src="{{ asset('../web/img/hero-bg.mp4') }}" type="video/mp4">
        </video> --}}

        <div class="container">

            <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-6 col-lg-8">
                    <h2>CLONE<span>.</span> PASTE<span>.</span> LAUNCH<span>.</span></h2>
                    <p>Watch the magic happen with AssetSphere</p>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="fas fa-copy"></i>
                        <h3><a href="">Copy</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box">
                        <i class="fas fa-clipboard"></i>
                        <h3><a href="">Paste</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-box">
                        <i class="fas fa-flask"></i>
                        <h3><a href="">Test</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <i class="fas fa-server"></i>
                        <h3><a href="">Launch</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="icon-box">
                        <i class="fas fa-smile"></i>
                        <h3><a href="">Enjoy</a></h3>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('../web/img/about.gif') }}" class="img-fluid" alt=""
                        style="border-radius: 10px;">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3>AssetSphere: Style it. Sphere it. Slay it.</h3>
                    <p class="fst-italic">
                        Tired of wrestling with CSS? AssetSphere is a powerful and intuitive library that streamlines your
                        workflow, letting you style your web projects faster and easier than ever before. From basic layouts
                        to complex animations, AssetSphere has you covered.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Rapid Styling: Get your projects styled quickly with
                                pre-built components and a streamlined workflow.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Complete Design System: Maintain consistency and
                                scalability with a comprehensive set of styles and utilities.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Effortless Elegance: Achieve stunning, professional-grade
                                designs without the CSS complexity.</span></li>
                    </ul>
                    <p>
                        Don't let CSS hold you back. AssetSphere simplifies the styling process without sacrificing power or
                        flexibility. Whether you're a seasoned pro or just starting out, AssetSphere will help you achieve
                        professional-grade results with minimal effort.
                    </p>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 2,
                      "spaceBetween": 40
                    },
                    "480": {
                      "slidesPerView": 3,
                      "spaceBetween": 60
                    },
                    "640": {
                      "slidesPerView": 4,
                      "spaceBetween": 80
                    },
                    "992": {
                      "slidesPerView": 6,
                      "spaceBetween": 120
                    }
                  }
                }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-2.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('../web/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

            <div class="row gy-4">
                <div class="features-video col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('../web/img/download_2.gif') }}" alt="" data-aos="fade-in"
                        style="width:100%; height: 100%; object-fit: cover;">
                    {{-- <video class="img-fluid" autoplay loop muted style="border-radius: 10px;">
                        <source src="{{ asset('../web/img/download_2.gif') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video> --}}

                </div>
                <div class="col-lg-6">

                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-code-slash flex-shrink-0"></i>
                        <div>
                            <h4>Faster Development</h4>
                            <p>Build responsive sites quickly with pre-built components.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brush flex-shrink-0"></i>
                        <div>
                            <h4>Consistent Design</h4>
                            <p>Maintain a unified brand across all projects.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-magic flex-shrink-0"></i>
                        <div>
                            <h4>Simplified Styling</h4>
                            <p>Easy CSS, regardless of your skill level.</p>
                        </div>
                    </div><!-- End Features Item-->

                    <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-intersect flex-shrink-0"></i>
                        <div>
                            <h4>Cross-Browser Ready</h4>
                            <p>Works perfectly on all devices and browsers.</p>
                        </div>
                    </div><!-- End Features Item-->

                </div>
            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Check our Services</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-brush"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Rapid Prototyping & Styling</h3>
                        </a>
                        <p class="white-text">Accelerate your web development process with AssetSphere's pre-built
                            components. Quickly prototype and style your projects, saving valuable time and resources. Focus
                            on functionality, not fighting with CSS.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-browser-chrome"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Cross-Browser Compatibility Testing & Support</h3>
                        </a>
                        <p class="white-text">Confidently launch your websites knowing they'll look and perform flawlessly
                            on all major browsers and devices. We ensure AssetSphere component's compatibility, so you don't
                            have to.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-palette"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Consistent Design Systems</h3>
                        </a>
                        <p class="white-text">Implement and maintain a unified brand identity across all your web
                            applications. AssetSphere's comprehensive design system ensures visual consistency and
                            scalability, creating a professional and cohesive user experience.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bucket"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Custom Theme Development & Integration</h3>
                        </a>
                        <p class="white-text">Tailor AssetSphere to perfectly match your brand aesthetic. Our team can
                            create custom themes or seamlessly integrate existing ones, giving your website a unique and
                            polished look.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-magic"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Component Library Expansion & Customization</h3>
                        </a>
                        <p class="white-text">Extend AssetSphere's functionality with custom components tailored to your
                            specific needs. We can develop new components or modify existing ones to meet your project
                            requirements.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-wrench"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3 class="white-text">Ongoing Maintenance & Support</h3>
                        </a>
                        <p class="white-text">Benefit from continuous updates, bug fixes, and expert support. We'll keep
                            AssetSphere running smoothly and help you overcome any challenges, ensuring your projects stay
                            up-to-date and secure.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="poetry" class="call-to-action section dark-background">

        <img src="{{ asset('../web/img/download.gif') }}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Programming Poetry</h3>
                        @foreach ($poetrys as $poetry)
                            <p style="font-size: 25px; text-transform: capitalize; font-style: italic;">
                                "{{ $poetry->description }}" </p>
                        @endforeach
                        <a class="cta-btn" href="#">Next Poetry</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-between">

                <div class="col-lg-5">
                    <img src="{{ asset('../web/img/photo.gif') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg-6">

                    <h3 class="fw-bold fs-2 mb-3">For the devs in the house: Did you know...?</h3>
                    <p>
                        AssetSphere is lightweight and blazing fast? Optimized CSS for peak performance and a smooth dev
                        experience.
                    </p>

                    <div class="row gy-4">

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-braces flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="1989"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>HTML Invented - </strong> <span>Tim Berners Lee</span></p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-code-slash flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="1996"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>CSS1 Standardized - </strong> <span>W3C</span></p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-terminal flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="1995"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>JavaScript Invented - </strong> <span>Brendan Eich</span></p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-layout-text-window-reverse flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="2011"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>Bootstrap Created - </strong> <span>Mark Otto and Jacob Thornton</span></p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Team Section -->
    <section id="loader" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Designs</h2>
            <p>Loaders</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($loaders as $loader)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <iframe src="https://giphy.com/embed/{{ $loader->image_link }}" width="261"
                                    height="300" style="width:261px; height: 300px;" frameBorder="0"
                                    class="img-fluid"></iframe>
                                <div class="social">
                                    <a href=""
                                        onclick=" event.preventDefault(); copyCode('{{ $loader->html }}')"><i
                                            class="fab fa-html5"></i></a>
                                    <a href=""
                                        onclick="event.preventDefault(); copyCode('{{ $loader->css }}')"><i
                                            class="fab fa-css3"></i></a>
                                    {{-- <a href=""><i class="fab fa-js"></i></a> --}}
                                </div>
                            </div>


                            <div class="member-info text-center">
                                <h4>{{ $loader->name }}</h4>
                                <span>Designed by - AssetSphere</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach
            </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113894.27701087948!2d80.84757896874582!3d26.865508255436968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd90c397ea09%3A0x80c85549ec7713f3!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1735894841184!5m2!1sen!2sin"
                    frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>Lucknow, Uttar Pradesh, India</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+91 9161224477 | 7269084505</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
