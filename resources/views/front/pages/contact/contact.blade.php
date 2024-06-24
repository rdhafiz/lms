@extends('front.layouts.app')
@section('title', 'Contact')

@section('content')

    <div class="mb-4">
        <div style="height: 350px" class="bg-light position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column">
                <div class="mb-3 text-center fw-medium">
                    Contact
                </div>
                <div class="mb-3 text-center fw-medium d-flex justify-content-center align-items-center gap-3">
                    <a href="javascript:void(0)" class="text-decoration-none text-secondary">
                        Home
                    </a>
                    <div class="fw-bold">/</div>
                    <a href="javascript:void(0)" class="text-decoration-none text-secondary active">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="mb-3 fw-medium fs-4">
                    Get In Touch
                </div>
                <div class="mb-3 text-secondary">
                    Phone Number: 123456789
                </div>
                <div class="mb-3 text-secondary">
                    Address: Agnatha Hall, Jasikan College of Education, TBCS Enterprise, Jasikan, Ghana
                </div>
                <div class="mb-3 text-secondary">
                    Email: lms@example.com
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input id="name" type="text" name="name" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="new-email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="new-email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input id="subject" type="text" name="subject" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="new-subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" id="message" cols="30" rows="5" class="form-textarea p-3 rounded-0 shadow-none border d-block w-100" required autocomplete="new-message"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary rounded-0 px-3 py-2">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="overflow-hidden w-100" style="height:500px;">
                    <div id="gmap-canvas" class="w-100 h-100">
                        <iframe class="w-100 h-100 border-0" src="https://www.google.com/maps/embed/v1/place?q=Agnatha+Hall,+Jasikan+College+of+Education,+TBCS+Enterprise,+Jasikan,+Ghana&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
