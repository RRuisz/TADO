<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class=" container-fluid  d-flex justify-content-between me-5">
        <a class="navbar-brand ms-5" href="{{ route('dashboard') }}">T a D o </a>

        <div class="d-flex justify-content-around">

            <div class=" collapse navbar-collapse me-5" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Teamauswahl
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            @foreach(Auth::user()->team as $team)
                                <li><a class="dropdown-item" href="#">{{$team->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="bg-secondary p-2 fw-bolder text-center  border border-black  mt-auto mb-auto ms-5 me-5" id="time"></div>
            <div class="collapse navbar-collapse me-5 ms-5" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Willkommen zurück, <br>
                            <span class="fw-bolder"> {{Auth::user()->username}} </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Userpanel</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Ausloggen</a></li>

                        </ul>
                    </li>
                </ul>
            </div>

        </div>












        </div>
</nav>
