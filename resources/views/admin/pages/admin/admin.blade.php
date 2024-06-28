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
            <button type="button" class="btn btn-theme rounded-0 p-3">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
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
                                        <button type="button" class="btn btn-icon">
                                            <img src="{{asset('/images/svg/admin/pencil-square.svg')}}" class="width-20 height-20" alt="pencil-square">
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-icon">
                                        <img src="{{asset('/images/svg/admin/archive.svg')}}" class="width-20 height-20" alt="archive">
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer pt-3 bg-white border-0 rounded-0">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-center align-items-center">
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

@endsection
