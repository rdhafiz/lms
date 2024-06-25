@extends('front.layouts.app')
@section('title', 'Courses')

@section('content')

    {{-- Breadcrumb --}}
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
                                <a href="{{route('front.courses')}}" class="text-decoration-none text-theme">
                                    Courses
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    {{-- course --}}
    <section class="w-100 py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">

                    {{-- search course --}}
                    <div class="position-relative">
                        <input type="text" name="keyword"
                               class="form-control shadow-none py-3 ps-5 rounded-0 rounded-pill" required
                               autocomplete="new-keyword" placeholder="Search Courses">
                        <div class="position-absolute top-50 start-0 translate-middle-y ps-3">
                            <img src="{{asset('/images/svg/home/search.svg')}}" class="width-25 height-25" alt="search">
                        </div>
                        <div
                            class="position-absolute top-50 end-0 translate-middle-y pe-2 d-flex justify-content-end align-items-center">

                            {{-- course category --}}
                            <div class="dropdown">
                                <button type="button" class="btn height-40 bg-opacity-theme px-4 border-0 rounded-pill"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="text-theme me-1 d-none d-sm-inline"> Category </span>
                                    <img src="{{asset('/images/svg/home/chevron-down.svg')}}" class="width-18 height-18"
                                         alt="">
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            Basic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            Intermediate
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">
                                            Advanced
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            {{-- course submit action --}}
                            <button type="submit"
                                    class="btn btn-theme width-40 height-40 ms-1 rounded-circle d-flex justify-content-center align-items-center">
                                <img src="{{asset('/images/svg/home/arrow-right.svg')}}"
                                     class="img-fluid width-25 height-25" alt="arrow-right">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- courses list --}}
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 mt-5">
                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-1.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3">
                                <div class="d-flex justify-content-center align-items-center gap-3 mb-4 flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/play.svg')}}" class="width-12 height-12"
                                                 alt="play">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 20 videos</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 1K reviews</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 2K students</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-opacity-theme">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-2.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-2">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3">
                                <div class="d-flex justify-content-center align-items-center gap-3 mb-4 flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/play.svg')}}" class="width-12 height-12"
                                                 alt="play">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 20 videos</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 1K reviews</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 2K students</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-opacity-theme">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-3.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-3">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3">
                                <div class="d-flex justify-content-center align-items-center gap-3 mb-4 flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/play.svg')}}" class="width-12 height-12"
                                                 alt="play">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 20 videos</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 1K reviews</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 2K students</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-opacity-theme">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-4.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-4">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3">
                                <div class="d-flex justify-content-center align-items-center gap-3 mb-4 flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/play.svg')}}" class="width-12 height-12"
                                                 alt="play">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 20 videos</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 1K reviews</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 2K students</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-opacity-theme">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-5.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-5">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3">
                                <div class="d-flex justify-content-center align-items-center gap-3 mb-4 flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/play.svg')}}" class="width-12 height-12"
                                                 alt="play">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 20 videos</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 1K reviews</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 2K students</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-opacity-theme">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-6.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-6">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3">
                                <div class="d-flex justify-content-center align-items-center gap-3 mb-4 flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/play.svg')}}" class="width-12 height-12"
                                                 alt="play">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 20 videos</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 1K reviews</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <div class="ms-2 text-secondary text-opacity-75 small"> 2K students</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-opacity-theme">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">

                {{-- course pagination --}}
                <nav aria-label="Page navigation example">
                    <ul class="pagination d-flex justify-content-center align-items-center">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                <img src="{{asset('/images/svg/courses/chevron-left-double.svg')}}" class="width-25 height-25" alt="chevron-left-double">
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                1
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">
                                2
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                3
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                4
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                <img src="{{asset('/images/svg/courses/chevron-right-double.svg')}}" class="width-25 height-25" alt="chevron-right-double">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    {{-- Join our community of students --}}
    <section class="w-100 py-5">
        <div class="container">
            <div class="bg-light-pink px-4 rounded-3 py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="fs-1 text-white ">
                            Join our community of students
                        </div>
                    </div>
                    <div class="col-lg-6 py-3">
                        <div class="position-relative">
                            <input type="email" name="email" class="form-control shadow-none py-3 ps-4 rounded-0 rounded-pill" required
                                   autocomplete="new-email" placeholder="Enter your Email">
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
