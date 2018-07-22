<nav class="navbar fixed-top navbar-expand-md navbar-light bg-transparent">
  <div class="container">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">

    </div>
    <div class="mx-auto order-0">
      <a class="navbar-brand mx-auto" href="{{ url('/')}}">Smart Repair</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle"></i>
            @if(Auth::guest())
            Guest
            @else
            {{Auth::user()->name}}
            @endif
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @if(Auth::guest())
            <a class="dropdown-item" href="{{url('login')}}">Login</a>
            <a class="dropdown-item" href="{{url('register')}}">Register</a>

            @else
            <a class="dropdown-item" href="{{url('profil')}}">Profil</a>

            <div class="dropdown-divider"></div>
            
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
          </a>


          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
          @endif
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>
