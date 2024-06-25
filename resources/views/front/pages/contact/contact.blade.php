@extends('front.layouts.app')
@section('title', 'Contact')

@section('content')

    {{-- Breadcrumb --}}
    <section class="w-100 bg-warning-subtle">
        <div class="container">
            <div class="d-flex justify-content-start align-items-center height-350">
                <div>
                    <div class="fs-1 fw-bold text-theme-secondary mb-3 d-block"> Contact Us</div>

                    <nav
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
    <section class="w-100 py-5">
        <div class="container py-5">
            <div class="mb-4 fw-bold text-center fs-1">
                Get In Touch With Us
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2">
                <div class="p-3">
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
                            <div class="d-block fw-bold text-theme-secondary">
                                Our Address
                            </div>
                            <div class="text-secondary">
                                32D, Jenmark road, Franklin, USA
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3">
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
                            <div class="d-block fw-bold text-theme-secondary">
                                Contact
                            </div>
                            <div class="text-secondary">
                                +1(135) 1984 2020
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3">
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
                            <div class="d-block fw-bold text-theme-secondary">
                                House of Operations
                            </div>
                            <div class="text-secondary">
                                (8 AM - 7 PM, Monday - Friday)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3">
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
                            <div class="d-block fw-bold text-theme-secondary">
                                Email
                            </div>
                            <div class="text-secondary">
                                example@example.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Ready To Get Started? Fill up the form and our team contact with you --}}
    <section class="w-100 py-5">
        <div class="container py-5">
            <div class="d-flex justify-content-center">
                <div class="mb-4 fw-bold text-center fs-1 col-lg-8">
                    Ready To Get Started? Fill up the form and our team contact with you
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" type="text" name="name" placeholder="Enter your name"
                                   class="form-control p-3 rounded-2 shadow-none bg-light" required
                                   autocomplete="new-email">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="website-url" class="form-label">Website</label>
                        <input id="website-url" type="url" name="website-url" placeholder="Enter your website"
                               class="form-control p-3 rounded-2 shadow-none bg-light" required
                               autocomplete="new-website-url">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" placeholder="Enter your email"
                                   class="form-control p-3 rounded-2 shadow-none bg-light" required
                                   autocomplete="new-email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input id="subject" type="text" name="subject" placeholder="Enter your subject"
                                   class="form-control p-3 rounded-2 shadow-none bg-light" required
                                   autocomplete="new-subject">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5"
                                      class="form-textarea p-3 rounded-2 shadow-none bg-light d-block w-100"
                                      required placeholder="Typing Here..."
                                      autocomplete="new-message"></textarea>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-theme rounded-pill px-5 py-3">
                            Send Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>



@endsection
