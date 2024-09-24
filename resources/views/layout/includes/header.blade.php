<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <!-- Brand Logo and Name -->
        <div class="header align-items-center">
            <h1 class="ms-3">Tamco</h1>
        </div>

        <!-- Search Bar (Centered) -->
        <div class="input-group search-bar mx-auto d-none d-lg-flex">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary" type="button">Search</button>
        </div>
        <!-- Login, Wishlist, and Cart Icons (Aligned to the right) -->
        <div class="d-flex align-items-center ms-auto">
            <a href="{{url('Login')}}" class="d-flex me-3">
                <!-- Login Account SVG Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 me-2">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="{{url('Login')}}" class="d-flex  me-3">
                <!-- Wishlist SVG Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                </svg>
            </a>
            <a href="{{url('Login')}}" class="d-flex me-3">
                <!-- Your Cart SVG Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                </svg>
            </a>
        </div>
    <!-- Navbar Toggler (Visible on small screens) -->
    <button class="navbar-toggler ms-auto bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

        <!-- Collapsible Content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- All Categories Dropdown (Visible on large screens) -->
            <div class="dropdown d-none d-lg-block me-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    All Categories
                </button>
                <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                    <li><a class="dropdown-item" href="#">Category 1</a></li>
                    <li><a class="dropdown-item" href="#">Category 2</a></li>
                    <li><a class="dropdown-item" href="#">Category 3</a></li>
                </ul>
            </div>

            <!-- Navbar Links -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item p-2">
                    <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="#">Family Packs</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="{{url('New_arrival')}}">New Arrivals</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="{{url('About')}}">About</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="{{url('Contact')}}">Contact</a>
                </li>
                <a href="{{url('Login')}}" class="btn btn-outline mt-3 mt-lg-0 ms-lg-3" role="button">Sign Up</a>
            </ul>

        </div>
    </div>
</nav>


