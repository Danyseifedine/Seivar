@extends('layouts.master')

@section('title', 'Seivar - Full-Service Lebanese Contracting Agency')

@section('content')
<!-- Hero Section Start -->
<section class="hero-area-4 py-128 black-100-bg">
    <div class="container">
        <div class="carousel slide" id="recipe4Carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="row carousel-item active">
                    <div class="giant-text">DESIGN</div>
                    <div class="row">
                        <div class="col-md-5 hero3-content wow fadeInUp delay-0-1s">
                            <h4 class="mt-160">Creating spaces that are art and science mixed in perfect harmony</h4>
                            <div class="buttons mt-96">
                                <a class="theme-btn" href="#projects">View Projects</a>
                                <a class="light-btn" href="#contact">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-7 hero4-img">
                            <a href="#projects">
                                <img class="hero-img wow zoomIn" src="{{ asset('assets/images/hero/hero-1.webp') }}" alt="hero image" title="hero image" fetchpriority="high" width="821" height="547">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row carousel-item">
                    <div class="giant-text">INVENT</div>
                    <div class="row">
                        <div class="col-md-5 hero3-content">
                            <h4 class="mt-160">Creating spaces that are art and science mixed in perfect harmony</h4>
                            <div class="buttons mt-96">
                                <a class="theme-btn" href="#projects">View Projects</a>
                                <a class="light-btn" href="#contact">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-7 hero4-img">
                            <a href="#projects">
                                <img class="hero-img" src="{{ asset('assets/images/hero/hero-2.webp') }}" alt="hero image" title="hero image" loading="lazy" width="821" height="547">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row carousel-item">
                    <div class="giant-text">INTERIOR</div>
                    <div class="row">
                        <div class="col-md-5 hero3-content">
                            <h4 class="mt-160">Creating spaces that are art and science mixed in perfect harmony</h4>
                            <div class="buttons mt-96">
                                <a class="theme-btn" href="#projects">View Projects</a>
                                <a class="light-btn" href="#contact">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-7 hero4-img">
                            <a href="#projects">
                                <img class="hero-img" src="{{ asset('assets/images/hero/hero-3.webp') }}" alt="hero image" title="hero image" loading="lazy" width="821" height="547">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#recipe4Carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#recipe4Carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#recipe4Carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->



<!-- About Start -->
<section class="about-area-2 py-128 black-120-bg" id="about">
    <div class="container">
        <div class="d-flex section-heading mb-64">
            <div class="section-title">
                <h1 class="wow fadeInUp delay-0-2s">Where Creativity And Luxury Meets Functionality</h1>
            </div>
        </div>
        <div class="row mb-64">
            <img src="{{ asset('assets/images/about/about.webp') }}" alt="about image" loading="lazy">
        </div>
        <div class="row gap-64">
            <div class="col-md-12 col-lg-6">
                <div class="counter-wrap">
                <div class="row gap-64">
                    <div class="mobile-mr col-sm-4">
                        <div class="counter-text-wrap wow fadeInUp delay-0-2s">
                            <div class="d-flex">
                                <h3 class="count-text mb-32" data-speed="3000" data-stop="{{ $countProjects }}">0</h3>
                            </div>
                            <h6 class="counter-title">Projects Done</h6>
                        </div>
                    </div>
                    <div class="mobile-mr col-sm-4">
                        <div class="counter-text-wrap wow fadeInUp delay-0-2s">
                            <div class="d-flex">
                                <h3 class="count-text mb-32" data-speed="3000" data-stop="10">0</h3><span class="h3">+</span>
                            </div>
                            <h6 class="counter-title">Years Experience</h6>
                        </div>
                    </div>
                    <div class="mobile-mr col-sm-4">
                        <div class="counter-text-wrap wow fadeInUp delay-0-2s">
                            <div class="d-flex">
                                <h3 class="count-text mb-32" data-speed="3000" data-stop="100">0</h3><span class="h3">%</span>
                            </div>
                            <h6 class="counter-title">Satisfaction</h6>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-12 col-lg-6 about2-content">
                <div class="wow fadeInUp delay-0-4s mb-32">
                    <ul class="tab-style-one nav nav-pills nav-fill mb-32 wow fadeInUp delay-0-4s">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#apart-tap1">Who We Are</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#apart-tap2">Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#apart-tap3">Vision</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="apart-tap1">
                            <p>Seivar is a full-service Lebanese contracting agency specializing in façade renovation, interior transformation, and infrastructure coordination. We connect the dots between design, execution, and delivery—seamlessly.
</p>
                        </div>
                        <div class="tab-pane fade" id="apart-tap2">
                            <p>To elevate spaces with precision, integrity, and bold craftsmanship—empowering clients through transparent execution and lasting value.
</p>
                        </div>
                        <div class="tab-pane fade" id="apart-tap3">
                            <p>To become Lebanon’s most trusted connector in construction—where every project is a symbol of strength, coordination, and architectural excellence.
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

<!-- Service Section Start -->
<section class="service-area-2 black-100-bg py-128">
    <div class="container">
        <div class="d-flex section-heading mb-96">
            <div class="section-title">
                <h2 class="wow fadeInUp delay-0-2s">Services</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 item mb-5">
                <div class="row align-items-center mb-64">
                    <div class="text">
                        <a href="#projects"><h3>Renovation</h3></a>
                        <p class="mt-16">Upgrade your home, office, or facility with our turnkey renovation services—from structural reworks to high-end finishes.
</p>
                    </div>
                    <div class="giant-text one">01</div>
                </div>
            </div>
            <div class="col-12 col-md-4 item mb-5">
                <div class="row align-items-center mb-64">
                    <div class="text">
                        <a href="#projects"><h3>Façade Works
</h3></a>
                        <p class="mt-16">We specialize in façade restoration, mechanical cladding, and exterior upgrades that enhance both performance and curb appeal.
</p>
                    </div>
                    <div class="giant-text">02</div>
                </div>
            </div>
            <div class="col-12 col-md-4 item mb-5">
                <div class="row align-items-center mb-64">
                    <div class="text">
                        <a href="#projects"><h3>Interior Design & Execution</h3></a>
                        <p class="mt-16">From concept to completion, we deliver functional, aesthetic interiors tailored to your lifestyle or brand identity.
</p>
                    </div>
                    <div class="giant-text">03</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Home  Projects Area start -->
<section class="home4project py-128 black-120-bg" id="projects">
    <div class="container">
        <div class="row rel z-1 justify-content-center">
            <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">
                <span class="sub-title mb-16">PROJECTS</span>
                <h2>Latest Works</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row project-active gap-96">
            @foreach ($projects as $project)
                <x-project-card :project="$project" />
            @endforeach
        </div>
    </div>
</section>
<!-- Home  Projects Area end -->

<!-- FAQ Area start -->
<section class="faq-area py-128 black-100-bg" id="faq">
    <div class="container">
        <div class="section-title mb-96">
            <p class="category-line">FAQ</p>
            <h2 class="wow fadeInUp delay-0-2s">Frequently Asked Questions</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-12 faq">
                <div class="accordion" id="accordionFaq">
                    <div class="accordion-item">
                        <div class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What types of projects do you handle?
                            </button>
                        </div>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                We manage residential, commercial, and institutional projects—covering renovation, façade work, interiors, and infrastructure.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Do you work with subcontractors?
                            </button>
                        </div>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                Yes. We coordinate trusted subcontractors and specialists to ensure seamless execution and accountability.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Can I get a consultation before committing?
                            </button>
                        </div>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFaq">
                          <div class="accordion-body">
                              Absolutely. We offer free consultations to understand your needs and provide tailored recommendations.
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Area start -->
<section class="contact-area py-128 black-120-bg" id="contact">
    <div class="container">
        <div class="row justify-content-between align-items-center contact-content gap-30">
            <div class="col-lg-6 ct-form wow fadeInRight delay-0-2s">
                <form id="contactForm" class="contact-form rmt-55 contactForm" action="{{ route('contact.store') }}" name="contactForm" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="name" name="name" class="form-control" value="" placeholder="Name" >
                        <div class="error-message" id="name-error"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email" >
                        <div class="error-message" id="email-error"></div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="9" placeholder="Message" ></textarea>
                        <div class="error-message" id="message-error"></div>
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="contact-btn" id="submit-btn">Send a message</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 right wow fadeInLeft delay-0-2s">
                <div class="text-bg">
                    <div class="giant-text rotate">MESSAGE</div>
                </div>
                <img src="{{ asset('assets/images/contact/contact.png') }}" alt="contact image">
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Area end -->
@endsection

@push('scripts')
<!-- Contact Form Validation Script -->
<script src="{{ asset('assets/js/contact-form.js') }}"></script>
@endpush
