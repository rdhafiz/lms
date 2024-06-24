@extends('front.layouts.app')
@section('title', 'Registration')

@section('content')

    <section class="container-fluid">
        <div class="vh-100 d-flex justify-content-center align-items-center bg-light">
            <div class="p-5 shadow col-10 col-sm-8 col-md-6 col-lg-4">
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" type="text" name="name" class="form-control py-2 px-3 rounded-0" required autocomplete="new-name">
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input id="phone" type="text" name="phone" class="form-control py-2 px-3 rounded-0" required autocomplete="new-phone">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" class="form-control py-2 px-3 rounded-0" required autocomplete="new-email">
                </div>
                <div class="form-group mb-3">
                    <label for="pasword" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-control py-2 px-3 rounded-0" required autocomplete="new-password">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary py-2 px-3 rounded-0">
                        Registration
                    </button>
                </div>
                <div class="text-start">
                    Already have an account
                    <a href="{{route('login')}}" class="text-secondary">
                        click here
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
