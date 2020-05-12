<nav class="navbar is-light " role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">
            <img src="{{asset('img/logo.png')}}" alt="logo">
        </a>

        <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div class="navbar-menu" id="navMenu">
        @auth
            <div class="navbar-start">
                <a class="navbar-item" href="{{route('empresa.index')}}">Empresas</a>
                <a class="navbar-item" href="{{route('usuario.index')}}">Usuarios</a>
            </div>

        @endauth

        <div class="navbar-end" id="navbarBasicExample">
            @guest
                <div class="navbar-item">
                    <div class="buttons">
                        @if (Route::has('register'))
                            <a class="button is-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        <a class="button is-light" href="{{ route('login') }}"><strong>{{ __('Login') }}</strong></a>
                    </div>
                </div>
            @else
                <div class="navbar-item has-dropdown is-hoverable is-right">
                    <a class="navbar-link" href="{{route('usuario.show', ['usuario' => Auth::user()->id ])}}">
                        <i class="fas fa-user-edit"></i> {{ Auth::user()->name }}
                    </a>

                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>
                </div>
            @endguest
        </div>
    </div>

</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>