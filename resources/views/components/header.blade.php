<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

           
            @if (Auth::user())
            <li class="nav-item">
                <a class="nav-link text-white" href="/client">Home</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/authdashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/mycars">My cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/myrequests">Car service requests</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link text-white" href="#">Account preferences</a>
                </li> --}}
                <li class="nav-item">
                    <a class="btn btn-sm btn-danger text-light mt-2" href="/client/logout">Sign out</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/signin">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/signup">Sign up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/auth/manager">Garage portal</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/auth/admin">Admin portal</a>
                </li>

            @endif
    
        </ul>
    </div>
</nav>
