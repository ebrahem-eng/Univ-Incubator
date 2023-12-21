<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Update University Address</title>
    <!-- Simple bar CSS -->

    @include('layouts.LocalAdmin.LinkHeader')

</head>

<body class="vertical  light  ">
    <div class="wrapper">

        @include('layouts.LocalAdmin.Header')


        @include('layouts.LocalAdmin.Sidebar')


        <main role="main" class="main-content">

            <div class="card-deck">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Update University Address</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ladmin.university.update.address', $university->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="form-row">

                                <div class="form-group col-md-3">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity" name="city"
                                        value="{{ $university->address->city }}" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputCity">Region</label>
                                    <input type="text" class="form-control" id="inputCity" name="region"
                                        value="{{ $university->address->region }}" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputCity">Street</label>
                                    <input type="text" class="form-control" id="inputCity" name="street"
                                        value="{{ $university->address->street }}" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputCity">Near</label>
                                    <input type="text" class="form-control" id="inputCity" name="near"
                                        value="{{ $university->address->near }}" required>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputCity">Details Address(Optional)</label>
                                    <input type="text" class="form-control" id="inputCity" name="details"
                                        value="{{ $university->address->another_details }}">
                                </div>
                            </div>


                            <div class="form-row">

                                <input type="hidden" id="latitude" name="latitude">
                                <br>
                                <input type="hidden" id="longitude" name="longitude">
                                <div id="map" style="height: 500px; width: 1000px;">
                                </div>
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Update Address</button>
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
                lat: parseFloat("{{ $university->address->latitude }}"),
                lng: parseFloat("{{ $university->address->longitude }}")
            }; // default location from the server

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
        }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBddryhfLC4gYIvreVc9YDY4gLv2BrhhmY&callback=initMap"></script>

</body>

</html>
