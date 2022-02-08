<nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts/create">Create Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="example">Example</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/car">Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create">Create Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show">Show Color</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                            {{-- original format --}}
                        {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} --}}

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ ('logout') }}"onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}

                            {{-- The GET method is not supported for this route. Supported methods: POST. --}}
                            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="logout">Logout</a> --}}

                            <a class="dropdown-item" href="/dashboard">Dashboard</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            {{-- <form id="dashboard-form" action="{{ ('/dashboard') }}" method="POST" class="d-none"> --}}
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
