@include('components.homecss')

<body class="boxed_wrapper ltr">
    <!-- page-direction end -->

    @include('components.header')

    <!-- Brator categories list three area end -->
    <div class="brator-map-area design-one">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brator-map">
                        <style>
                            #map {
                                height: 180px;
                            }

                        </style>
                        <div id="mapid" class="center-block" style="width: 100%; height: 700px;"></div>
                        <script>

                            var mymap = L.map('mapid');
                            var icon = L.icon({
                                iconUrl: "{{ asset('../homepage/images/icons/momo.jpg') }}"
                            });
                            icon.options.shadowSize = [0, 0];
                            L.tileLayer(
                                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoieXZhbjk5IiwiYSI6ImNsMzdoM2ltYzBhMjIzY250ZGx0ODBtNXUifQ.Ff_HDqm6vbFNxFceg7TrCg', {
                                    attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                    maxZoom: 18,
                                    id: 'mapbox/streets-v11',
                                    tileSize: 512,
                                    zoomOffset: -1,
                                }).addTo(mymap);
                            mymap.setView(new L.LatLng(-1.882914, 30.144405), 9);

                            $.getJSON({
                                url: '{{route('amagarage','3')}}'
                            }).done(function(responseJson) {
                               
                                var bounds = [];
                                
                                for (var i = 0; i < responseJson.length; ++i) {
                                    thisMarker = L.marker([responseJson[i].garg_latt, responseJson[i].garg_longi], {
                                        icon: icon
                                    }).addTo(mymap).bindPopup(responseJson[i].name);
                                    bounds.push([responseJson[i].garg_latt, responseJson[i].garg_longi]);
                                }
                                mymap.fitBounds(bounds, {
                                    padding: [20, 20]
                                });
                            }).fail(function(xhr, status, error) {
                                alert("There is a problem with your route to your json data: " + status + " " + error + " " + xhr
                                    .status + " " + xhr.statusText)
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header one end-->


    @include('components.footer')
    @include('components.homejs')
