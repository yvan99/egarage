@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.manager.header')
@include('components.manager.sidebar')
<div class="hk-pg-wrapper mt-xl-70 mt-sm-10 mt-10">

    <div class="container-fluid">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title mb-20">Garage service request map GIS data</h5>
            <div id="map" class="rounded-lg shadow-lg" style="width:100% !important;height:600px !important"></div>

        </section>
    </div>

</div>

<script>
    var map = L.map('map');
    var requests = <?php echo $requests; ?>;

    var greenIcon = new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    function onEachFeature(feature, layer) {
        var popupContent =
            `<img src=../carphotos/${feature.properties.Image}><b> ${feature.properties.Name}</b><p>${feature.properties.Address}</p>`;

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
    L.geoJson(requests, {
        onEachFeature: onEachFeature
    }).addTo(map);
</script>
@include('components.dashcomp.dashJs')
