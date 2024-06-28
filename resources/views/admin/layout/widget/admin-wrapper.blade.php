<div class="admin-wrapper">
    <div class="admin-sidebar">
        <div class="admin-sidebar-header">
            <a href="{{route('admin.dashboard')}}" class="h5 mb-0 pb-0 text-decoration-none text-theme">
                Admin Panel
            </a>
            <button type="button" class="btn border-0 sidebar-close">
                <img src="{{asset('/images/svg/header/close.svg')}}" class="width-25 height-25" alt="close">
            </button>
        </div>
        <div class="admin-sidebar-body">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
                Dashboard
            </a>
            <a href="{{route('admin.admin_management')}}" class="nav-link">
                Admin Management
            </a>
            <a href="{{route('admin.user_management')}}" class="nav-link">
                User Management
            </a>
        </div>
    </div>
    <div class="admin-content">
        <div class="admin-content-header">

            <button type="button" class="btn p-0 border-0 sidebar-toggle ">
                <img src="{{asset('/images/svg/admin/justify-left.svg')}}" class="width-25 height-25" alt="justify-left">
            </button>

            <!-- Example single danger button -->
            <div class="dropdown">
                <button type="button" class="bg-transparent width-45 height-45 rounded-circle border-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('/images/home/team-1.jpg')}}" class="width-45 height-45 rounded-circle" alt="">
                </button>
                <ul class="dropdown-menu dropdown-menu mt-1">
                    <li>
                        <a class="dropdown-item" href="{{route('admin.profile')}}">
                            Profile
                        </a>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item">
                            Logout
                        </button>
                    </li>
                </ul>
            </div>

        </div>
        <div class="admin-content-body">

            {{-- content --}}
            @yield('content')

        </div>
    </div>
</div>