@extends('front.layouts.app')
@section('title', 'Registration')

@section('content')

    <section class="w-100 py-5">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center py-5">
                <div class="px-2 border col-11 col-sm-9 bg-white">
                    <div class="row align-items-center px-2">
                        <form class="col-lg-5 p-4 fw-medium border-end">
                            <div class="fs-3 mb-3"> Create new account </div>
                            <div class="text-secondary mb-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, libero.
                            </div>
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" name="name" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input id="phone" type="text" name="phone" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password-confirmation" class="form-label">Confirm Password</label>
                                <input id="password-confirmation" type="password" name="password-confirmation" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary py-2 px-3 rounded-0">
                                    Registration
                                </button>
                            </div>
                        </form>
                        <div class="col-lg-7 d-flex justify-content-center align-items-center flex-column" style="min-height: 600px">
                            <div class="mb-3 text-center fw-medium fs-3">
                                Already have an account
                            </div>
                            <a href="{{route('front.login')}}" class="text-decoration-none text-secondary fs-5">
                                Welcome to your account
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
