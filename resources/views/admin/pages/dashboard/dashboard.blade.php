@extends('admin.layout.app')
@section('title', 'Admin Dashboard')

@section('content')

    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
        <div class="p-3">
            <a href="{{route('admin.admin_management')}}" class="w-100 shadow bg-white p-5 text-center d-block text-decoration-none">
                <div class="pb-3 text-theme-secondary fs-5">
                    Admins
                </div>
                <div class="pb-3">
                    <img src="{{asset('/images/svg/admin/admin.svg')}}" class="width-45 height-45" alt="admin">
                </div>
                <div class="text-theme-secondary fs-5">
                    1,00,000
                </div>
            </a>
        </div>
        <div class="p-3">
            <a href="{{route('admin.user_management')}}" class="w-100 shadow bg-white p-5 text-center d-block text-decoration-none">
                <div class="pb-3 text-theme-secondary fs-5">
                    Users
                </div>
                <div class="pb-3">
                    <img src="{{asset('/images/svg/admin/user.svg')}}" class="width-45 height-45" alt="admin">
                </div>
                <div class="text-theme-secondary fs-5">
                    1,00,000
                </div>
            </a>
        </div>
    </div>

@endsection
