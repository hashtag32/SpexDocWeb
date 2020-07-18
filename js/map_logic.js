var TotalMarker = new Array();
var AllowedCircle;
var connectionPolyList;

// Called through API directly
function initMap() {
  // Set View on LA (focused)
  mymap = L.map("mapid").setView([34.0872909,-118.448848], 10);
  
  googleSat = L.tileLayer(
    "https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}",
    {
      maxZoom: 20,
      subdomains: ["mt0", "mt1", "mt2", "mt3"],
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
// Location given by user approval
  var locationMarkerOptions = {
    title: "You are here",
    riseOnHover: true,
    opacity: 0.5,
  };

  L.marker(e.latlng, locationMarkerOptions)
    .addTo(mymap)
    .bindPopup("You are here")
    .openPopup();
}

// Distance drawing
function onMapClick(e) {
  if (TotalMarker.length == 0) {
    // Start Point
    //todo: add custom icon
    var markerOptionsStart = {
      title: "Pickup",
      clickable: true,
      draggable: false,
    };
    var LamMarker = new L.marker(e.latlng, markerOptionsStart)
      .bindPopup("<b>Pickup Location</b><br>Drone will pick up your package here");
    TotalMarker.push(LamMarker); 
    mymap.addLayer(LamMarker);
    // Show Pickup Location
    LamMarker.openPopup();

    var circleOptions = {
      radius: 5000,
    };

    AllowedCircle = L.circle(e.latlng, circleOptions).addTo(mymap);

  } else if (TotalMarker.length == 1) {
    var distance_select = distance(
      TotalMarker[0]._latlng.lat,
      TotalMarker[0]._latlng.lng,
      e.latlng.lat,
      e.latlng.lng,
      "K"
    );

    if (distance_select > 5) {
      // Click was out of allowed radius
      // Focus back on the middle of the circle
      mymap.setView([TotalMarker[0]._latlng.lat,TotalMarker[0]._latlng.lng],13);
      return;
    }

    // End Point
    var markerOptionsEnd = {
      title: "End",
      clickable: true,
      draggable: false,
    };

    var LamMarker = new L.marker(e.latlng, markerOptionsEnd)
      .bindPopup("<b>Destination Location</b><br>Drone will drop your package here");

    TotalMarker.push(LamMarker);
    mymap.addLayer(LamMarker);
    // Show Pickup Location
    LamMarker.openPopup();

    // Planning finished
    mymap.removeLayer(AllowedCircle);

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

function deleteAllMarkers() {
  for (i = 0; i < TotalMarker.length; i++) {
    mymap.removeLayer(TotalMarker[i]);
  }
  mymap.removeLayer(connectionPolyList);
  TotalMarker = new Array();
  document.getElementById("distance_output").innerText = "";
  document.getElementById("price_output").innerText = "";
}
