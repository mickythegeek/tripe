<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Tripe | Your One Stop Support Bot</title>
    <link rel="icon" type="images/x-icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
    <!-- remix icon  -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/remixicon.css') }}">
    <!-- swiper -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/swiper-bundle.min.css') }}" />
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.min.css') }}">
  
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarCollapse">

    <!-- nav-bar start  -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-light"
            id="navbar">
            <div class="container">
                <div class="navbar-brand logo">
                    <a class="navbar-caption fs-4 text-light ls-1 fw-bold"
                        href="#!"><i
                            class="ri-registered-fill text-success fs-3 me-1"></i>TRIPE
                    </a>
                </div>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fw-bold fs-4"><i
                            class="ri-menu-5-line"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto" id="navbar-navlist">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#price">Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">Testimonial</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav nav-btn">
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts">Contact
                                Us</a>
                        </li>
                        <li class="nav-item ">

                            <a class="nav-link" href="{{route('user_login')}}">Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- nav-bar end  -->
    <!-- hero section start  -->
    <section class="hero-section bg-primary z-1" id="home">
        <div class='star-container position-absolute z-n1'>
            <canvas id='star-particle' ></canvas>
        </div>
        <div class="container" >
            <div class="row align-items-center justify-content-center z-1">
                <div class="col-lg-8 align-self-start">
                    <div class="text-center">
                        <h1 class="display-3 text-light fw-bold lh-base">
                            Elevate Customer Support with <span
                                class="text-success"> Tripe Live Chat Bot
                            </span></h1>
                        <p class="text-white-50 mt-3">Tripe is a powerful SaaS platform offering real-time messaging, seamless bot-to-human handoff, and easy website integration. Deliver instant, intelligent support to your customers—anytime, anywhere.</p>
                        <div class="main-btn mt-5">
                            <a href="{{route('user_register')}}"
                                class="btn btn-success btn-lg text-dark fw-semibold me-2">Get Started
                                <i class="ri-arrow-right-line ms-2"></i></a>
                            <a href="#!" class="ms-4 text-white">Learn More
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('backend/assets/images/city-2.png') }}" alt="" class="img-fluid shape w-100 z-n1 opacity-25">
    </section>
    <section class="section about-section bg-light" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <img src="{{ asset('backend/assets/images/about.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-5">
                    <div class="title-sm">
                        <span>About Tripe</span>
                    </div>
                    <div class="section-title-border mt-3 m-0"></div>
                    <div class="about-title mt-4">
                        <h2 class="fw-semibold text-primary lh-base">Live Chat Bot SaaS for Modern Customer Engagement</h2>
                        <p>
                        Tripe empowers businesses to connect with website visitors in real time through intelligent chatbots and smooth transitions to human agents when needed. Our platform is designed for effortless integration, robust automation, and personalized support—helping you boost satisfaction, resolve queries faster, and grow your business.
                    </p>
                    <ul>
                        <li>⚡ Real-time messaging and notifications</li>
                        <li>🤖 Smart bot-to-human handoff</li>
                        <li>🔗 Easy website integration</li>
                        <li>📈 Analytics and conversation history</li>
                        <li>🔒 Secure and scalable SaaS infrastructure</li>
                    </ul>
                        <div class="about-btn mt-4">
                            <a href="#!"
                                class="btn btn-primary fw-semibold">See Features <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section services-section" id="services">
        <div class="container">
            <div class="pb-4">
                <div class="row align-items-center justify-content-evenly">
                    <div class="col-lg-5">
                        <div class="title-sm">
                            <span>Our Services</span>
                        </div>
                        <div class="section-title-border mt-3 m-0"></div>
                        <div class="service-title mt-4">
                            <h2 class="fw-semibold text-primary lh-base">We
                                Providing Best Advance <br> Services</h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <p class="mt-5 text-primary">All the Lorem Ipsum
                            generators on the
                            Internet tend to repeat predefined as necessary,
                            making this the first true generator on the
                            Internet.</p>
                        <a href="#!" class="text-success">Learn More <i
                                class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-evenly mt-4 g-4">
                <div class="col-lg-5">
                    <div class="services-content p-3 shadow-sm">
                        <span class="text-success">01</span>
                        <div class="title-sm mt-2">
                            <span class="text-primary">Security Advisory</span>
                        </div>
                        <p class="mt-2">combined with a handful of model
                            sentence structures, to generate Lorem Ipsum which
                            looks reasonable. The generated Lorem Ipsum is
                            therefore always free from repetition</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="services-content p-3 shadow-sm">
                        <span class="text-success">02</span>
                        <div class="title-sm mt-2">
                            <span class="text-primary">Technical
                                Assurance</span>
                        </div>
                        <p class="mt-2">combined with a handful of model
                            sentence structures, to generate Lorem Ipsum which
                            looks reasonable. The generated Lorem Ipsum is
                            therefore always free from repetition</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-evenly mt-5 g-4">
                <div class="col-lg-3">
                    <div class="services-content-1 p-2 rounded-pill">
                        <i class="ri-heart-2-line text-primary bg-success-subtle"></i>
                        <span class="ms-4 fs-2xl">50+ Unique
                            Design</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="services-content-1 p-2 rounded-pill">
                        <i class="ri-pages-fill text-primary bg-success-subtle"></i>
                        <span class="ms-4 fs-2xl">Web Development</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="services-content-1 p-2 rounded-pill">
                        <i class="ri-database-fill text-primary bg-success-subtle"></i>
                        <span class="ms-4 fs-2xl">Data Recovery</span>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="section why-choose-section bg-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="title-sm">
                        <span>Why Choose Us</span>
                    </div>
                    <div class="section-title-border mt-3 m-0"></div>
                    <div class="why-choose-title mt-4">
                        <h2 class="fw-semibold text-primary lh-base">Trusted
                            World Widely</h2>
                        <p>It was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages, and
                            more recently with desktop</p>
                    </div>
                    <div class="row mt-4 g-4">
                        <div class="col-lg-6 col-6">
                            <div class="d-flex align-items-center">
                                <i
                                    class="ri-checkbox-blank-circle-fill text-success fs-4"></i>
                                <h6 class="ms-3 m-0">1000+ Trusted Clients</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="d-flex align-items-center">
                                <i
                                    class="ri-checkbox-blank-circle-fill text-success fs-4"></i>
                                <h6 class="ms-3 m-0">30+ Dedicated Teams</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="d-flex align-items-center">
                                <i
                                    class="ri-checkbox-blank-circle-fill text-success fs-4"></i>
                                <h6 class="ms-3 m-0">Outctome Focused</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="d-flex align-items-center">
                                <i
                                    class="ri-checkbox-blank-circle-fill text-success fs-4"></i>
                                <h6 class="ms-3 m-0">Web Application Expert</h6>
                            </div>
                        </div>
                        <div class="main-btn mt-5 d-flex">
                            <a href="#!"
                                class="btn btn-primary fw-semibold">Sign Up
                                !</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('backend/assets/images/working.jpg') }}" alt=""
                        class="img-fluid mt-4 shadow-sm rounded-2">
                </div>
            </div>
        </div>

    </section>
    <section class="section work-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="man-img">
                        <img src="{{ asset('backend/assets/images/group-working.jpg') }}" alt=""
                        class="img-fluid shadow-sm rounded-2">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="title-sm">
                        <span>Our Work Flow</span>
                    </div>
                    <div class="section-title-border mt-3 m-0"></div>
                    <div class="why-choose-title mt-4">
                        <h2 class="fw-semibold text-primary lh-base"> We Are
                            Truly Able To Help Our Clients Live Happier</h2>
                        <p>Richard McClintock, a Latin professor at
                            Hampden-Sydney College in Virginia, looked up one of
                            the more obscure Latin words, consectetur. </p>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <div class="icon-text mt-4">
                                <div class="icon">
                                    <i class="ri-donut-chart-fill"></i>
                                </div>
                                <h6 class="fw-semibold mt-3">Our Research
                                </h6>
                                <p>A research project is an academic,
                                    scientific, or professional</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon-text mt-4">
                                <div class="icon">
                                    <i class="ri-database-line"></i>
                                </div>
                                <h6 class="fw-semibold mt-3">Data Collection
                                </h6>
                                <p>Data collection methods include surveys,
                                    interviews, observations</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon-text mt-4">
                                <div class="icon">
                                    <i class="ri-focus-2-fill"></i>
                                </div>
                                <h6 class="fw-semibold mt-3">Targeting
                                </h6>
                                <p>Project targets help structure projects into
                                    smaller pieces of work</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon-text mt-4">
                                <div class="icon">
                                    <i class="ri-team-fill"></i>
                                </div>
                                <h6 class="fw-semibold mt-3">Solve Problem
                                </h6>
                                <p>Problem-solving is a process to identify
                                    roadblocks or during a project </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section price-section position-relative z-1" id="price">
        <div class="container">
            <div
                class="row align-items-center justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="title-sm">
                        <span>Our Price</span>
                    </div>
                    <div class="section-title-border mt-3"></div>
                    <div class="price-title mt-4">
                        <h2 class="fw-semibold text-primary">Flexible Plans &
                            Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5 g-4">
                <div class="col-md-6 col-lg-4">
                    <div
                        class="card shadow-sm h-100 border-0 border-primary border-top border-3">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-primary">STARTER</h5>
                            <p>Monthly Package</p>
                            <div class="price">
                                <h2 class="display-6 my-4 fw-bold text-primary">
                                    $19 <span class="fs-6 text-muted">/
                                        month</span></h2>
                            </div>
                            <div class="price-info-3">
                                <ul>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>
                                        5 Domains access
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>30
                                        customize sub page
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>120
                                        disk space
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>Frontend
                                        Builder
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>24/7
                                        phone support
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer border-0 bg-white">
                            <div class="price-btn text-center">
                                <a href="#!"
                                    class="btn btn-primary w-100 fw-semibold">Choose This
                                    Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div
                        class="card shadow h-100 border-0 border-success border-top border-3">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-success">STANDARD</h5>
                            <p>Monthly Package</p>
                            <div class="price">
                                <h2 class="display-6 my-4 fw-bold text-success">
                                    $59 <span class="fs-6 text-muted">/
                                        month</span></h2>
                            </div>
                            <div class="price-info-3">
                                <ul>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>10
                                        Domains access
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>50
                                        customize sub page
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>180
                                        disk space
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>Frontend
                                        Builder
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>24/7
                                        phone support
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer border-0 bg-white">
                            <div class="price-btn text-center">
                                <a href="#!"
                                    class="btn btn-success w-100 fw-semibold">Choose This
                                    Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div
                        class="card shadow-sm h-100 border-0 border-primary border-top border-3">
                        <div class="card-body text-center">
                            <h5 class="fw-bold text-primary">UNLIMITED</h5>
                            <p>Monthly Package</p>
                            <div class="price">
                                <h2 class="display-6 my-4 fw-bold text-primary">
                                    $119 <span class="fs-6 text-muted">/
                                        month</span></h2>
                            </div>
                            <div class="price-info-3">
                                <ul>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>Unlimited
                                        Domains access
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>Unlimited
                                        customize sub page
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>Unlimited
                                        disk space
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>Frontend
                                        Builder
                                    </li>
                                    <li>
                                        <i
                                            class="ri-checkbox-circle-fill text-success me-2"></i>24/7
                                        phone support
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer border-0 bg-white">
                            <div class="price-btn text-center">
                                <a href="#!"
                                    class="btn btn-primary w-100 fw-semibold">Choose This
                                    Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('backend/assets/images/Wave.svg') }}" alt="" class="img-fluid w-100 shape z-n1">
    </section>
    <section class="section faq-section">
        <div class="container">
            <div
                class="row align-items-center justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="title-sm">
                        <span>FAQs</span>
                    </div>
                    <div class="section-title-border mt-3"></div>
                    <div class="faq-title mt-4">
                        <h2 class="fw-semibold text-primary">Frequently Asked
                            Question</h2>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample1">
                <div
                    class="row align-items-center justify-content-between mt-5">
                    <div class="col-lg-5">
                        <h6 class="text-primary ms-3">People also ask :
                        </h6>
                        <p class="ms-3 mb-4">In this detailed guide, we're going
                            to dive deep into the whole concept of FAQs. To
                            discover their main purpose.</p>
                        <!-- ...........accordion part one............... -->
                        <div class="accordion-item  border-bottom rounded-0">
                            <h6 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed py-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne"
                                    aria-expanded="false"
                                    aria-controls="collapseOne">
                                    How Benefit That I Got When Choose Basic
                                    Plan
                                </button>
                            </h6>
                            <!-- accordion collapse -->
                            <div id="collapseOne"
                                class="accordion-collapse collapse shadow-sm"
                                aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <span class="text-muted">Contrary to this, individuals above
                                        this tax bracket of 30% can benefit from
                                        low basic pay. This
                                        is because the superannuation or
                                        retirement benefits have to be
                                        approximately 27% of the basic pay.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- ...........accordion part two............... -->
                        <div class="accordion-item border-bottom">
                            <h6 class="accordion-header" id="headingTwo">
                                <button class="accordion-button py-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo"
                                    aria-expanded="true"
                                    aria-controls="collapseTwo">
                                    How Do I Organize My Notes?
                                </button>
                            </h6>
                            <!-- accordion collapse -->
                            <div id="collapseTwo"
                                class="accordion-collapse collapse show shadow-sm"
                                aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <span class="text-muted">Try using coloured paper so that all
                                        related notes are made on sheets of the
                                        same colour. Some
                                        notebooks have sections in different
                                        colours and have the advantage of
                                        keeping all your notes in one
                                        place.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- ...........accordion part three............... -->
                        <div class="accordion-item border-bottom">
                            <h6 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed py-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How Long For A Standard Project
                                </button>
                            </h6>
                            <!-- accordion collapse -->
                            <div id="collapseThree"
                                class="accordion-collapse collapse shadow-sm"
                                aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <span class="text-muted">Typically, an average project will
                                        take in the region of three four months.
                                        Some of our projects
                                        are small, fully specified and are
                                        completed in four six weeks. Others can
                                        take six months or much
                                        longer.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- ...........accordion part four............... -->
                        <div class="accordion-item  rounded-0">
                            <h6 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed py-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour"
                                    aria-expanded="false"
                                    aria-controls="collapseFour">
                                    How About Data Security & NDA Agreement
                                </button>
                            </h6>
                            <!-- accordion collapse -->
                            <div id="collapseFour"
                                class="accordion-collapse collapse shadow-sm"
                                aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <span class="text-muted">The lifeblood of your business is the
                                        data you generate, transform, store, and
                                        move. Take a
                                        silicon-to-cloud approach to securing
                                        your data infrastructure spanning
                                        clouds, data centers, and
                                        edges while also helping to protect
                                        against ransomware attacks.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-box shadow-none rounded-2">
                            <div
                                class="row align-items-center justify-content-between">
                                <div class="col-lg-12">
                                    <div class="custom-form p-3">
                                        <h5 class="pb-5 text-primary">Ask your
                                            different questions :</h5>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <input name="name"
                                                            id="name"
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Name"
                                                            required />
                                                    </div>
                                                </div>
                                                <!-- col end -->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <input name="email"
                                                            id="email"
                                                            type="email"
                                                            class="form-control"
                                                            placeholder="Email"
                                                            required />
                                                    </div>
                                                </div>
                                                <!-- col end -->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <input type="text"
                                                            class="form-control"
                                                            id="subject"
                                                            placeholder="Subject"
                                                            required />
                                                    </div>
                                                </div>
                                                <!-- col end -->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <textarea
                                                            name="comments"
                                                            id="comments"
                                                            rows="5"
                                                            class="form-control"
                                                            required
                                                            placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <!-- col end -->
                                            </div>
                                            <!-- row end -->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button type="submit"
                                                        class="btn btn-primary fs-6">
                                                        Send Message
                                                    </button>
                                                </div>
                                                <!-- col end -->
                                            </div>
                                            <!-- row end -->
                                        </form>
                                    </div>
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- row end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section testimonial-section bg-light" id="testimonial">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="title-sm">
                        <span>Our Clients</span>
                    </div>
                    <div class="section-title-border mt-3"></div>
                    <div class="client-title mt-4">
                        <h2 class="fw-semibold text-primary">What Our Clients Say</h2>
                    </div>
                </div>
            </div>
            <div
            class="row align-items-center justify-content-center text-center g-4 mt-4">
            <div class="col-lg-2 col-6">
                <a href="#!">
                    <img src="{{ asset('backend/assets/images/logo/amazon.svg') }}" alt=""
                        class="img-fluid brand-logo">
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#!">
                    <img src="{{ asset('backend/assets/images/logo/google.svg') }}" alt=""
                        class="img-fluid brand-logo">
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#!">
                    <img src="{{ asset('backend/assets/images/logo/lenovo.svg') }}" alt=""
                        class="img-fluid brand-logo">
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#!">
                    <img src="{{ asset('backend/assets/images/logo/paypal.svg') }}" alt=""
                        class="img-fluid brand-logo">
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#!">
                    <img src="{{ asset('backend/assets/images/logo/shopify.svg') }}" alt=""
                        class="img-fluid brand-logo">
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="#!">
                    <img src="{{ asset('backend/assets/images/logo/spotify.svg') }}" alt=""
                        class="img-fluid brand-logo">
                </a>
            </div>
        </div>
            <div class="row align-items-center justify-content-center mt-5 pt-2">
                <!--end col-->
                <div class="col-lg-12">
                    <!-- Swiper -->
                    <div class="swiper-container testi-slider pb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="d-flex p-4 text-start shadow-sm">
                                    <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="" class="me-3 rounded-circle" width="50px" height="50px">
                                    <div class="icon-text-2 ms-3">
                                        <i class="ri-chat-check-line text-success"></i>
                                        <p class="text-muted m-0 fs-xl">"Our task must be to free ourselves by widening our site circle of
                                            compassion to embrace all living creatures."</p>
                                        <ul class="text-warning my-2 d-flex ps-0">
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                    </ul>
                                    <h5 class="fw-semibold mb-0 mt-2 text-primary">Metho k. Partho</h5>
                                    <small class="text-muted">Canada</small>
                                    </div>
                                </div>
                                <!--end testi-box-->
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex p-4 text-start shadow-sm">
                                    <img src="{{ asset('backend/assets/images/users/avatar-2.jpg') }}" alt="" class="me-3 rounded-circle" width="50px" height="50px">
                                    <div class="icon-text-2 ms-3">
                                        <i class="ri-chat-check-line text-success"></i>
                                        <p class="text-muted m-0 fs-xl">"Our task must be to free ourselves by widening our site circle of
                                            compassion to embrace all living creatures."</p>
                                        <ul class="text-warning my-2 d-flex ps-0">
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                    </ul>
                                    <h5 class="fw-semibold mb-0 mt-2 text-primary">Merry J. Wyman</h5>
                                    <small class="text-muted">New Zealand</small>
                                    </div>
                                </div>
                                <!--end testi-box-->
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex p-4 text-start shadow-sm">
                                    <img src="{{ asset('backend/assets/images/users/avatar-3.jpg') }}" alt="" class="me-3 rounded-circle" width="50px" height="50px">
                                    <div class="icon-text-2 ms-3">
                                        <i class="ri-chat-check-line text-success"></i>
                                        <p class="text-muted m-0 fs-xl">"Our task must be to free ourselves by widening our site circle of
                                            compassion to embrace all living creatures."</p>
                                        <ul class="text-warning my-2 d-flex ps-0">
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                    </ul>
                                    <h5 class="fw-semibold mb-0 mt-2 text-primary">Anthom Bu Spar</h5>
                                    <small class="text-muted">Australia</small>
                                    </div>
                                </div>
                                <!-- end testi-box -->
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex p-4 text-start shadow-sm">
                                    <img src="{{ asset('backend/assets/images/users/avatar-5.jpg') }}" alt="" class="me-3 rounded-circle" width="50px" height="50px">
                                    <div class="icon-text-2 ms-3">
                                        <i class="ri-chat-check-line text-success"></i>
                                        <p class="text-muted m-0 fs-xl">"Our task must be to free ourselves by widening our site circle of
                                            compassion to embrace all living creatures."</p>
                                        <ul class="text-warning my-2 d-flex ps-0">
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                        <li><i class="ri-star-s-fill"></i>
                                        </li>
                                    </ul>
                                    <h5 class="fw-semibold mb-0 mt-2 text-primary">Jhon k. Matro</h5>
                                    <small class="text-muted">Marshall Islands</small>
                                    </div>
                                </div>
                                <!--end testi-box-->
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!--end col-->
            </div>  
        </div>
    </section>

    <section class="cta-section py-5 z-1" id="contacts">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="cta-title text-center">
                        <h2 class="fw-semibold text-white lh-base">Free to start, and affordable as you grow</h2>
                        <p>Contact Us and we'll get in touch</p>
                    </div>
                    <div class="cta-btn text-center">
                        <a href="#!" class="btn btn-success btn-lg">Request Access</a>
                        <a href="#!" class="btn btn-primary ms-2 btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('backend/assets/images/sssplatter.svg') }}" alt="" class="img-fluid position-absolute top-0 start-100 translate-middle z-n1">
        <img src="{{ asset('backend/assets/images/sssplatter.svg') }}" alt="" class="img-fluid position-absolute top-0 start-0 translate-middle z-n1">
    </section>

    <footer class="section footer-part-3 py-5 footer-part">
        <div class="container">
            <div class="row my-5 justify-content-between">
                <div class="col-lg-3 align-self-start">
                    <div class="logo">
                        <a class="fs-4 text-light ls-1 fw-bold"
                            href="#!"></i><i
                                class="ri-registered-fill text-success fs-3 sme-1"></i>TRIPE
                        </a>
                    </div>
                    <div class="d-flex mt-4">
                        <i class="ri-phone-fill text-light"></i>
                        <a href="#!" class="text-white-50 ms-3 fs-xl"></i>- 123-4567-890</a>
                    </div>
                    <div class="d-flex mt-3">
                        <i class="ri-mail-send-fill text-light"></i>
                        <a href="#!" class="text-white-50 ms-3 fs-xl"></i>- support@tripe.com</a>
                    </div>
                    <div class="footer-icon-3 ms-lg-auto me-lg-5">
                        <ul class="d-flex mt-4">
                            <li>
                                <a href="#!" class="text-light me-2"><i
                                        class="ri-facebook-fill p-2 border rounded-circle text-white-50"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="text-light mx-2"><i
                                        class="ri-instagram-fill p-2 border rounded-circle text-white-50"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="text-light mx-2"><i
                                        class="ri-twitter-fill p-2 border rounded-circle text-white-50"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="text-light mx-2"><i
                                        class="ri-github-fill p-2 border rounded-circle text-white-50"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="text-light mx-2"><i
                                        class="ri-google-fill p-2 border rounded-circle text-white-50"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12">
                    <h5 class="text-light">Pages : </h5>
                    <ul class="list-unstyled mt-4">
                        <li><a href="#!" class="text-white-50">About</a></li>
                        <li><a href="#!" class="text-white-50">Brand</a></li>
                        <li><a href="#!" class="text-white-50">Services</a></li>
                        <li><a href="#!" class="text-white-50"> Price</a></li>
                        <li><a href="#!" class="text-white-50">Testimonial </a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-12">
                    <h5 class="text-light fs-5">Usefull Links :</h5>
                    <ul class="list-unstyled mt-4">
                        <li><a href="#!" class="text-white-50">Terms
                                of
                                Services</a></li>
                        <li><a href="#!" class="text-white-50">Privacy
                                Policy</a></li>
                        <li><a href="#!" class="text-white-50">Documentation</a>
                        </li>
                        <li><a href="#!" class="text-white-50">
                                Changelog</a></li>
                        <li><a href="#!" class="text-white-50">Components
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-light">Subscribe to our App : </h5>
                    <div class="form-button mt-4">
                        <form action=""
                            class="d-flex align-items-center ">
                            <input type="email" class="form-control"
                                placeholder="Enter email">
                            <a href="#!" class="me-2"><i
                                    class="ri-send-plane-2-line"></i></a>
                        </form>
                    </div>
                    <div class="d-flex mt-4">
                        <i class="ri-twitter-fill fs-5 me-3 text-success"></i>
                        <p class="text-white-50">Greater pleasures el esndures pains avoid welcomed avoided pariatu.</p>
                    </div>
                    <a href="#!" class="text-light">Learn More !</a>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-copyright py-3 bg-dark">
        <div class="copy-info text-center text-white-50">
          <div class="copy-info text-center text-white-50">
            © 
            <script>document.write(new Date().getFullYear())</script> Tripe - <a href="#" class="text-white-50 text-decoration-underline">By VENIHOST
            </a>
          </div>
        </div>
    </div>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('backend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    <script src="{{ asset('backend/assets/js/star.js') }}"></script>
    <script src="{{ asset('backend/assets/js/swipar.js') }}"></script>

</body>
</html>