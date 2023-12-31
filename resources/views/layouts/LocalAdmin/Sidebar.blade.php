<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('gadmin.index') }}">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('ladmin.index') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
        </ul>

        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Components</span>
        </p>

        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">

                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                        class="bi bi-building" viewBox="0 0 14 14">
                        <path
                            d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                        <path
                            d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z" />
                    </svg>

                    <span class="ml-3 item-text">University Managment</span><span class="sr-only"></span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                    <li class="nav-item active">
                        <a class="nav-link pl-3" href="{{ route('ladmin.university.index') }}"><span
                                class="ml-1 item-text">University
                                Table</span></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('gadmin.university.create') }}"><span
                                class="ml-1 item-text">Add
                                University</span></a>
                    </li> --}}

                    {{-- <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('gadmin.university.archive') }}"><span
                                class="ml-1 item-text">University
                                Archive</span></a>
                    </li> --}}
                </ul>
            </li>
        </ul>

        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">

                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                        class="bi bi-person-gear" viewBox="0 0 14 14">
                        <path
                            d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                    </svg>

                    <span class="ml-3 item-text">Ads Managment</span><span class="sr-only"></span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                    <li class="nav-item active">
                        <a class="nav-link pl-3" href="{{ route('ladmin.ads.index') }}"><span class="ml-1 item-text">Ads
                                Table
                            </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('ladmin.ads.create') }}"><span
                                class="ml-1 item-text">Add
                                Ads</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('ladmin.ads.archive') }}"><span
                                class="ml-1 item-text">Ads
                                Archive</span></a>
                    </li>
                </ul>
            </li>
        </ul>

        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Authorization</span>
        </p>
        <br>


        <ul class="navbar-nav flex-fill w-100 mb-2">

            <li class="nav-item w-100">

                <a class="nav-link pl-3" href="{{ route('gadmin.roles.index') }}">
                    <i class="fe fe-lock fe-16"></i>
                    <span class="ml-3 item-text">Role</span>

                </a>

            </li>
        </ul>

        <ul class="navbar-nav flex-fill w-100 mb-2">

            <li class="nav-item w-100">

                <a class="nav-link pl-3" href="{{ route('gadmin.permissions.index') }}">
                    <i class="fe fe-key fe-16"></i>
                    <span class="ml-3 item-text">Permission</span>

                </a>

            </li>
        </ul>



        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Authuntication</span>
        </p>
        <br>

        <ul class="navbar-nav flex-fill w-100 mb-2">

            <li class="nav-item w-100">

                <a class="nav-link pl-3" href="#" onclick="document.getElementById('logoutForm').submit();">

                    <i class="fe fe-log-out fe-16"></i>
                    <span class="ml-3 item-text">Logout</span>

                </a>

            </li>
        </ul>
        <form id="logoutForm" action="{{ route('gadmin.logout') }}" method="post">
            @csrf
        </form>
    </nav>
</aside>
