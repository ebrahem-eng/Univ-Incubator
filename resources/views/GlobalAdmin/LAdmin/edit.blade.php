<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Update Local Admin</title>
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
                        <strong class="card-title">Update Local Admin</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('gadmin.ladmin.update' , $ladmin->id) }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Name"
                                        name="name" value="{{$ladmin->name}}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="LAdmin@gmail.com"
                                        name="email" value="{{$ladmin->email}}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Phone</label>
                                    <input type="tel" class="form-control" id="inputPassword4" placeholder=""
                                        name="phone" value="{{$ladmin->phone}}" required>
                                </div>

                               
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="simpleInput">Local Admin Image</label>
                                    <input type="file" class="form-control" id="simpleInput" name="img" >
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="inputState">Status</label>
                                    <select id="inputState" class="form-control" name="status">
                                        
                                        <option value="1" {{ $ladmin->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $ladmin->status == 1 ? 'selected' : '' }}>Not Active</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">Gender</label>
                                    <select id="inputState" class="form-control" name="gender">
                                    
                                        <option value="1" {{ $ladmin->gender == 1 ? 'selected' : '' }}>Male</option>
                                        <option value="0" {{ $ladmin->gender == 1 ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="inputPassword4">Age</label>
                                    <input type="number" class="form-control" id="inputPassword4" placeholder=""
                                        name="age" value="{{$ladmin->age}}" required>
                                </div>

                            </div>
                         
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>

            </div> <!-- / .card-desk-->

        </main> <!-- main -->
    </div> <!-- .wrapper -->

    @include('layouts.GlobalAdmin.LinkJS')


</body>

</html>
