@extends('front.layouts.app')
@section('title', 'About')

@section('content')

    {{-- breadcrumb --}}
    <section class="w-100 bg-warning-subtle">
        <div class="container">
            <div class="d-flex justify-content-start align-items-center height-350">
                <div>
                    <div class="fs-1 fw-bold text-theme-secondary mb-3 d-block"> About Us </div>

                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('front.home')}}" class="text-decoration-none text-dark">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="{{route('front.about')}}" class="text-decoration-none text-theme">
                                    About
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    {{-- welcome to our online platform --}}
    <section class="w-100 bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-2 p-lg-5">
                    <div class="position-relative">
                        <div class="position-absolute start-0 bottom-0 p-3 d-none d-lg-inline">
                            <img src="{{asset('/images/about/about-top-left.jpg')}}" class="img-fluid width-250 border border-white border-5 shadow rounded-4" alt="about-top-left">
                        </div>
                        <img src="{{asset('/images/about/about-cover.jpg')}}" class="img-fluid rounded-4" alt="about-cover">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fs-1 fw-bold text-theme-secondary mb-3"> Welcome to Our Online Learning Platform </div>
                    <div class="lead mb-4">
                        Continuously harmless backward competitive initiatives and synergistic content.
                        Objectively strategize cutting edge niches with collaborative synergistic.
                        Globally pontificate e-business processes through orthoonal web readiness enhence
                        backend value whereas bricks-and-clicks services
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-start lead">
                        <img src="{{asset('/images/svg/about/check-circle.svg')}}" class="width-21 height-21 me-2" alt="check-circle">
                        Dramatically re-engineer value added systems via mission
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-start lead">
                        <img src="{{asset('/images/svg/about/check-circle.svg')}}" class="width-21 height-21 me-2" alt="check-circle">
                        Our Unique learning environment sparks physical growth
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-start lead">
                        <img src="{{asset('/images/svg/about/check-circle.svg')}}" class="width-21 height-21 me-2" alt="check-circle">
                        Discovery while our creative curriculum which combines
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- box content --}}
    <section class="w-100 py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                <div class="p-1">
                    <div class="bg-secondary-subtle d-flex justify-content-start align-items-center p-4 rounded-3">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-secondary">
                            <img src="{{asset('/images/svg/home/pencil-ruler.svg')}}" class="width-25 height-25"
                                 alt="box-icon-1">
                        </div>
                        <div class="ms-2">
                            <div class="fw-bold fs-4"> 1K</div>
                            <div class="text-secondary fs-6"> Online Courses</div>
                        </div>
                    </div>
                </div>
                <div class="p-1">
                    <div class="bg-secondary-subtle d-flex justify-content-start align-items-center p-4 rounded-3">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-light-pink">
                            <img src="{{asset('/images/svg/home/people.svg')}}" class="width-25 height-25"
                                 alt="box-icon-2">
                        </div>
                        <div class="ms-2">
                            <div class="fw-bold fs-4"> 28+</div>
                            <div class="text-secondary fs-6"> Expert Tutors</div>
                        </div>
                    </div>
                </div>
                <div class="p-1">
                    <div class="bg-secondary-subtle d-flex justify-content-start align-items-center p-4 rounded-3">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-light-purple">
                            <img src="{{asset('/images/svg/home/certified.svg')}}" class="width-25 height-25"
                                 alt="box-icon-3">
                        </div>
                        <div class="ms-2">
                            <div class="fw-bold fs-4"> 1K +</div>
                            <div class="text-secondary fs-6"> Certified Courses</div>
                        </div>
                    </div>
                </div>
                <div class="p-1">
                    <div class="bg-secondary-subtle d-flex justify-content-start align-items-center p-4 rounded-3">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-light-info">
                            <img src="{{asset('/images/svg/home/morterboard.svg')}}" class="width-25 height-25"
                                 alt="box-icon-4">
                        </div>
                        <div class="ms-2">
                            <div class="fw-medium"> 8K+</div>
                            <div class="text-secondary"> Online Students</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
