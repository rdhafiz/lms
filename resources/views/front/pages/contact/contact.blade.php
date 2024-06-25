@extends('front.layouts.app')
@section('title', 'Contact')

@section('content')

    {{-- Breadcrumb --}}
    <section class="w-100 bg-warning-subtle">
        <div class="container">
            <div class="d-flex justify-content-start align-items-center height-350">
                <div>
                    <div class="fs-1 fw-bold text-theme-secondary mb-3 d-block"> Contact Us</div>

                    <nav
                        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('front.home')}}" class="text-decoration-none text-dark">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="{{route('front.contact')}}" class="text-decoration-none text-theme">
                                    Contact
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>



@endsection
