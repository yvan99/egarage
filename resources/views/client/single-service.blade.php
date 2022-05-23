
    @include('components.homecss')

    <style type="text/css">
        .leaflet-map-pane {
            z-index: 1 !important;
        }

        .leaflet-google-layer {
            z-index: 0 !important;
        }

    </style>

</head>

<body class="boxed_wrapper ltr">
    @include('components.header')    
    <div id="map" class="container-fluid rounded shadow" style="width: 100%; height: 100%"></div>
    @include('components.footer')

    <script>
        var map = L.map('map');

        var hospitals = <?php echo $garageux; ?>;


        const mapped = hospitals.map((element) => ({
            ...element,
            type: 'Feature',
            geometry: {
                type: "Point",
                coordinates: [hospitals[1].garg_longi, hospitals[1].garg_latt]
            },
            properties: {
                Name: hospitals[1].garg_name,
                Status: "Operational",
                Image: hospitals[1].garg_picture,
                Address: hospitals[1].garg_address,
            },
        }));
        console.log(mapped)


        function onEachFeature(feature, layer) {
            var popupContent =
                `<img src=../garagephoto/${feature.properties.Image}><b> ${feature.properties.Name}</b><p>${feature.properties.Address}</p><a href="/service-request/" class="carte-button text-dark"> Request service</a>`;

            if (feature.properties && feature.properties.popupContent) {
                popupContent += feature.properties.popupContent;
            }

            layer.bindPopup(popupContent);
        }
        map.setView([-1.882914, 30.144405], 9);
        mapLink =
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoieXZhbjk5IiwiYSI6ImNsMzdoM2ltYzBhMjIzY250ZGx0ODBtNXUifQ.Ff_HDqm6vbFNxFceg7TrCg', {
                attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
            }).addTo(map);
        L.geoJson(mapped, {
            onEachFeature: onEachFeature
        }).addTo(map);
    </script>

</body>

</html>
