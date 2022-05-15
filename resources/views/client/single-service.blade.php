@include('components.homecss')

<body class="boxed_wrapper ltr">
    <!-- page-direction end -->

    @include('components.header')


    <div class="container" style="margin-top:50px;">
        <div class="col-md-12">
            <div class="brator-section-header">
                <div class="brator-section-header-title">
                    <h2>Browse Garages providing @foreach ($garages as $garage)
                            {{ $garage->serv_name }}
                        @endforeach Service </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($garages as $garage)
                <div class="col-md-3">
                    <div class="carte-sl">
                        <div class="carte-image">
                            <img src="../garagephoto/{{ $garage->garg_picture }}" />
                        </div>

                        {{-- <a class="carte-action" href="#"><i class="fa fa-heart"></i></a> --}}
                        <h4 class="carte-heading">
                            {{ $garage->garg_name }}
                        </h4>
                        <div class="carte-text">
                            <span>Address : {{ $garage->garg_address }}</span>
                        </div>
                        <div class="carte-text">
                            <span>District : {{ $garage->namedistrict }}</span>
                        </div>
                        @if (Auth::user())
                            <a href="/service-request/{{ $garage->garg_id }}" class="carte-button"> Request
                                service</a>
                        @else
                            <a href="/signin" class="carte-button"> Login to Request service</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
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
                                iconUrl: "{{ asset('homepage/images/icons/momo.jpg') }}"
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
                            }).done(function(amagarages) {
                                var bounds = [];
                                
                                for (var i = 0; i < amagarages.length; ++i) {
                                    thisMarker = L.marker([amagarages[i].garg_latt, amagarages[i].garg_longi], {
                                        icon: icon
                                    }).addTo(mymap).bindPopup(amagarages[i].name);
                                    bounds.push([amagarages[i].garg_latt, amagarages[i].garg_longi]);
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
