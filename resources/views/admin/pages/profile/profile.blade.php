@extends('admin.layout.app')
@section('title', 'Admin Profile')

@section('content')

    <div class="row justify-content-center fw-medium h-100 align-items-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 border shadow p-4">
            <div class="fs-4 mb-3">
                Profile
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <img src="{{asset('/images/home/team-1.jpg')}}" class="img-fluid object-fit-cover rounded-circle width-200 height-200" alt="avatar">
            </div>
            <div class="text-center">
                <div class="mb-3">
                    <div class="text-dark"> Name </div>
                    <div class="text-secondary"> John Smith </div>
                </div>
                <div class="mb-3">
                    <div class="text-dark"> Email </div>
                    <div class="text-secondary"> johnsmith@gmail.com </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-theme w-100 rounded-0" data-bs-toggle="modal" data-bs-target="#editProfile">
                            Edit Profile
                        </button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-theme w-100 rounded-0" data-bs-toggle="modal" data-bs-target="#changePassword">
                            Change Password
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content rounded-0 shadow-none p-4">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">
                        Edit Profile
                    </h1>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" name="name" class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" name="email" class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary width-96 rounded-0" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-theme width-96 rounded-0">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Change Password Modal -->
    <div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content rounded-0 shadow-none p-4">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">
                        Change Password
                    </h1>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0">
                    <div class="form-group mb-3">
                        <label for="current-password" class="form-label">Current Password</label>
                        <input id="current-password" type="password" name="current-password" class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password-confirmation" class="form-label"> Password Confirmation </label>
                        <input id="password-confirmation" type="password" name="password-confirmation" class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary width-96 rounded-0" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-theme width-96 rounded-0">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
