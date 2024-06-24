@extends('front.layouts.app')
@section('title', 'Reset password')

@section('content')

    <section class="container-fluid">
        <div class="vh-100 d-flex justify-content-center align-items-center bg-light">
            <div class="p-5 shadow col-10 col-sm-8 col-md-6 col-lg-4">
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
                <div class="text-start">
                    already have an account
                    <a href="{{route('login')}}" class="text-secondary">
                        click here
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
