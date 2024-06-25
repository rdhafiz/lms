@extends('front.layouts.app')
@section('title', 'Course Details')

@section('content')

    {{-- Breadcrumb --}}
    <section class="w-100 bg-warning-subtle" data-aos="fade-up">
        <div class="container">
            <div class="d-flex justify-content-start align-items-center height-350">
                <div>

                    <h1 class="fs-1 fw-bold text-theme-secondary mb-3 d-block" data-aos="fade-up" data-aos-delay="100">
                        Information About UI/UX Design Degree
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
                                <span class="text-theme">
                                    Course Details
                                </span>
                            </li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </section>

    {{-- Course Details with related course --}}
    <div class="w-100 py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

                    {{-- Course Details - image --}}
                    <div class="p-4 bg-white shadow rounded-3">
                        <img src="{{asset('/images/home/course-1.jpg')}}" class="img-fluid object-fit-cover rounded-3"
                             alt="course" data-aos="fade-up" data-aos-delay="200">

                        {{-- Course Details - title --}}
                        <div class="mt-4">
                            <h3 class="mb-2 fs-3 fw-bold text-theme-secondary" data-aos="fade-up" data-aos-delay="300">
                                Information About UI/UX Design Degree
                            </h3>
                            <div class="d-flex justify-content-start align-items-center gap-3 mb-4 flex-wrap"
                                 data-aos="fade-up" data-aos-delay="400">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center width-35 height-35 bg-light rounded-circle border">
                                        <img src="{{asset('/images/svg/home/play.svg')}}" class="width-14 height-14"
                                             alt="play">
                                    </div>
                                    <div class="ms-2 text-secondary text-opacity-75 small"> 20 videos</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center width-35 height-35 bg-light rounded-circle border">
                                        <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                             class="width-14 height-14" alt="star-fill">
                                    </div>
                                    <div class="ms-2 text-secondary text-opacity-75 small"> 1K reviews</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center width-35 height-35 bg-light rounded-circle border">
                                        <img src="{{asset('/images/svg/home/student.svg')}}"
                                             class="width-14 height-14" alt="star-fill">
                                    </div>
                                    <div class="ms-2 text-secondary text-opacity-75 small"> 2K students</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="bg-white shadow">
                            <ul class="nav nav-tabs bg-opacity-theme d-flex justify-content-between align-items-center"
                                id="myTab"
                                role="tablist">

                                {{-- Course Details - tab of overview --}}
                                <li class="nav-item" role="presentation" data-aos="fade-up" data-aos-delay="600">
                                    <button class="nav-link w-100 active py-3" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home-tab-pane" type="button" role="tab"
                                            aria-controls="home-tab-pane" aria-selected="true">
                                        <span class="d-flex align-items-center justify-content-center tab-test">
                                            <img src="{{asset('/images/svg/course-details/bookmark.svg')}}"
                                                 class="width-18 height-18" alt="bookmark">
                                            <span class="ms-2"> Overview </span>
                                        </span>
                                    </button>
                                </li>

                                {{-- Course Details - tab of curriculum --}}
                                <li class="nav-item" role="presentation" data-aos="fade-up" data-aos-delay="700">
                                    <button class="nav-link w-100 py-3" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false">
                                        <span class="d-flex align-items-center justify-content-center tab-test">
                                            <img src="{{asset('/images/svg/course-details/curriculum.svg')}}"
                                                 class="width-18 height-18" alt="bookmark">
                                            <span class="ms-2"> Curriculum </span>
                                        </span>
                                    </button>
                                </li>

                                {{-- Course Details - tab of instructor --}}
                                <li class="nav-item" role="presentation" data-aos="fade-up" data-aos-delay="800">
                                    <button class="nav-link w-100 py-3" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                                            aria-controls="contact-tab-pane" aria-selected="false">
                                        <span class="d-flex align-items-center justify-content-center tab-test">
                                            <img src="{{asset('/images/svg/course-details/instructor.svg')}}"
                                                 class="width-18 height-18" alt="bookmark">
                                            <span class="ms-2"> Instructor </span>
                                        </span>
                                    </button>
                                </li>

                                {{-- Course Details - tab of reviews --}}
                                <li class="nav-item" role="presentation" data-aos="fade-up" data-aos-delay="900">
                                    <button class="nav-link w-100 py-3" id="disabled-tab" data-bs-toggle="tab"
                                            data-bs-target="#disabled-tab-pane" type="button" role="tab"
                                            aria-controls="disabled-tab-pane" aria-selected="false">
                                        <span class="d-flex align-items-center justify-content-center tab-test">
                                            <img src="{{asset('/images/svg/course-details/star-fill.svg')}}"
                                                 class="width-18 height-18" alt="bookmark">
                                            <span class="ms-2"> Reviews </span>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                {{-- Course Details - tab of overview --}}
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                     aria-labelledby="home-tab" tabindex="0" data-aos="fade-up" data-aos-delay="1000">

                                    <div class="p-4">

                                        <h4 class="fs-4 fw-bold text-theme-secondary mb-3" data-aos="fade-up">
                                            Course Description
                                        </h4>

                                        <p class="text-secondary mb-4" data-aos="fade-up">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                            adipisci alias autem culpa cum delectus dignissimos eaque error explicabo
                                            facilis id iste itaque libero maiores minus mollitia nam nesciunt nostrum
                                            odit perferendis quam quidem ratione reiciendis, sapiente sequi suscipit ut
                                            voluptatibus. Accusamus accusantium amet architecto atque debitis
                                            dignissimos enim exercitationem impedit, inventore itaque laboriosam
                                            <br><br>

                                            minima molestias nobis numquam odit officiis placeat possimus quasi qui quo
                                            reiciendis sapiente similique soluta sunt temporibus ut vel voluptas? A
                                            aliquid dolor ea eligendi et eum minima nam neque nostrum odio odit omnis
                                            porro, reprehenderit sint sit tempora totam velit
                                        </p>

                                        <h4 class="fs-4 fw-bold text-theme-secondary mb-3" data-aos="fade-up">
                                            Certification
                                        </h4>

                                        <p class="text-secondary mb-4" data-aos="fade-up">
                                            vitae voluptas voluptatem. Labore laboriosam obcaecati reiciendis. Ad alias
                                            aliquid beatae corporis dicta dolores impedit, ipsam iste iusto natus nihil
                                            odit quidem sequi tempora voluptatem? Ad aliquid aperiam asperiores, aspernatur
                                            consectetur culpa deleniti deserunt ducimus est ex facilis impedit ipsum
                                            iste labore laudantium magni molestiae molestias natus nesciunt nisi nobis odit

                                            <br><br>

                                            perferendis quae quas qui quia quibusdam, quisquam quod recusandae
                                            repellendus reprehenderit saepe sint sunt suscipit totam velit voluptates? Animi
                                            asperiores aut consectetur distinctio ea eveniet facilis, in maiores maxime modi nemo
                                            odio quidem quo, quos sint suscipit temporibus! A accusamus aliquid aperiam
                                        </p>

                                        <h4 class="fs-4 fw-bold text-theme-secondary mb-4" data-aos="fade-up">
                                            What you will learn
                                        </h4>

                                        <p class="text-secondary mb-4" data-aos="fade-up">
                                            asperiores at beatae commodi consectetur, cumque earum eligendi eum eveniet ex
                                            exercitationem facere illo incidunt, iusto laudantium magnam obcaecati
                                            pariatur
                                        </p>

                                        <ul data-aos="fade-up">
                                            <li>
                                                Lifetime access with expert trainers
                                            </li>
                                            <li>
                                                Learning & self development
                                            </li>
                                            <li>
                                                Become a UI/UX Designer
                                            </li>
                                        </ul>

                                        <h4 class="fs-4 fw-bold text-theme-secondary mb-4" data-aos="fade-up">
                                            Who this course is for
                                        </h4>

                                        <p class="text-secondary mb-4" data-aos="fade-up">
                                            perferendis praesentium qui quibusdam quo reprehenderit sit soluta suscipit
                                            totam velit voluptatibus. Impedit in quod temporibus? Alias aliquid amet
                                        </p>

                                    </div>

                                </div>

                                {{-- Course Details - tab of curriculum --}}
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                     aria-labelledby="profile-tab" tabindex="0">
                                    <div class="vh-100"></div>
                                </div>

                                {{-- Course Details - tab of instructor --}}
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                     aria-labelledby="contact-tab" tabindex="0">
                                    <div class="vh-100"></div>
                                </div>

                                {{-- Course Details - tab of review --}}
                                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel"
                                     aria-labelledby="disabled-tab" tabindex="0">
                                    <div class="vh-100"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- related courses --}}
                    <div class="mt-4" data-aos="fade-up">
                        <div class="fs-1 mb-4 text-theme-secondary fw-bold">
                            Related Courses
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="height-400 mb-5">
                                    <div class="position-relative">
                                        <img src="{{asset('/images/home/course-5.jpg')}}"
                                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-5">
                                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-100">
                                            <div class="bg-white p-3 shadow rounded-3">
                                                <div
                                                    class="d-flex justify-content-center align-items-center gap-3 mb-4 flex-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                                            <img src="{{asset('/images/svg/home/play.svg')}}"
                                                                 class="width-12 height-12"
                                                                 alt="play">
                                                        </div>
                                                        <div class="ms-2 text-secondary text-opacity-75 small"> 20
                                                            videos
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                                 class="width-12 height-12" alt="star-fill">
                                                        </div>
                                                        <div class="ms-2 text-secondary text-opacity-75 small"> 1K
                                                            reviews
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                                 class="width-12 height-12" alt="star-fill">
                                                        </div>
                                                        <div class="ms-2 text-secondary text-opacity-75 small"> 2K
                                                            students
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="fs-4 px-2 fw-bold truncate-line-2">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                                                        beatae explicabo
                                                        natus reprehenderit saepe temporibus.
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="{{route('front.course-details')}}"
                                                       class="btn btn-theme rounded-pill px-3 py-2">
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
                            <div class="col-12 col-sm-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="height-400 mb-5">
                                    <div class="position-relative">
                                        <img src="{{asset('/images/home/course-6.jpg')}}"
                                             class="img-fluid object-fit-cover height-350 rounded-3" alt="course-6">
                                        <div class="position-absolute bottom-0 start-0 end-0 p-3 -mb-100">
                                            <div class="bg-white p-3 shadow rounded-3">
                                                <div
                                                    class="d-flex justify-content-center align-items-center gap-3 mb-4 flex-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                                            <img src="{{asset('/images/svg/home/play.svg')}}"
                                                                 class="width-12 height-12"
                                                                 alt="play">
                                                        </div>
                                                        <div class="ms-2 text-secondary text-opacity-75 small"> 20
                                                            videos
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                                            <img src="{{asset('/images/svg/home/star-fill.svg')}}"
                                                                 class="width-12 height-12" alt="star-fill">
                                                        </div>
                                                        <div class="ms-2 text-secondary text-opacity-75 small"> 1K
                                                            reviews
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center width-25 height-25 bg-light rounded-circle shadow">
                                                            <img src="{{asset('/images/svg/home/student.svg')}}"
                                                                 class="width-12 height-12" alt="star-fill">
                                                        </div>
                                                        <div class="ms-2 text-secondary text-opacity-75 small"> 2K
                                                            students
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="fs-4 px-2 fw-bold truncate-line-2">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                                                        beatae explicabo
                                                        natus reprehenderit saepe temporibus.
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="{{route('front.course-details')}}"
                                                       class="btn btn-theme rounded-pill px-3 py-2">
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
                        </div>
                    </div>

                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">

                    {{-- course enroll part --}}
                    <div class="mb-4 bg-white shadow rounded-4 sticky-top z-0" data-aos="fade-up" data-aos-delay="300"
                         style="top: 120px">
                        <div class="position-relative">
                            <img src="{{asset('/images/home/course-1.jpg')}}"
                                 class="rounded-3 img-fluid object-fit-cover w-100 h-100" alt="course-1">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <button type="button"
                                        class="btn border width-45 height-45 rounded-circle bg-white d-flex justify-content-center align-items-center">
                                    <img src="{{asset('/images/svg/course-details/play.svg')}}"
                                         class="width-25 height-25" alt="">
                                </button>
                            </div>
                        </div>

                        {{-- course enroll price --}}
                        <div class="d-flex justify-content-between align-items-center px-3 pt-3" data-aos="fade-up"
                             data-aos-delay="400">
                            <div class="d-flex align-items-end">
                                <div class="fs-3">$30</div>
                                <div class="small text-secondary ms-2">
                                    <del>$36.00</del>
                                </div>
                            </div>
                            <div class="bg-opacity-theme small text-theme fw-medium px-3 py-2 rounded-4"> 20% OFF</div>
                        </div>
                        <div class="text-theme p-3 fw-medium" data-aos="fade-up" data-aos-delay="500">
                            <span class="me-2">
                                <img src="{{asset('/images/svg/course-details/clock.svg')}}" class="width-21 height-21" alt="clock">
                            </span>
                            5 days left at this price!
                        </div>

                        {{-- course enroll course level --}}
                        <div class="text-dark d-flex align-items-center p-3 border-bottom" data-aos="fade-up"
                             data-aos-delay="600">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <img src="{{asset('/images/svg/course-details/tag.svg')}}" class="width-21 height-21" alt="tag">
                                </div>
                                Course level :
                            </div>
                            <div class="text-secondary ms-3">
                                All levels
                            </div>
                        </div>

                        {{-- course enroll instractor --}}
                        <div class="text-dark d-flex align-items-center p-3 border-bottom" data-aos="fade-up"
                             data-aos-delay="700">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <img src="{{asset('/images/svg/course-details/instructor-black.svg')}}" class="width-21 height-21" alt="tag">
                                </div>
                                Instructor :
                            </div>
                            <div class="text-secondary ms-3">
                                Raju Raj
                            </div>
                        </div>

                        {{-- course enroll lesson --}}
                        <div class="text-dark d-flex align-items-center p-3 border-bottom" data-aos="fade-up"
                             data-aos-delay="800">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <img src="{{asset('/images/svg/course-details/video-file.svg')}}" class="width-21 height-21" alt="tag">
                                </div>
                                Lesson :
                            </div>
                            <div class="text-secondary ms-3">
                                30
                            </div>
                        </div>

                        {{-- course enroll enrolled students --}}
                        <div class="text-dark d-flex align-items-center p-3 border-bottom" data-aos="fade-up"
                             data-aos-delay="900">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <img src="{{asset('/images/svg/course-details/person.svg')}}" class="width-21 height-21" alt="tag">
                                </div>
                                Enrolled :
                            </div>
                            <div class="text-secondary ms-3">
                                165 Students
                            </div>
                        </div>

                        {{-- course enroll last update --}}
                        <div class="text-dark d-flex align-items-center p-3 border-bottom" data-aos="fade-up"
                             data-aos-delay="1000">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <img src="{{asset('/images/svg/course-details/latest-update.svg')}}" class="width-21 height-21" alt="tag">
                                </div>
                                Latest Updated :
                            </div>
                            <div class="text-secondary ms-3">
                                February 17, 2022
                            </div>
                        </div>

                        {{-- course enroll button --}}
                        <div class="text-center py-4">
                            <button type="submit" class="btn btn-light-theme py-3 px-5 rounded-pill" data-aos="fade-up"
                                    data-aos-delay="1100">
                                <span class="me-2">
                                    <img src="{{asset('/images/svg/course-details/share.svg')}}" class="width-21 height-21" alt="share">
                                </span>
                                Share this course
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <label for="email" hidden="hidden">email</label>
                        <div class="position-relative">
                            <input id="email" type="email" name="email"
                                   class="form-control shadow-none py-3 ps-4 rounded-0 rounded-pill" required
                                   autocomplete="off" placeholder="Enter your Email">
                            <div class="position-absolute top-50 end-0 translate-middle-y pe-3">
                                <button type="submit" class="btn btn-theme rounded-pill px-4">
                                    <span class="d-none d-sm-inline me-1">Subscribe</span>
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
