<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Role Table</title>
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
                        <h2 class="mb-2 page-title">Role Table </h2>

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
                                                            {{-- <h3
                                                                class="page-title text-truncate text-dark font-weight-medium mb-1">
                                                                Role Manage</h3> --}}

                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-8">

                                                        <div class="card-body">

                                                            {{-- message section --}}

                                                            {{-- end message section --}}

                                                            <div class="table-responsive">

                                                                @if (count($roles) > 0)
                                                                    <table id="multi_col_order"
                                                                        class="table table-striped table-bordered display no-wrap"
                                                                        style="width:100%">
                                                                        <thead class="bg-info text-white">
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Name</th>
                                                                                <th></th>
                                                                            </tr>

                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($roles as $role)
                                                                                <tr>
                                                                                    <td>{{ $role->id }}</td>
                                                                                    <td>{{ $role->name }}</td>
                                                                                    <td>
                                                                                        <a type="button"
                                                                                            class="btn btn-circle btn-dark"
                                                                                            href="{{ route('gadmin.go.roles.permissions', $role->id) }}"><i class="fe fe-key fe-16"></i>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @else
                                                                            <div style="text-align: center;"
                                                                                class="card">
                                                                                <h2
                                                                                    style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ; color:#5f76e8 ; margin-top:15px; margin-bottom:15px;">
                                                                                    No Data</h2>
                                                                            </div>
                                                                @endif

                                                                </tbody>
                                                                </table>
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
