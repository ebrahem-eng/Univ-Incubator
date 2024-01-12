<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Update Specialization</title>
    <!-- Simple bar CSS -->

    @include('layouts.GlobalAdmin.LinkHeader')

</head>

<body class="vertical  light  ">
    <div class="wrapper">

        @include('layouts.GlobalAdmin.Header')


        @include('layouts.GlobalAdmin.Sidebar')


        <main role="main" class="main-content">

            <div class="card-deck">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Update Specialization</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('gadmin.specialization.update' , $specialization->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Name"
                                        name="name" value="{{$specialization->name}}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="simpleInput">Specialization Image</label>
                                    <input type="file" class="form-control" id="simpleInput" name="img">
                                </div>
                               
                            </div>

            
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck"> Check me out </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div> <!-- / .card-desk-->

        </main> <!-- main -->
    </div> <!-- .wrapper -->

    @include('layouts.GlobalAdmin.LinkJS')


</body>

</html>
