var TotalMarker = new Array();
var connectionPolyList;

// Called through API directly
function initMap() {
  mymap = L.map("mapid").setView([38.4440305, -104.1334375], 3);

  L.tileLayer(
    "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
    {
      maxZoom: 18,
      id: "mapbox/streets-v11",
      tileSize: 512,
      zoomOffset: -1,
    }
  ).addTo(mymap);

  mymap.locate({
    setView: true,
    maxZoom: 15,
  });

  var geoCoderoptions = {
    useMapBounds: false,
  };

  var searchControl = L.esri.Geocoding.geosearch(geoCoderoptions).addTo(mymap);

  L.control.scale().addTo(mymap);
  var results = new L.LayerGroup().addTo(mymap);

  searchControl.on("results", function (data) {
    results.clearLayers();
  });

  //Listener
  mymap.on("locationfound", onLocationFound);
  mymap.on("click", onMapClick);
}

function onLocationFound(e) {
  console.log("location found");
  var radius = e.accuracy;

  var locationMarkerOptions = {
    title: "You are here",
    riseOnHover: true,
    opacity: 0.5,
  };

  L.marker(e.latlng, locationMarkerOptions)
    .addTo(mymap)
    .bindPopup("You are here")
    .openPopup();

  // L.circle(e.latlng, radius).addTo(mymap);
}

// Distance drawing
function onMapClick(e) {
  if (TotalMarker.length == 0) {
    // Start Point
    //todo: add custom icon
    var markerOptionsStart = {
      title: "Start",
      clickable: true,
      draggable: true,
    };
    var LamMarker = new L.marker(e.latlng, markerOptionsStart)
      .bindPopup("<b>Start Point</b>")
      .openPopup();
    TotalMarker.push(LamMarker);
    mymap.addLayer(LamMarker);
  } else if (TotalMarker.length == 1) {
    // End Point
    var markerOptionsEnd = {
      title: "End",
      clickable: true,
      draggable: true,
    };

    var LamMarker = new L.marker(e.latlng, markerOptionsEnd)
      .bindPopup("<b>End Point</b>")
      .openPopup();
    TotalMarker.push(LamMarker);
    mymap.addLayer(LamMarker);

    // Planning finished
    var pointA = new L.LatLng(
      TotalMarker[0]._latlng.lat,
      TotalMarker[0]._latlng.lng
    );
    var pointB = new L.LatLng(
      TotalMarker[1]._latlng.lat,
      TotalMarker[1]._latlng.lng
    );
    drawLine(pointA, pointB);

    SetDistanceAndPrice();
  } else if (TotalMarker.length > 1) {
    deleteAllMarkers();
  }
}

function deleteAllMarkers() {
  for (i = 0; i < TotalMarker.length; i++) {
    mymap.removeLayer(TotalMarker[i]);
  }
  mymap.removeLayer(connectionPolyList);
  TotalMarker = new Array();
  document.getElementById("distance_output").innerText = "";
  document.getElementById("price_output").innerText = "";
}

function drawLine(pointA, pointB) {
  var pointList = [pointA, pointB];

  connectionPolyList = new L.Polyline(pointList, {
    color: "red",
    weight: 3,
    opacity: 0.5,
    smoothFactor: 1,
  });
  mymap.addLayer(connectionPolyList);
}
