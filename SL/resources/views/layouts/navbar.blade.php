<a href="{{ url('/') }}">
    <img class='imgs-75' src="{{ URL::asset('images/SignFieldLogo.png') }}" alt="">
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav me-auto d-flex gap-2">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <a href="{{ route('words.index') }}"><button class="btn btn-outline-bg-l fs-5 vws-1 text-white">Words</button></a>
        </div>
        @if (Auth::check())
            @if (auth()->user()->isAdmin)
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('admin.users.index') }}"><button class="btn btn-outline-bg-l fs-5 vws-1 text-white">Users</button></a>
                </div>
            @endif
        @endif
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ms-auto align-items-start text-bg-l">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item px-1">
                    <a class="nav-link p-0" href="{{ route('login') }}"><button class="btn btn-outline-bg-l fs-5 text-white border border-2 border-bg-l vws-1">{{ __('Login') }}</button></a>
                </li>
            @endif
            @if (Route::has('register'))
                <li class="nav-item px-1">
                    <a class="nav-link p-0" href="{{ route('register') }}"><button class="btn btn-outline-bg-l fs-5 text-white border border-2 border-bg-l vws-1">{{ __('Sign-up') }}</button></a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end bg-bg-l" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item bg-bg-l text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <a class="dropdown-item bg-bg-l text-white" href="{{ route('profile.edit') }}">
                        {{ __('Profile') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>