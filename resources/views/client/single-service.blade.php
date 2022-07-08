@include('components.homecss')

<body class="boxed_wrapper ltr">
    @include('components.header')
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h5 class="text-warning">Locate Garages by ratings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url()->current() }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="rating">Choose your rating</label>
                                <select name="rates" class="form-control" id="rating">
                                    <option value="1" selected>1.0</option>
                                    <option value="2">2.0</option>
                                    <option value="3">3.0</option>
                                    <option value="4">4.0</option>
                                    <option value="5">5.0</option>
                                </select>
                                <button type="submit" class="btn btn-success mt-2">Locate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 mr-5">
                <div id="map" class="rounded" style="width:100%;height: 500px;top:0%;margin-left:17%"></div>
            </div>

        </div>

        @include('components.footer')

        <script>
            let map = L.map('map');
            let garages = <?php echo $garageux; ?>;

            // function createCustomIcon(feature, latlng) {
            //     let myIcon = L.icon({
            //         iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-icon.png',
            //         shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            //         iconSize: [25, 25], // width and height of the image in pixels
            //         shadowSize: [35, 20], // width, height of optional shadow image
            //         iconAnchor: [12, 12], // point of the icon which will correspond to marker's location
            //         shadowAnchor: [12, 6], // anchor point of the shadow. should be offset
            //         popupAnchor: [0, 0] // point from which the popup should open relative to the iconAnchor
            //     })
            //     return L.marker(latlng, {
            //         icon: myIcon
            //     })
            // }

            // // create an options object that specifies which function will called on each feature
            // let myLayerOptions = {
            //     pointToLayer: createCustomIcon
            // }

            // // create the GeoJSON layer
            // L.geoJSON(garages, myLayerOptions).addTo(map)

            function onEachFeature(feature, layer) {
                let popupContent =
                    `<img src=../garagephoto/${feature.properties.Image}><b> ${feature.properties.Name}</b><p>${feature.properties.Address}</p><a href="/service-request/${feature.properties.garageId}" class="carte-button text-dark"> Request service</a>`;

                if (feature.properties && feature.properties.popupContent) {
                    popupContent += feature.properties.popupContent;
                }

                layer.bindPopup(popupContent);
            }
            map.setView([-1.882914, 30.144405], 9.5);

            mapLink =
                '<a href="http://openstreetmap.org">OpenStreetMap</a>';
            L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoieXZhbjk5IiwiYSI6ImNsMzdoM2ltYzBhMjIzY250ZGx0ODBtNXUifQ.Ff_HDqm6vbFNxFceg7TrCg', {
                    attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    maxZoom: 30,
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1,
                }).addTo(map);
            L.geoJson(garages, {
                onEachFeature: onEachFeature
            }).addTo(map);
        </script>

</body>

</html>
