<nav class="navbar navbar-expand-lg fw-medium p-4 sticky-top">
    <div class="container">
        <a class="navbar-brand text-theme-secondary" href="{{route('front.home')}}">
            Skills
        </a>
        <button class="navbar-toggler" type="button" onclick="collapse()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item d-inline-block d-lg-none mb-3 w-100 cursor-pointer">
                    <img src="{{asset('/images/svg/header/close.svg')}}" class="img-fluid width-25 height-25"
                         alt="close" onclick="collapse()">
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="{{route('front.home')}}">
                        Home
                    </a>
                </li>
                <li class="nav-item text-center dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0)">
                                Creative Graphic Design
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0)">
                                Full Web Development
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0)">
                                Cyber Security
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('front.courses')}}">
                                Show all
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="{{route('front.about')}}">
                        About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="{{route('front.contact')}}">
                        Contact Us
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-outline-theme rounded-pill px-4 mx-2" href="{{route('front.login')}}">
                        SignIn
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-theme rounded-pill px-4 mx-2" href="{{route('front.register')}}">
                        SignUp
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>

    function collapse() {
        if (window.innerWidth < 991) {
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
            } else {
                navbarCollapse.classList.add('show');
            }
        }
    }

</script>
