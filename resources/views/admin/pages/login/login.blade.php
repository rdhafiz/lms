@extends('admin.layout.app-auth')
@section('title', 'Admin Login')

@section('content')

    {{-- Admin login content --}}
    <section class="w-100">
        <div class="container-fluid">
            <div class="row vh-100 justify-content-center align-items-center">
                <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4 col-xxl-3 border p-4">

                    {{-- Admin login title --}}
                    <h3 class="fs-3 text-center fw-bold">
                        Login
                    </h3>

                    {{-- Admin login sub title --}}
                    <p class="text-center fw-medium">
                        Access to our dashboard
                    </p>

                    {{-- Admin login form --}}
                    <form class="fw-medium">

                        {{-- Form group - email --}}
                        <div class="form-group mb-3">
                            <label for="email-address" class="form-label">Email Address</label>
                            <input id="email-address" type="email" name="email-address" class="form-control shadow-none p-3" autocomplete="off">
                        </div>

                        {{-- Form group - password --}}
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" name="password" class="form-control shadow-none p-3" autocomplete="off">
                        </div>

                        {{-- Form group - remember me --}}
                        <div class="mb-3">
                            <label for="remember-me" class="form-label">
                                <input type="checkbox" name="remember-me" id="remember-me" class="form-checkbox">
                                Remember me
                            </label>
                        </div>

                        {{-- Action button --}}
                        <div class="mb-3">
                            <button type="submit" class="btn btn-theme w-100 p-3">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
