@extends('front.layouts.app')
@section('title', 'Forget password')

@section('content')

    <section class="container-fluid">
        <div class="vh-100 row justify-content-center align-items-center bg-light">
            <div class="px-2 border col-11 col-sm-9 col-md-8 col-lg-7 bg-white">
                <div class="row align-items-center px-2">
                    <form class="col-lg-5 p-4 fw-medium">
                        <div class="fs-3 mb-3"> Forget Password </div>
                        <div class="text-secondary mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, libero.
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" class="form-control py-2 px-3 rounded-0 shadow-none border" required autocomplete="new-email">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary py-2 px-3 rounded-0">
                                Forget
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
