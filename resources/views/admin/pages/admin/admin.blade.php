@extends('admin.layout.app')
@section('title', 'Admin Management')

@section('content')

    <div class="row justify-content-between align-items-center mb-3">
        <div class="col-12 col-sm-4">
            <div class="position-relative">
                <input type="text" name="keyword" class="form-control shadow-none py-2 ps-5" placeholder="Search here" required autocomplete="off">
                <div class="position-absolute top-50 start-0 translate-middle-y ps-3">
                    <img src="{{asset('/images/svg/home/search.svg')}}" class="img-fluid width-21 height-21" alt="search">
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-5 text-end">
            <button type="button" class="btn btn-theme rounded-0 width-95" data-bs-toggle="modal" data-bs-target="#manageModal">
                New
            </button>
        </div>
    </div>

    <div class="card bg-white border rounded-3 overflow-hidden">
        <div class="card-header p-3 bg-white border-0 rounded-0 border-bottom">
            <h5 class="h5 mb-0 fw-medium"> Admin Management </h5>
        </div>
        <div class="card-body height-calc-350 scrollbar p-3 bg-white border-0 rounded-0">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>
                                <div class="width-200">
                                    Name
                                </div>
                            </th>
                            <th>
                                <div class="width-200">
                                    Email
                                </div>
                            </th>
                            <th>
                                <div class="width-200">
                                    Phone
                                </div>
                            </th>
                            <th>
                                <div class="width-200">
                                    Action
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>
                                <div class="width-200">
                                    User Name
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Email
                                </div>
                            </td>
                            <td>
                                <div class="width-200">
                                    User Phone
                                </div>
                            </td>
                            <td>
                                <div class="width-200 d-flex align-items-center justify-content-start">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#manageModal">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-0 border-top rounded-0 py-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination pb-0 mb-0 d-flex justify-content-center align-items-center">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">
                            <img src="{{asset('/images/svg/courses/chevron-left-double.svg')}}" class="width-25 height-25" alt="chevron-left-double">
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">
                            1
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">
                            2
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">
                            3
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">
                            4
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">
                            <img src="{{asset('/images/svg/courses/chevron-right-double.svg')}}" class="width-25 height-25" alt="chevron-right-double">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    {{-- Manage Modal --}}
    <div class="modal fade" id="manageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 rounded-0 shadow-none">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Create Admin
                    </h1>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" name="name" class="form-control shadow-none rounded-0 py-2 px-3" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" name="email" class="form-control shadow-none rounded-0 py-2 px-3" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" class="form-control shadow-none rounded-0 py-2 px-3" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password-confirmation" class="form-label">Password Confirmation</label>
                        <input id="password-confirmation" type="password" name="password-confirmation" class="form-control shadow-none rounded-0 py-2 px-3" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary rounded-0 width-96" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-theme rounded-0 width-96">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Delete Modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 rounded-0 shadow-none">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Delete Admin
                    </h1>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-75 height-75" alt="archive">
                    </div>
                    <div class="fs-5 fw-medium text-center"> Are you sure? </div>
                </div>
                <div class="modal-footer border-0">
                    <div class="w-100 row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary rounded-0 w-100" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-danger rounded-0 w-100">
                                Confirm
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
