<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
          height="30"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
         @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/projects')}}">Projects</a>
                     </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                            @endif
                    @endauth
                </div>
            @endif
      </ul>
      @if (Route::has('login'))
    @auth
    <div class="btn-group shadow-0">
  <button type="button" class="btn btn-light dropdown-toggle" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
  {{ Auth::user()->name }}
  </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Log Out') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    @endauth
@endif
    </div>
  </div>
</nav>