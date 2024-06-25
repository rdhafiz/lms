@extends('front.layouts.app')
@section('title', 'Home')

@section('content')

    {{-- hero content --}}
    <section class="w-100 bg-warning-subtle h-100">
        <div class="container py-5 pb-3">
            <div class="row py-5 justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8 col-xl-6 py-5">
                    <div class="lead fw-medium text-theme">
                        The leader in Online learning
                    </div>
                    <div class="fs-1 text-theme-secondary fw-bold my-3">
                        Build Your Skills and Achieve Your Goals
                    </div>
                    <div class="text-dark mb-4 fw-medium">
                        Experience seamless online learning with our user-friendly LMS website.
                        Explore our courses and improve your skills today.
                    </div>
                    <div class="position-relative">
                        <input type="text" name="keyword"
                               class="form-control shadow-none py-3 ps-5 rounded-0 rounded-pill" required
                               autocomplete="new-keyword" placeholder="Search Courses">
                        <div class="position-absolute top-50 start-0 translate-middle-y ps-3">
                            <img src="{{asset('/images/svg/home/search.svg')}}" class="width-25 height-25" alt="search">
                        </div>
                        <div
                            class="position-absolute top-50 end-0 translate-middle-y pe-2 d-flex justify-content-end align-items-center">
                            <div class="dropdown">
                                <button type="button" class="btn height-40 bg-opacity-theme px-4 border-0 rounded-pill"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="text-theme me-1 d-none d-sm-inline"> Category </span>
                                    <img src="{{asset('/images/svg/home/chevron-down.svg')}}" class="width-18 height-18"
                                         alt="chevron-down">
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
                            <button type="button"
                                    class="btn btn-theme width-40 height-40 ms-1 rounded-circle d-flex justify-content-center align-items-center">
                                <img src="{{asset('/images/svg/home/arrow-right.svg')}}"
                                     class="img-fluid width-25 height-25" alt="arrow-right">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-xl-flex justify-content-center align-items-center flex-wrap d-none">
                    <div
                        class="overflow-hidden rounded-circle width-300 height-300 border border-5 border-white mx-4 -mt-40">
                        <img src="{{asset('/images/home/young-woman.jpg')}}"
                             class="img-fluid object-fit-cover w-100 h-100" alt="young-woman">
                    </div>
                    <div
                        class="overflow-hidden rounded-circle width-150 height-150 border border-5 border-warning mx-4">
                        <img src="{{asset('/images/home/young-man.jpg')}}"
                             class="img-fluid object-fit-cover w-100 h-100" alt="young-man">
                    </div>
                    <div
                        class="overflow-hidden rounded-circle width-170 height-170 border border-5 border-secondary mx-4">
                        <img src="{{asset('/images/home/hold-project.jpg')}}"
                             class="img-fluid object-fit-cover w-100 h-100" alt="young-woman">
                    </div>
                    <div
                        class="overflow-hidden rounded-circle width-210 height-210 border border-5 border-info mx-4">
                        <img src="{{asset('/images/home/impression.jpg')}}"
                             class="img-fluid object-fit-cover w-100 h-100" alt="young-man">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- box content --}}
    <section class="w-100 py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

                {{-- box count of online courses --}}
                <div class="p-2">
                    <div class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-secondary">
                            <img src="{{asset('/images/svg/home/pencil-ruler.svg')}}" class="width-25 height-25"
                                 alt="box-icon-1">
                        </div>
                        <div class="ms-3">
                            <div class="fw-bold fs-4"> 1K</div>
                            <div class="text-secondary fw-medium"> Online Courses</div>
                        </div>
                    </div>
                </div>

                {{-- box count of expert tutors --}}
                <div class="p-2">
                    <div class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-light-pink">
                            <img src="{{asset('/images/svg/home/people.svg')}}" class="width-25 height-25"
                                 alt="box-icon-2">
                        </div>
                        <div class="ms-3">
                            <div class="fw-bold fs-4"> 28+</div>
                            <div class="text-secondary fw-medium"> Expert Tutors</div>
                        </div>
                    </div>
                </div>

                {{-- box count of certified courses --}}
                <div class="p-2">
                    <div class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-light-purple">
                            <img src="{{asset('/images/svg/home/certified.svg')}}" class="width-25 height-25"
                                 alt="box-icon-3">
                        </div>
                        <div class="ms-3">
                            <div class="fw-bold fs-4"> 1K +</div>
                            <div class="text-secondary fw-medium"> Certified Courses</div>
                        </div>
                    </div>
                </div>

                {{-- box count of online students --}}
                <div class="p-2">
                    <div class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-light-info">
                            <img src="{{asset('/images/svg/home/morterboard.svg')}}" class="width-25 height-25"
                                 alt="box-icon-4">
                        </div>
                        <div class="ms-3">
                            <div class="fw-bold fs-4"> 8K+</div>
                            <div class="text-secondary fw-medium"> Online Students</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Popular courses --}}
    <section class="w-100 py-5">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="mb-2 fs-1 fw-bold"> Popular courses</div>

                    <div class="text-dark fw-medium mb-3">
                        Experience seamless online learning with our user-friendly LMS website.
                        Explore our courses and improve your skills today.
                    </div>

                </div>

                {{-- courses route --}}
                <div class="col-lg-6 text-end mb-3">
                    <a href="{{route('front.courses')}}" class="btn btn-theme rounded-pill py-2 px-4">
                        View all courses
                    </a>
                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">

                {{-- course item --}}
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
                                    <a href="{{route('front.course-details')}}" class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- course item --}}
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
                                    <a href="{{route('front.course-details')}}" class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- course item --}}
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
                                    <a href="{{route('front.course-details')}}" class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- course item --}}
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
                                    <a href="{{route('front.course-details')}}" class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- course item --}}
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
                                    <a href="{{route('front.course-details')}}" class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- course item --}}
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
                                    <a href="{{route('front.course-details')}}" class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- top category --}}
    <section class="w-100 py-5">
        <div class="container py-5">

            <div class="mb-4 text-center fs-1 fw-bold">
                Top Categories
            </div>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

                {{-- course category --}}
                <div class="p-2">
                    <a href="javascript:void(0)" class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/pencil-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <div class="ms-3 fw-bold fs-6">
                            Art & Design
                        </div>
                    </a>
                </div>

                {{-- course category --}}
                <div class="p-2">
                    <a href="javascript:void(0)" class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/code-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <div class="ms-3 fw-bold fs-5">
                            Development
                        </div>
                    </a>
                </div>

                {{-- course category --}}
                <div class="p-2">
                    <a href="javascript:void(0)" class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/lifestyle-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <div class="ms-3 fw-bold fs-5">
                            Lifestyle
                        </div>
                    </a>
                </div>

                {{-- course category --}}
                <div class="p-2">
                    <a href="javascript:void(0)" class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/business.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <div class="ms-3 fw-bold fs-5">
                            Business
                        </div>
                    </a>
                </div>

                {{-- course category --}}
                <div class="p-2">
                    <a href="javascript:void(0)" class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/light-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <div class="ms-3 fw-bold fs-5">
                            Technology
                        </div>
                    </a>
                </div>

                {{-- course category --}}
                <div class="p-2">
                    <a href="javascript:void(0)" class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/chart-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <div class="ms-3 fw-bold fs-5">
                            Data Science
                        </div>
                    </a>
                </div>

                {{-- course category --}}
                <div class="p-2">
                    <a href="javascript:void(0)" class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/heart-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <div class="ms-3 fw-bold fs-5">
                            Heart Care
                        </div>
                    </a>
                </div>

                {{-- course category --}}
                <div class="p-2">
                    <a  href="javascript:void(0)" class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark" style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/market-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <div class="ms-3 fw-bold fs-5">
                            Marketing
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </section>

    {{-- Featured Instructor --}}
    <section class="w-100 py-5 bg-warning-subtle">
        <div class="container py-5">

            <div class="row">

                <div class="col-lg-6">

                    <div class="mb-2 fs-1 fw-bold"> Featured Instructor</div>

                    <div class="text-dark fw-medium mb-3">
                        Experience seamless online learning with our user-friendly LMS website.
                        Explore our courses and improve your skills today.
                    </div>
                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

                {{-- instructor --}}
                <div class="py-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/team-1.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3 w-100" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-2 -mb-60">
                            <div class="bg-white p-2 shadow rounded-3">
                                <div class="text-center fs-4 mb-1">
                                    Wade Warren
                                </div>
                                <div class="text-center text-secondary">
                                    UI Designer
                                </div>
                                <div class="d-flex justify-content-around align-items-center mt-3 pb-3 small">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                             class="width-21 height-21" alt="star-fill">
                                        <span class="ms-2"> 4.2 Review </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('/images/svg/home/student.svg')}}" class="width-21 height-21"
                                             alt="star-fill">
                                        <span class="ms-2"> 50 Students </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- instructor --}}
                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/team-2.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3 w-100" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-2 -mb-60">
                            <div class="bg-white p-2 shadow rounded-3">
                                <div class="text-center fs-4 mb-1">
                                    Esther Howard
                                </div>
                                <div class="text-center text-secondary">
                                    UX Designer
                                </div>
                                <div class="d-flex justify-content-around align-items-center mt-3 pb-3 small">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                             class="width-21 height-21" alt="star-fill">
                                        <span class="ms-2"> 4.2 Review </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('/images/svg/home/student.svg')}}" class="width-21 height-21"
                                             alt="star-fill">
                                        <span class="ms-2"> 50 Students </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- instructor --}}
                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/team-3.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3 w-100" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-2 -mb-60">
                            <div class="bg-white p-2 shadow rounded-3">
                                <div class="text-center fs-4 mb-1">
                                    Jenny Wilson
                                </div>
                                <div class="text-center text-secondary">
                                    Human Resource
                                </div>
                                <div class="d-flex justify-content-around align-items-center mt-3 pb-3 small">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                             class="width-21 height-21" alt="star-fill">
                                        <span class="ms-2"> 4.2 Review </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('/images/svg/home/student.svg')}}" class="width-21 height-21"
                                             alt="star-fill">
                                        <span class="ms-2"> 50 Students </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- instructor --}}
                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/team-4.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3 w-100" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-2 -mb-60">
                            <div class="bg-white p-2 shadow rounded-3">
                                <div class="text-center fs-4 mb-1">
                                    Robert Fox
                                </div>
                                <div class="text-center text-secondary">
                                    UI Designer
                                </div>
                                <div class="d-flex justify-content-around align-items-center mt-3 pb-3 small">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                             class="width-21 height-21" alt="star-fill">
                                        <span class="ms-2"> 4.2 Review </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('/images/svg/home/student.svg')}}" class="width-21 height-21"
                                             alt="star-fill">
                                        <span class="ms-2"> 50 Students </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Trending courses --}}
    <section class="w-100 py-5">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-6">

                    <div class="mb-2 fs-1 fw-bold"> Trending courses </div>

                    <div class="text-dark fw-medium mb-3">
                        Experience seamless online learning with our user-friendly LMS website.
                        Explore our courses and improve your skills today.
                    </div>

                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">

                {{-- trend course --}}
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
                                    <a href="{{route('front.course-details')}}" class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- trend course --}}
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
                                    <a href="{{route('front.course-details')}}" class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- trend course --}}
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
                                    <a href="{{route('front.course-details')}}" class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-bold d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- People says about courses --}}
    <section class="w-100 py-5 bg-warning-subtle">
        <div class="container py-5">

            <div class="col-lg-6">

                <div class="mb-2 fs-1 fw-bold">
                    People Says About Courses
                </div>

                <div class="text-dark fw-medium mb-3">
                    Experience seamless online learning with our user-friendly LMS website.
                    Explore our courses and improve your skills today.
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="p-4 bg-white rounded-4 mb-4">

                        {{-- carousel message - rate --}}
                        <div class="d-flex justify-content-start align-items-center gap-1 mb-3">
                            <img src="{{asset('/images/svg/home/star-fill.svg')}}" class="width-18 height-18"
                                 alt="star">
                            <img src="{{asset('/images/svg/home/star-fill.svg')}}" class="width-18 height-18"
                                 alt="star">
                            <img src="{{asset('/images/svg/home/star-fill.svg')}}" class="width-18 height-18"
                                 alt="star">
                            <img src="{{asset('/images/svg/home/star-fill.svg')}}" class="width-18 height-18"
                                 alt="star">
                            <img src="{{asset('/images/svg/home/star-fill.svg')}}" class="width-18 height-18"
                                 alt="star">
                        </div>

                        {{-- carousel message - description --}}
                        <div class="lead text-secondary fw-medium mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur id magnam natus
                            saepe! A ab, accusamus ad alias amet architecto asperiores aspernatur aut beatae dicta est
                            eum ex exercitationem expedita
                        </div>

                        {{-- carousel message - author --}}
                        <div class="fs-4 fw-bold">
                            Melissa McGovern
                        </div>

                        {{-- carousel message - profession --}}
                        <div class="small text-secondary">
                            Manager
                        </div>

                    </div>

                    {{-- see more route --}}
                    <div class="mb-3">
                        <a href="javascript:void(0)" class="btn btn-theme rounded-pill px-4 py-2">
                            See More
                        </a>
                    </div>

                </div>
                <div class="col-lg-6">

                    {{-- carousel image of feedback provider --}}
                    <div class="position-relative">
                        <img src="{{asset('/images/home/feedback-1.jpg')}}" class="img-fluid object-fit-cover h-100 w-100 rounded-3" alt="feedback-1">
                        <div class="position-absolute end-0 bottom-0 p-3">
                            <img src="{{asset('/images/home/feedback-2.jpg')}}" class="width-120 height-120 img-fluid object-fit-cover h-100 w-100 rounded-3 shadow" alt="feedback-2">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- trusted company --}}
    <section class="w-100 py-5">
        <div class="container text-center py-5 border-top border-bottom">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                <div class="p-2">
                    <img src="{{asset('/images/home/company-logo-1.png')}}" class="img-fluid object-fit-contain" alt="company-logo">
                </div>
                <div class="p-2">
                    <img src="{{asset('/images/home/company-logo-2.png')}}" class="img-fluid object-fit-contain" alt="company-logo">
                </div>
                <div class="p-2">
                    <img src="{{asset('/images/home/company-logo-3.png')}}" class="img-fluid object-fit-contain" alt="company-logo">
                </div>
                <div class="p-2">
                    <img src="{{asset('/images/home/company-logo-4.png')}}" class="img-fluid object-fit-contain" alt="company-logo">
                </div>
            </div>
        </div>
    </section>

    {{-- Latest blog --}}
    <section class="w-100 py-5">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-6">

                    <div class="mb-2 fs-1 fw-bold"> Latest Blog</div>

                    <div class="text-dark fw-medium mb-3">
                        Experience seamless online learning with our user-friendly LMS website.
                        Explore our courses and improve your skills today.
                    </div>

                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">

                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-6.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3 position-relative">
                                <div class="position-absolute top-0 start-0 translate-middle-y ps-3">
                                    <div class="bg-theme py-1 px-3 text-white d-inline-block small rounded-4">
                                        21 December 2023
                                    </div>
                                </div>
                                <div class="py-2">
                                    <div class="truncate-line-2 fs-3 fw-bold px-2">
                                        11 Tips To Help You Get New Client
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img src="{{asset('/images/svg/home/person-circle.svg')}}" class="width-25 height-25" alt="person-circle">
                                        <span class="ms-2 text-secondary"> By Sumit Raj </span>
                                    </div>
                                    <a href="javascript:void(0)" class="text-theme fw-medium">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-5.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3 position-relative">
                                <div class="position-absolute top-0 start-0 translate-middle-y ps-3">
                                    <div class="bg-theme py-1 px-3 text-white d-inline-block small rounded-4">
                                        21 December 2023
                                    </div>
                                </div>
                                <div class="py-2">
                                    <div class="truncate-line-2 fs-3 fw-bold px-2">
                                        11 Tips To Help You Get New Client
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img src="{{asset('/images/svg/home/person-circle.svg')}}" class="width-25 height-25" alt="person-circle">
                                        <span class="ms-2 text-secondary"> By Sumit Raj </span>
                                    </div>
                                    <a href="javascript:void(0)" class="text-theme fw-medium">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-2 mb-5">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-4.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3 position-relative">
                                <div class="position-absolute top-0 start-0 translate-middle-y ps-3">
                                    <div class="bg-theme py-1 px-3 text-white d-inline-block small rounded-4">
                                        21 December 2023
                                    </div>
                                </div>
                                <div class="py-2">
                                    <div class="truncate-line-2 fs-3 fw-bold px-2">
                                        11 Tips To Help You Get New Client
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img src="{{asset('/images/svg/home/person-circle.svg')}}" class="width-25 height-25" alt="person-circle">
                                        <span class="ms-2 text-secondary"> By Sumit Raj </span>
                                    </div>
                                    <a href="javascript:void(0)" class="text-theme fw-medium">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                            <input type="email" name="email"
                                   class="form-control shadow-none py-3 ps-4 rounded-0 rounded-pill" required
                                   autocomplete="new-email" placeholder="Enter your Email">
                            <div class="position-absolute top-50 end-0 translate-middle-y pe-3">
                                <button type="submit" class="btn btn-theme rounded-pill px-4">
                                    <span class="d-none d-md-inline me-2">
                                        Subscribe
                                    </span>
                                    <span>
                                        <img src="{{asset('/images/svg/home/send.svg')}}" class="width-21 height-21" alt="send">
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
