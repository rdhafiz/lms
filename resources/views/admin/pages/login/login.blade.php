@extends('admin.layout.app-auth')
@section('title', 'Admin Login')

@section('content')

    <section class="w-100">
        <div class="container-fluid">
            <div class="row vh-100 justify-content-center align-items-center">
                <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4 col-xxl-3 border p-4">
                    <h3 class="fs-3 text-center fw-bold">
                        Login
                    </h3>
                    <p class="text-center fw-medium">
                        Access to our dashboard
                    </p>
                    <form class="fw-medium">
                        <div class="form-group mb-3">
                            <label for="email-address" class="form-label">Email Address</label>
                            <input id="email-address" type="email" name="email-address" class="form-control shadow-none p-3" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" name="password" class="form-control shadow-none p-3" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="remember-me" class="form-label">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="form-checkbox">
                                    Remember me
                                </label>
                                <a href="javascript:void(0)" class="text-decoration-none text-danger">
                                    Forget password?
                                </a>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-theme w-100 p-3">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
