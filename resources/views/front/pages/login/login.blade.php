@extends('front.layouts.app')
@section('title', 'Login')

@section('content')

    <section class="container-fluid">
        <div class="vh-100 d-flex justify-content-center align-items-center bg-light">
            <div class="p-5 shadow col-10 col-sm-8 col-md-6 col-lg-4">
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" class="form-control py-2 px-3 rounded-0" required autocomplete="new-email">
                </div>
                <div class="form-group mb-3">
                    <label for="pasword" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-control py-2 px-3 rounded-0" required autocomplete="new-password">
                </div>
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary py-2 px-3 rounded-0">
                        Login
                    </button>
                    <a href="{{route('forget_password')}}" class="text-danger">
                        Forget Password?
                    </a>
                </div>
                <div class="text-start">
                    Don't have any account
                    <a href="{{route('register')}}" class="text-secondary">
                        click here
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
