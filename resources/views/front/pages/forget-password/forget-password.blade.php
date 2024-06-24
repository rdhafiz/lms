@extends('front.layouts.app')
@section('title', 'Forget password')

@section('content')

    <section class="container-fluid">
        <div class="vh-100 d-flex justify-content-center align-items-center bg-light">
            <div class="p-5 shadow col-10 col-sm-8 col-md-6 col-lg-4">
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" class="form-control py-2 px-3 rounded-0" required autocomplete="new-email">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary py-2 px-3 rounded-0">
                        Forget
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
