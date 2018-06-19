$(document).ready(function(){

    fetch_data();

    function fetch_data() {

        $.ajax({

            url: "http://localhost/land-digitization/backend/otherapi/postgis_geojson.php?geotable=regions&geomfield=geom",
            method: "POST",
            success: function (data) {


                // var map = L.map('map').setView([1.957709,37.297204],6);
                var map = L.map('map').setView([-6.369028, 34.888822000000005], 6);
                var current_position, current_accuracy;


                L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                // L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                //     maxZoom: 20,
                //     subdomains:['mt0','mt1','mt2','mt3']
                // }).addTo(map);
                map.locate({setView: true, maxZoom: 16});
                layer = L.geoJSON(data, {
                    onEachFeature: function (feature, layer) {
                        layer.bindPopup('<strong>' + feature.properties.region_nam + '</strong><p>name: ' + feature.properties.region_cod + '</p>');
                    }
                }).addTo(map);
                map.addControl( new L.Control.Gps() );


                //new GPSControl({}).addTo(map);





                function onLocationFound(e) {
                    // if position defined, then remove the existing position marker and accuracy circle from the map
                    if (current_position) {
                        map.removeLayer(current_position);
                        map.removeLayer(current_accuracy);
                    }

                    var radius = e.accuracy / 2;

                    current_position = L.marker(e.latlng).addTo(map)
                        .bindPopup("You are within " + radius + " meters from this point").openPopup();

                    current_accuracy = L.circle(e.latlng, radius).addTo(map);
                }

                map.on('locationfound', onLocationFound);

                function onLocationError(e) {
                    alert(e.message);
                }

                map.on('locationerror', onLocationError);

            }


        });
    }

});