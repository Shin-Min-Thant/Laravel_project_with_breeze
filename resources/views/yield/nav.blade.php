<nav class="navbar navbar-expand-lg navbar-dark bg-secondary p-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/')}}">Joy for life</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                  <a class="nav-link mx-2 active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="#">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="#">Contact</a>
                </li>

             <li class="nav-item dropdown">
                  <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Member
                  </a>

                  <div class="dropdown-menu">
                    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="dropdown-item">Dashboard</a>
                    @else
                    {{-- <a class="dropdown-item" href="#">Action</a> --}}
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('login') }}" class="dropdown-item">Log in</a>

                    {{-- <a class="dropdown-item" href="#">Another action</a> --}}
                    <div class="dropdown-divider"></div>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                    @endif
                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    <div class="dropdown-divider"></div>
                    @endauth
                    @endif
                  </div>
              </li>


            </ul>

      </div>
    </div>
    </nav>
