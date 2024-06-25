@extends('front.layouts.app')
@section('title', 'Login')

@section('content')

    <section class="container-fluid">
        <div class="vh-100 row justify-content-center align-items-center bg-light">
            <div class="px-2 border col-11 col-sm-9 col-md-8 col-lg-7 bg-white">
                <div class="row align-items-center px-2">
                    <form class="col-lg-5 p-4 fw-medium">
                        <div class="fs-3 mb-3"> Welcome to your account </div>
                        <div class="text-secondary mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, libero.
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="new-email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pasword" class="form-label">Password</label>
                            <input id="password" type="password" name="password" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="new-password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary py-2 px-3 rounded-0">
                                Login
                            </button>
                            <a href="{{route('front.forget_password')}}" class="text-danger text-decoration-none">
                                Forget Password?
                            </a>
                        </div>
                    </form>
                    <div class="col-lg-7 border-start d-flex justify-content-center align-items-center flex-column" style="min-height: 600px">
                        <div class="mb-3 text-center fw-medium fs-3">
                            Don't have any account
                        </div>
                        <a href="{{route('front.register')}}" class="text-decoration-none text-secondary fs-5">
                            Create New Account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
