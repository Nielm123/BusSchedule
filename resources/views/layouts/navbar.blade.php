<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="/">BusSchedule</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Kontakt<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Rozklady
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Rzeszów-Lancut-Przeworsk</a>
                    <a class="dropdown-item" href="#">Przeworsk-Lancut-Rzeszów</a>
                    <div class="dropdown-divider"></div>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    @else
                        <a class="dropdown-item" href="{{route('login')}}">Login</a>
                    @endif
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
