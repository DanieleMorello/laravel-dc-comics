<header>
    @include('partials.headerTop')
    <nav class="navbar navbar-expand-lg">
        <div class="container my_container_lg justify-content-between px-0">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('#') }}">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#') }}">movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#') }}">tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#') }}">games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#') }}">collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#') }}">videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#') }}">fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#') }}">news</a>
                    </li>
                    <!-- .dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('#') }}" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            shop
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('#') }}">Action</a></li>
                            <li><a class="dropdown-item" href="{{ url('#') }}">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ url('#') }}">Something else here</a></li>
                        </ul>
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <div class="input-group align-self-center">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                    aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </div>
    </nav>
</header>
