@extends('front.layouts.app')
@section('title', 'Home')

@section('content')

    {{-- Hero content --}}
    <section class="w-100 bg-warning-subtle h-100 py-5" data-aos="fade-up">
        <div class="container py-5 pb-3">
            <div class="row py-5 justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8 col-xl-6 py-5">
                    <h6 class="lead fw-medium text-theme" data-aos="fade-up" data-aos-delay="50">
                        The leader in Online learning
                    </h6>
                    <h1 class="fs-1 text-theme-secondary fw-bold my-3" data-aos="fade-up" data-aos-delay="100">
                        Build Your Skills and Achieve Your Goals
                    </h1>
                    <p class="text-dark mb-4 fw-medium" data-aos="fade-up" data-aos-delay="150">
                        Experience seamless online learning with our user-friendly LMS website.
                        Explore our courses and improve your skills today.
                    </p>
                    <form>
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="200">
                            <label for="category" hidden="hidden">category</label>
                            <input id="category" type="text" name="category"
                                   class="form-control shadow-none py-3 ps-5 rounded-0 rounded-pill" required
                                   placeholder="Search Courses">
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
                    </form>
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

    {{-- Box content --}}
    <section class="w-100 py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

                {{-- Box count of online courses --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start"
                        style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-secondary">
                            <img src="{{asset('/images/svg/home/pencil-ruler.svg')}}" class="width-25 height-25"
                                 alt="box-icon-1">
                        </div>
                        <div class="ms-3">
                            <h4 class="fw-bold fs-4 mb-0"> 1K</h4>
                            <div class="text-secondary fw-medium"> Online Courses</div>
                        </div>
                    </div>
                </div>

                {{-- Box count of expert tutors --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start"
                        style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-light-pink">
                            <img src="{{asset('/images/svg/home/people.svg')}}" class="width-25 height-25"
                                 alt="box-icon-2">
                        </div>
                        <div class="ms-3">
                            <h4 class="fw-bold fs-4 mb-0"> 28+</h4>
                            <div class="text-secondary fw-medium"> Expert Tutors</div>
                        </div>
                    </div>
                </div>

                {{-- Box count of certified courses --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start"
                        style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-light-purple">
                            <img src="{{asset('/images/svg/home/certified.svg')}}" class="width-25 height-25"
                                 alt="box-icon-3">
                        </div>
                        <div class="ms-3">
                            <h4 class="fw-bold fs-4 mb-0"> 1K +</h4>
                            <div class="text-secondary fw-medium"> Certified Courses</div>
                        </div>
                    </div>
                </div>

                {{-- Box count of online students --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start"
                        style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <div
                            class="width-65 height-65 rounded-circle d-flex justify-content-center align-items-center bg-light-info">
                            <img src="{{asset('/images/svg/home/morterboard.svg')}}" class="width-25 height-25"
                                 alt="box-icon-4">
                        </div>
                        <div class="ms-3">
                            <h4 class="fw-bold fs-4 mb-0"> 8K+</h4>
                            <div class="text-secondary fw-medium"> Online Students</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Popular courses --}}
    <section class="w-100 py-5" data-aos="fade-up">
        <div class="container">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <h1 class="mb-2 fs-1 fw-bold"> Popular courses</h1>

                    <div class="text-dark fw-medium mb-3">
                        Experience seamless online learning with our user-friendly LMS website.
                        Explore our courses and improve your skills today.
                    </div>

                </div>

                {{-- Courses route --}}
                <div class="col-lg-6 text-end mb-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{route('front.courses')}}" class="btn btn-theme rounded-pill py-2 px-4">
                        View all courses
                    </a>
                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">

                {{-- Course item --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="100">
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
                                    <h4 class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('front.course-details')}}"
                                       class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-medium d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Course item --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="200">
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
                                    <h4 class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('front.course-details')}}"
                                       class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-medium d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Course item --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="300">
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
                                    <h4 class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('front.course-details')}}"
                                       class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-medium d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Course item --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="400">
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
                                    <h4 class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('front.course-details')}}"
                                       class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-medium d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Course item --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="500">
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
                                    <h4 class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('front.course-details')}}"
                                       class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-medium d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Course item --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="600">
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
                                    <h4 class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('front.course-details')}}"
                                       class="btn btn-theme rounded-pill px-4 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-medium d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
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

    {{-- Top category --}}
    <section class="w-100 py-5" data-aos="fade-up">
        <div class="container py-5">

            <h1 class="mb-4 text-center fs-1 fw-bold">
                Top Categories
            </h1>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

                {{-- Course category --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="100">
                    <a href="javascript:void(0)"
                       class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark"
                       style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/pencil-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <h5 class="ms-3 fw-bold fs-5">
                            Art & Design
                        </h5>
                    </a>
                </div>

                {{-- Course category --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="200">
                    <a href="javascript:void(0)"
                       class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark"
                       style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/code-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <h5 class="ms-3 fw-bold fs-5">
                            Development
                        </h5>
                    </a>
                </div>

                {{-- Course category --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="300">
                    <a href="javascript:void(0)"
                       class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark"
                       style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/lifestyle-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <h5 class="ms-3 fw-bold fs-5">
                            Lifestyle
                        </h5>
                    </a>
                </div>

                {{-- Course category --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="400">
                    <a href="javascript:void(0)"
                       class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark"
                       style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/business.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <h5 class="ms-3 fw-bold fs-5">
                            Business
                        </h5>
                    </a>
                </div>

                {{-- Course category --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="500">
                    <a href="javascript:void(0)"
                       class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark"
                       style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/light-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <h5 class="ms-3 fw-bold fs-5">
                            Technology
                        </h5>
                    </a>
                </div>

                {{-- Course category --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="600">
                    <a href="javascript:void(0)"
                       class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark"
                       style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/chart-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <h5 class="ms-3 fw-bold fs-5">
                            Data Science
                        </h5>
                    </a>
                </div>

                {{-- Course category --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="700">
                    <a href="javascript:void(0)"
                       class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark"
                       style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/heart-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <h5 class="ms-3 fw-bold fs-5">
                            Heart Care
                        </h5>
                    </a>
                </div>

                {{-- Course category --}}
                <div class="p-2" data-aos="fade-up" data-aos-delay="800">
                    <a href="javascript:void(0)"
                       class="shadow p-3 p-sm-4 rounded-3 bg-size-cover object-fit-contain bg-repeat-none d-flex align-items-center justify-content-start text-decoration-none text-dark"
                       style="background-image: url({{asset('/images/about/small-abstract-spheres.jpg')}})">
                        <img src="{{asset('/images/svg/home/market-theme.svg')}}" class="width-45 height-45"
                             alt="pencil-theme">
                        <h5 class="ms-3 fw-bold fs-5">
                            Marketing
                        </h5>
                    </a>
                </div>

            </div>

        </div>
    </section>

    {{-- Featured Instructor --}}
    <section class="w-100 py-5 bg-warning-subtle" data-aos="fade-up">
        <div class="container py-5">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <h1 class="mb-2 fs-1 fw-bold"> Featured Instructor</h1>

                    <p class="text-dark fw-medium mb-3">
                        Experience seamless online learning with our user-friendly LMS website.
                        Explore our courses and improve your skills today.
                    </p>
                </div>

            </div>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

                {{-- Instructor --}}
                <div class="py-2 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/team-1.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3 w-100" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-2 -mb-60">
                            <div class="bg-white p-2 shadow rounded-3">
                                <h4 class="text-center fs-4 mb-1">
                                    Wade Warren
                                </h4>
                                <p class="text-center text-secondary">
                                    UI Designer
                                </p>
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

                {{-- Instructor --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/team-2.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3 w-100" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-2 -mb-60">
                            <div class="bg-white p-2 shadow rounded-3">
                                <h4 class="text-center fs-4 mb-1">
                                    Esther Howard
                                </h4>
                                <p class="text-center text-secondary">
                                    UX Designer
                                </p>
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

                {{-- Instructor --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/team-3.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3 w-100" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-2 -mb-60">
                            <div class="bg-white p-2 shadow rounded-3">
                                <h4 class="text-center fs-4 mb-1">
                                    Jenny Wilson
                                </h4>
                                <p class="text-center text-secondary">
                                    Human Resource
                                </p>
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

                {{-- Instructor --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="400">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/team-4.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3 w-100" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-2 -mb-60">
                            <div class="bg-white p-2 shadow rounded-3">
                                <h4 class="text-center fs-4 mb-1">
                                    Robert Fox
                                </h4>
                                <p class="text-center text-secondary">
                                    UI Designer
                                </p>
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
    <section class="w-100 py-5" data-aos="fade-up">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-6">

                    <h1 class="mb-2 fs-1 fw-bold" data-aos="fade-up" data-aos-delay="100">
                        Trending courses
                    </h1>

                    <p class="text-dark fw-medium mb-3" data-aos="fade-up" data-aos-delay="200">
                        Experience seamless online learning with our user-friendly LMS website.
                        Explore our courses and improve your skills today.
                    </p>

                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">

                {{-- Trend course --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="300">
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
                                        <p class="ms-2 text-secondary text-opacity-75 small"> 20 videos</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <p class="ms-2 text-secondary text-opacity-75 small"> 1K reviews</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <p class="ms-2 text-secondary text-opacity-75 small"> 2K students</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h4 class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('front.course-details')}}"
                                       class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-medium d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Trend course --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="400">
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
                                        <p class="ms-2 text-secondary text-opacity-75 small"> 20 videos</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <p class="ms-2 text-secondary text-opacity-75 small"> 1K reviews</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <p class="ms-2 text-secondary text-opacity-75 small"> 2K students</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h4 class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('front.course-details')}}"
                                       class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-medium d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
                                        $40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Trend course --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="500">
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
                                        <p class="ms-2 text-secondary text-opacity-75 small"> 20 videos</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <p class="ms-2 text-secondary text-opacity-75 small"> 1K reviews</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                 class="width-12 height-12" alt="star-fill">
                                        </div>
                                        <p class="ms-2 text-secondary text-opacity-75 small"> 2K students</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h4 class="fs-4 px-2 fw-bold truncate-line-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae explicabo
                                        natus reprehenderit saepe temporibus.
                                    </h4>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('front.course-details')}}"
                                       class="btn btn-theme rounded-pill px-3 py-2">
                                        Enroll Now
                                    </a>
                                    <div
                                        class="width-65 height-65 fw-medium d-flex justify-content-center align-items-center rounded-circle bg-success text-white">
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
    <section class="w-100 py-5 bg-warning-subtle" data-aos="fade-up">
        <div class="container py-5">

            <div class="col-lg-6">

                <h1 class="mb-2 fs-1 fw-bold" data-aos="fade-up" data-aos-delay="100">
                    People Says About Courses
                </h1>

                <p class="text-dark fw-medium mb-3" data-aos="fade-up" data-aos-delay="200">
                    Experience seamless online learning with our user-friendly LMS website.
                    Explore our courses and improve your skills today.
                </p>

            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="p-4 bg-white rounded-4 mb-4" data-aos="fade-up" data-aos-delay="300">

                        {{-- Carousel message - rate --}}
                        <div class="d-flex justify-content-start align-items-center gap-1 mb-3" data-aos="fade-up"
                             data-aos-delay="400">
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

                        {{-- Carousel message - description --}}
                        <p class="lead text-secondary fw-medium mb-3" data-aos="fade-up" data-aos-delay="500">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur id magnam natus
                            saepe! A ab, accusamus ad alias amet architecto asperiores aspernatur aut beatae dicta est
                            eum ex exercitationem expedita
                        </p>

                        {{-- Carousel message - author --}}
                        <h4 class="fs-4 fw-bold" data-aos="fade-up" data-aos-delay="600">
                            Melissa McGovern
                        </h4>

                        {{-- Carousel message - profession --}}
                        <p class="small text-secondary" data-aos="fade-up" data-aos-delay="700">
                            Manager
                        </p>

                    </div>

                    {{-- See more route --}}
                    <div class="mb-3" data-aos="fade-up" data-aos-delay="800">
                        <a href="javascript:void(0)" class="btn btn-theme rounded-pill px-4 py-2">
                            See More
                        </a>
                    </div>

                </div>
                <div class="col-lg-6">

                    {{-- Carousel image of feedback provider --}}
                    <div class="position-relative" data-aos="fade-up" data-aos-delay="900">
                        <img src="{{asset('/images/home/feedback-1.jpg')}}"
                             class="img-fluid object-fit-cover h-100 w-100 rounded-3" alt="feedback-1">
                        <div class="position-absolute end-0 bottom-0 p-3" data-aos="fade-down" data-aos-delay="1000">
                            <img src="{{asset('/images/home/feedback-2.jpg')}}"
                                 class="width-120 height-120 img-fluid object-fit-cover h-100 w-100 rounded-3 shadow"
                                 alt="feedback-2">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Trusted company --}}
    <section class="w-100 py-5" data-aos="fade-up">
        <div class="container text-center py-5 border-top border-bottom">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                <div class="p-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{asset('/images/home/company-logo-1.png')}}" class="img-fluid object-fit-contain"
                         alt="company-logo">
                </div>
                <div class="p-2" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('/images/home/company-logo-2.png')}}" class="img-fluid object-fit-contain"
                         alt="company-logo">
                </div>
                <div class="p-2" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{asset('/images/home/company-logo-3.png')}}" class="img-fluid object-fit-contain"
                         alt="company-logo">
                </div>
                <div class="p-2" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{asset('/images/home/company-logo-4.png')}}" class="img-fluid object-fit-contain"
                         alt="company-logo">
                </div>
            </div>
        </div>
    </section>

    {{-- Latest blog --}}
    <section class="w-100 py-5" data-aos="fade-up">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-6">

                    <h1 class="mb-2 fs-1 fw-bold" data-aos="fade-up" data-aos-delay="100">
                        Latest Blog
                    </h1>

                    <p class="text-dark fw-medium mb-3" data-aos="fade-up" data-aos-delay="200">
                        Experience seamless online learning with our user-friendly LMS website.
                        Explore our courses and improve your skills today.
                    </p>

                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">

                {{-- Blog item --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-6.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3 position-relative">
                                <div class="position-absolute top-0 start-0 translate-middle-y ps-3">
                                    <p class="bg-theme py-1 px-3 text-white d-inline-block small rounded-4">
                                        21 December 2023
                                    </p>
                                </div>
                                <div class="py-2">
                                    <p class="truncate-line-2 fs-3 fw-bold px-2">
                                        11 Tips To Help You Get New Client
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img src="{{asset('/images/svg/home/person-circle.svg')}}"
                                             class="width-25 height-25" alt="person-circle">
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

                {{-- Blog item --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-5.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3 position-relative">
                                <div class="position-absolute top-0 start-0 translate-middle-y ps-3">
                                    <p class="bg-theme py-1 px-3 text-white d-inline-block small rounded-4">
                                        21 December 2023
                                    </p>
                                </div>
                                <div class="py-2">
                                    <p class="truncate-line-2 fs-3 fw-bold px-2">
                                        11 Tips To Help You Get New Client
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img src="{{asset('/images/svg/home/person-circle.svg')}}"
                                             class="width-25 height-25" alt="person-circle">
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

                {{-- Blog item --}}
                <div class="p-2 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="position-relative">
                        <img src="{{asset('/images/home/course-4.jpg')}}"
                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-1">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-60">
                            <div class="bg-white p-3 shadow rounded-3 position-relative">
                                <div class="position-absolute top-0 start-0 translate-middle-y ps-3">
                                    <p class="bg-theme py-1 px-3 text-white d-inline-block small rounded-4">
                                        21 December 2023
                                    </p>
                                </div>
                                <div class="py-2">
                                    <p class="truncate-line-2 fs-3 fw-bold px-2">
                                        11 Tips To Help You Get New Client
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <img src="{{asset('/images/svg/home/person-circle.svg')}}"
                                             class="width-25 height-25" alt="person-circle">
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
