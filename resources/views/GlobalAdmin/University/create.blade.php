<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Create University</title>
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
                        <strong class="card-title">Add University</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('gadmin.university.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Name"
                                        name="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Phone</label>
                                    <input type="tel" class="form-control" id="inputPassword4" placeholder="Phone"
                                        name="phone" required>
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-3">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity" name="city" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputCity">Region</label>
                                    <input type="text" class="form-control" id="inputCity" name="region" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputCity">Street</label>
                                    <input type="text" class="form-control" id="inputCity" name="street" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputCity">Near</label>
                                    <input type="text" class="form-control" id="inputCity" name="near" required>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputCity">Details Address(Optional)</label>
                                    <input type="text" class="form-control" id="inputCity" name="details">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="simpleInput">University Image</label>
                                    <input type="file" class="form-control" id="simpleInput" name="img" required>
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="inputState">Status</label>
                                    <select id="inputState" class="form-control" name="status">
                                        <option selected>Choose...</option>
                                        <option value="1">Active</option>
                                        <option value="0">Not Active</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Catigory</label>
                                    <select id="inputState" class="form-control" name="catigoryID">
                                        <option selected>Choose...</option>
                                        @foreach ($catigories as $catigory)
                                            <option value="{{ $catigory->id }}">
                                                @if ($catigory->type == 0)
                                                    <span>Public</span>
                                                @elseif($catigory->type == 1)
                                                    <span>Private</span>
                                                @elseif($catigory->type == 2)
                                                    <span>Virtual</span>
                                                @endif
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <input type="hidden" id="latitude" name="latitude">
                                <br>
                                <input type="hidden" id="longitude" name="longitude">
                                <div id="map" style="height: 500px; width: 1000px;">
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

    <script>
        var map, marker;

        function initMap() {
            // The location of the user
            var myLatLng = {
                lat: -34.397,
                lng: 150.644
            }; // default location

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    myLatLng = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 15,
                        center: myLatLng
                    });

                    marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        draggable: true,
                        title: 'Drag me!'
                    });

                    // Set default values for latitude and longitude
                    document.getElementById('latitude').value = myLatLng.lat;
                    document.getElementById('longitude').value = myLatLng.lng;

                    // Add event listener to marker for position update
                    google.maps.event.addListener(marker, 'dragend', function(event) {
                        document.getElementById('latitude').value = this.getPosition().lat();
                        document.getElementById('longitude').value = this.getPosition().lng();
                    });

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBddryhfLC4gYIvreVc9YDY4gLv2BrhhmY&callback=initMap"></script>
</body>

</html>
