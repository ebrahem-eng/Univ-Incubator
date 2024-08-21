<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Local Admin Table</title>
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
                        <h2 class="mb-2 page-title">Local Admin Table </h2>

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
                                                                Assign Role</h3>

                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="card">
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
                                                                <div class="card-body">

                                                                    <form
                                                                        action="{{ route('gadmin.permissions.roles', $permission->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="form-body">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="form-label">Permission
                                                                                            Name:</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="nametext"
                                                                                            aria-describedby="name"
                                                                                            placeholder="Name"
                                                                                            name="Name"
                                                                                            value="{{ $permission->name }}"
                                                                                            disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group mb-4">
                                                                                        <label
                                                                                            class="form-label">Roles:</label>

                                                                                        <select
                                                                                            class="custom-select mr-sm-2"
                                                                                            id="inlineFormCustomSelect"
                                                                                            name="role">
                                                                                            @foreach ($roles as $role)
                                                                                                <option>
                                                                                                    {{ $role->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>


                                                                                    <div class="form-actions">
                                                                                        <div class="text-left">
                                                                                            <button type="submit"
                                                                                                class="btn btn-rounded  btn-info ">Assign</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </form>

                                                                    <div class="row">
                                                                        <div class="col-md-7 col-sm-5 p-5">
                                                                            <h4 class="card-title">Permission Roles</h4>
                                                                            <div class="list-group"> <a
                                                                                    href="javascript:void(0)"
                                                                                    class="list-group-item active">{{ $permission->name }}</a>
                                                                                <br>

                                                                                @if ($permission->roles)
                                                                                    @foreach ($permission->roles as $permission_roles)
                                                                                        <form method="post"
                                                                                            action="{{ route('gadmin.permissions.roles.remove', [$permission->id, $permission_roles->id]) }}">
                                                                                            @csrf
                                                                                            @method('delete')
                                                                                            <button
                                                                                                class=" list-group-item list-group-item-action btn-danger ">
                                                                                                {{ $permission_roles->name }}
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
    {{-- @include('layouts.GlobalAdmin.LinkJS') --}}

</body>

</html>
