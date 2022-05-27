<nav class="navbar fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <i class="fa fa-bars"></i>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <hr>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    @if(Auth::check())
                        <li class="nav-item dropdown">
                            <button class="btn dropdown-toggle nav-link notranslate" role="button" id="dropdownSchoolButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book"></i>
                                School
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownSchoolButton">
                                <a class="dropdown-item" href="{{ route('posts.index') }}"><i class="fa fa-book"></i> DevOps 3</a>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        @if(Auth::check())
                            <div class="dropdown">
                                <button class="btn dropdown-toggle nav-link notranslate" role="button" id="dropdownMenuButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                                    {{ Auth::user()->name }}
                                </button>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
{{--                                    <a href="{{ route('supports.index') }}" class="dropdown-item"><i class="fa fa-support"></i> Support</a>--}}
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Uitloggen</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>

                    @elseif(!Auth::check())
                        <li class="nav-item dropdown">
                            <button class="btn dropdown-toggle nav-link notranslate" role="button" id="dropdownMenuButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                                Account
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/login"><i class="fa fa-user"></i> Login</a>
                            </ul>
                        </li>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

