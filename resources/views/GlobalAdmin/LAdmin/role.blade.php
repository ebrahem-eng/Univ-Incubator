<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Local Admin Role And Permission</title>
    <!-- Simple bar CSS -->

    @include('layouts.GlobalAdmin.LinkHeader')

</head>

<body class="vertical  light  ">
    <div class="wrapper">

        @include('layouts.GlobalAdmin.Header')


        @include('layouts.GlobalAdmin.Sidebar')


        <main role="main" class="main-content">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        {{-- <h2 class="mb-2 page-title">Local Admin Table </h2> --}}

                        <div class="row my-4">
                            <!-- Small table -->
                            <div class="col-md-12">

                                {{-- message Section --}}

                                @if (session('success_message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ session('success_message') }}
                                    </div>
                                @endif

                                {{-- end  message Section --}}

                                <div class="card shadow">
                                    <div class="card-body">



                                        {{-- @extends('Admin.empty') --}}


                                        <div class="preloader">
                                            <div class="lds-ripple">
                                                <div class="lds-pos"></div>
                                                <div class="lds-pos"></div>
                                            </div>
                                        </div>
                                        <div id="main-wrapper" data-theme="light" data-layout="vertical"
                                            data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed"
                                            data-header-position="fixed" data-boxed-layout="full">

                                            {{-- @include('layouts.adminHeader') --}}


                                            <div class="page-wrapper">

                                                <div class="page-breadcrumb">
                                                    <div class="row">
                                                        <div class="col-7 align-self-center">
                                                            <h3
                                                                class="page-title text-truncate text-dark font-weight-medium mb-1">
                                                                Local Admin Roles</h3>
                                                            {{-- <div class="d-flex align-items-center">
                                                                <nav aria-label="breadcrumb">
                                                                    <ol class="breadcrumb m-0 p-0">
                                                                        <li class="breadcrumb-item"><a
                                                                                href="{{ route('gadmin.index') }}">Dashboard/Employe/Employe
                                                                                Roles</a>
                                                                        </li>
                                                                    </ol>
                                                                </nav>
                                                            </div> --}}
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="card">

                                                                {{-- message section --}}

                                                                @if (session('message_success'))
                                                                    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                                                                        role="alert">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="alert" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                        {{ session('message_success') }}
                                                                    </div>
                                                                @endif

                                                                @if (session('message_err'))
                                                                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                                                                        role="alert">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="alert" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                        {{ session('message_err') }}
                                                                    </div>
                                                                @endif

                                                                {{-- end message section  --}}

                                                                <div class="card-body">


                                                                    <div class="form-body">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Local
                                                                                        Admin Name:</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="nametext"
                                                                                        aria-describedby="name"
                                                                                        name="Name"
                                                                                        value="{{ $ladmin->name }}"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Local
                                                                                        Admin Email:</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        aria-describedby="email"
                                                                                        name="email"
                                                                                        value="{{ $ladmin->email }}"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">


                                                                            <form
                                                                                action="{{ route('gadmin.ladmin.roles', $ladmin->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <div class="col-md-10">
                                                                                    <div class="form-group mb-5">
                                                                                        <label
                                                                                            class="form-label">Role:</label>

                                                                                        <select
                                                                                            class="custom-select mr-sm-3"
                                                                                            id="inlineFormCustomSelect"
                                                                                            name="role">
                                                                                            @foreach ($roles as $role)
                                                                                                <option selected>
                                                                                                    {{ $role->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="form-actions">
                                                                                    <div class="text-center">
                                                                                        <button type="submit"
                                                                                            class="btn btn-rounded  btn-info ">Assign
                                                                                            Role
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>

                                                                            <form
                                                                                action="{{ route('gadmin.ladmin.permissions', $ladmin->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <div class="col-md-10">
                                                                                    <div class="form-group mb-5">
                                                                                        <label
                                                                                            class="form-label">Permissions:</label>

                                                                                        <select
                                                                                            class="custom-select mr-sm-3"
                                                                                            id="inlineFormCustomSelect"
                                                                                            name="permission">
                                                                                            @foreach ($permissions as $permission)
                                                                                                <option selected>
                                                                                                    {{ $permission->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="form-actions">
                                                                                    <div class="text-center">
                                                                                        <button type="submit"
                                                                                            class="btn btn-rounded  btn-info ">Assign
                                                                                            Permisiion </button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>


                                                                            <div class="col-md-11">
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-sm-4 p-4">
                                                                                        <h4 class="card-title">Role:
                                                                                        </h4>
                                                                                        <div class="list-group">
                                                                                            @if ($ladmin->roles)
                                                                                                @foreach ($ladmin->roles as $ladmin_roles)
                                                                                                    <form
                                                                                                        method="post"
                                                                                                        action="{{ route('gadmin.ladmin.roles.remove', [$ladmin->id, $ladmin_roles->id]) }}">
                                                                                                        @csrf
                                                                                                        @method('delete')
                                                                                                        <button
                                                                                                            class="list-group-item list-group-item-action btn-danger ">
                                                                                                            {{ $ladmin_roles->name }}
                                                                                                        </button>
                                                                                                    </form>
                                                                                                @endforeach
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4 col-sm-4 p-4">
                                                                                        <h4 class="card-title">
                                                                                            Permissions:</h4>
                                                                                        <div class="list-group">
                                                                                            @if ($ladmin->permissions)
                                                                                                @foreach ($ladmin->permissions as $ladmin_permission)
                                                                                                    <form
                                                                                                        method="post"
                                                                                                        action="{{ route('gadmin.ladmin.permissions.revoke', [$ladmin->id, $ladmin_permission->id]) }}">
                                                                                                        @csrf
                                                                                                        @method('delete')
                                                                                                        <button
                                                                                                            class="list-group-item list-group-item-action btn-danger ">
                                                                                                            {{ $ladmin_permission->name }}
                                                                                                        </button>
                                                                                                    </form>
                                                                                                @endforeach
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                        </div>

                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>






                                        </div>
                                    </div>
                                </div> <!-- simple table -->
                            </div> <!-- end section -->
                        </div> <!-- .col-12 -->
                    </div> <!-- .row -->
                </div> <!-- .container-fluid -->

        </main> <!-- main -->
    </div> <!-- .wrapper -->

    <script src="{{ asset('DashboardAssets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('DashboardAssets/js/popper.min.js') }}"></script>
    <script src="{{ asset('DashboardAssets/js/moment.min.js') }}"></script>
    <script src="{{ asset('DashboardAssets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('DashboardAssets/js/simplebar.min.js') }}"></script>
    <script src='{{ asset('DashboardAssets/js/daterangepicker.js') }}'></script>
    <script src='{{ asset('DashboardAssets/js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ asset('DashboardAssets/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('DashboardAssets/js/config.js') }}"></script>
    <script src='{{ asset('DashboardAssets/js/jquery.dataTables.min.js') }}'></script>
    <script src='{{ asset('DashboardAssets/js/dataTables.bootstrap4.min.js') }}'></script>
    <script>
        $('#dataTable-1').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ]
        });
    </script>
    <script src="DashboardAssets/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>

</body>

</html>
