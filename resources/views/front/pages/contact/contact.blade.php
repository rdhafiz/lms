@extends('front.layouts.app')
@section('title', 'Contact')

@section('content')

    {{-- Breadcrumb --}}
    <section class="w-100 bg-warning-subtle" data-aos="fade-up">
        <div class="container">
            <div class="d-flex justify-content-start align-items-center height-350">
                <div>

                    <h1 class="fs-1 fw-bold text-theme-secondary mb-3 d-block" data-aos="fade-up" data-aos-delay="100">
                        Contact Us
                    </h1>

                    <nav data-aos="fade-up" data-aos-delay="200"
                        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('front.home')}}" class="text-decoration-none text-dark">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="{{route('front.contact')}}" class="text-decoration-none text-theme">
                                    Contact
                                </a>
                            </li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </section>

    {{-- Get in touch with us --}}
    <section class="w-100 py-5" data-aos="fade-up">
        <div class="container py-5">

            <h1 class="mb-4 fw-bold text-center fs-1" data-aos="fade-up" data-aos-delay="100">
                Get In Touch With Us
            </h1>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2">

                {{-- Address --}}
                <div class="p-3" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="shadow p-2 p-sm-5 bg-size-cover object-fit-cover bg-repeat-none d-flex align-items-center justify-content-start"
                        style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div class="me-3">
                            <div
                                class="width-65 height-65 d-flex justify-content-center align-items-center bg-light-info rounded-circle">
                                <img src="{{asset('/images/svg/about/geo-alt.svg')}}" class="width-25 height-25"
                                     alt="geo-alt">
                            </div>
                        </div>
                        <div>
                            <p class="d-block fw-bold text-theme-secondary pb-0 mb-0">
                                Our Address
                            </p>
                            <p class="text-secondary pb-0 mb-0">
                                32D, Jenmark road, Franklin, USA
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Contact --}}
                <div class="p-3" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="shadow p-2 p-sm-5 bg-size-cover object-fit-cover bg-repeat-none d-flex align-items-center justify-content-start"
                        style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div class="me-3">
                            <div
                                class="width-65 height-65 d-flex justify-content-center align-items-center bg-light-pink rounded-circle">
                                <img src="{{asset('/images/svg/about/telephone.svg')}}" class="width-25 height-25"
                                     alt="telephone">
                            </div>
                        </div>
                        <div>
                            <p class="d-block fw-bold text-theme-secondary pb-0 mb-0">
                                Contact
                            </p>
                            <p class="text-secondary pb-0 mb-0">
                                +1(135) 1984 2020
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Operation time --}}
                <div class="p-3" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="shadow p-2 p-sm-5 bg-size-cover object-fit-cover bg-repeat-none d-flex align-items-center justify-content-start"
                        style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div class="me-3">
                            <div
                                class="width-65 height-65 d-flex justify-content-center align-items-center bg-light-purple rounded-circle">
                                <img src="{{asset('/images/svg/about/clock.svg')}}" class="width-25 height-25"
                                     alt="clock">
                            </div>
                        </div>
                        <div>
                            <p class="d-block fw-bold text-theme-secondary pb-0 mb-0">
                                House of Operations
                            </p>
                            <p class="text-secondary pb-0 mb-0">
                                (8 AM - 7 PM, Monday - Friday)
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Email --}}
                <div class="p-3" data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="shadow p-2 p-sm-5 bg-size-cover object-fit-cover bg-repeat-none d-flex align-items-center justify-content-start"
                        style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div class="me-3">
                            <div
                                class="width-65 height-65 d-flex justify-content-center align-items-center bg-secondary rounded-circle">
                                <img src="{{asset('/images/svg/about/envelope.svg')}}" class="width-25 height-25"
                                     alt="clock">
                            </div>
                        </div>
                        <div>
                            <p class="d-block fw-bold text-theme-secondary pb-0 mb-0">
                                Email
                            </p>
                            <p class="text-secondary pb-0 mb-0">
                                example@example.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Ready To Get Started? Fill up the form and our team contact with you --}}
    <section class="w-100 py-5" data-aos="fade-up">
        <div class="container py-5">
            <div class="d-flex justify-content-center">
                <div class="mb-4 fw-bold text-center fs-1 col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    Ready To Get Started? Fill up the form and our team contact with you
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" type="text" name="name" placeholder="Enter your name"
                                   class="form-control p-3 rounded-2 shadow-none bg-light" required
                                   autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <label for="website-url" class="form-label">Website</label>
                        <input id="website-url" type="url" name="website-url" placeholder="Enter your website"
                               class="form-control p-3 rounded-2 shadow-none bg-light" required
                               autocomplete="off">
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" placeholder="Enter your email"
                                   class="form-control p-3 rounded-2 shadow-none bg-light" required
                                   autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="form-group mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input id="subject" type="text" name="subject" placeholder="Enter your subject"
                                   class="form-control p-3 rounded-2 shadow-none bg-light" required
                                   autocomplete="off">
                        </div>
                    </div>
                    <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                        <div class="form-group mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5"
                                      class="form-textarea p-3 rounded-2 shadow-none bg-light d-block w-100"
                                      required placeholder="Typing Here..."
                                      autocomplete="off"></textarea>
                        </div>
                    </div>
                    <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="700">
                        <button type="submit" class="btn btn-theme rounded-pill px-5 py-3">
                            Send Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    {{-- Join our community of students --}}
    <section class="w-100 py-5" data-aos="fade-up">
        <div class="container">
            <div class="bg-light-pink px-4 rounded-3 py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="fs-1 text-white" data-aos="fade-up" data-aos-delay="100">
                            Join our community of students
                        </div>
                    </div>
                    <div class="col-lg-6 py-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="position-relative">
                            <label for="newsletter" hidden="hidden">email</label>
                            <input id="newsletter" type="email" name="email" class="form-control shadow-none py-3 ps-4 rounded-0 rounded-pill" required
                                   autocomplete="off" placeholder="Enter your Email">
                            <div class="position-absolute top-50 end-0 translate-middle-y pe-3">
                                <button type="submit" class="btn btn-theme rounded-pill px-4">
                                    <span class="d-none d-sm-inline me-1">Subscribe</span>
                                    <span>
                                        <img src="{{asset('/images/svg/home/send.svg')}}" class="width-21 height-21"
                                             alt="send">
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
