@extends('front.layouts.app')
@section('title', 'Reset password')

@section('content')

    <section class="container-fluid">
        <div class="vh-100 row justify-content-center align-items-center bg-light">
            <div class="px-2 border col-11 col-sm-9 col-md-8 col-lg-7 bg-white">
                <div class="row align-items-center px-2">
                    <form class="col-lg-5 p-4 fw-medium">
                        <div class="fs-3 mb-3"> Reset Password </div>
                        <div class="text-secondary mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, libero.
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" class="form-control py-2 px-3 rounded-0" required autocomplete="new-email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="code" class="form-label">Code</label>
                            <input id="code" type="text" name="code" class="form-control py-2 px-3 rounded-0" required autocomplete="new-code">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" name="password" class="form-control py-2 px-3 rounded-0" required autocomplete="new-password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <input id="confirm-password" type="password" name="password" class="form-control py-2 px-3 rounded-0" required autocomplete="new-confirm-password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary py-2 px-3 rounded-0">
                                Reset
                            </button>
                        </div>
                    </form>
                    <div class="col-lg-7 border-start d-flex justify-content-center align-items-center flex-column" style="min-height: 600px">
                        <div class="mb-3 text-center fw-medium fs-3">
                            Remember Password
                        </div>
                        <a href="{{route('login')}}" class="text-decoration-none text-secondary fs-5">
                            Welcome to your account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
