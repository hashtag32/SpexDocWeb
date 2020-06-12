var $ = jQuery;
//Front End Navigation
$(document).ready(function () {
  // frontEndFunctions();
  setGPSPosition();
});


function setGPSPosition() {
  // Read in GPS location
  navigator.geolocation.getCurrentPosition(function (location) {
    var start_gps_location_id = document.getElementById(
      "start_gps_location_input"
    );
    console.log(location.coords.longitude);
    start_gps_location_id.value =
      location.coords.latitude + ", " + location.coords.longitude;
  });
}

function checkForm() {
  return true;
}

// Set the marker on maps
function displayMap() {
  var start_gps_location_id = document.getElementById(
    "start_gps_location_input"
  );
  var start_gps_value = start_gps_location_id.value;

  var startLong;
  var startLat;
  if (start_gps_value != "") {
    start_gps_array = start_gps_value.split(/, /);
    startLat = parseFloat(start_gps_array[0]);
    startLong = parseFloat(start_gps_array[1]);
  } else {
    //todo:remove
    startLat = 49.412069;
    startLong = 6.981903;
  }

  var end_gps_location_id = document.getElementById("end_gps_location_input");

  var end_gps_value = end_gps_location_id.value;

  var endLat;
  var endLong;
  if (end_gps_value != "") {
    end_gps_array = end_gps_value.split(/, /);
    endLat = parseFloat(end_gps_array[0]);
    endLong = parseFloat(end_gps_array[1]);
  } else {
    //todo:remove
    startLat = 49.412069;
    startLong = 6.981903;
  }

  var middleLong = (startLong + endLong) / 2;
  var middleLat = (startLat + endLat) / 2;

  var total_dist_km = distance(startLat, startLong, endLat, endLong, "K");
  total_dist_m = (total_dist_km * 1000).toFixed(2);
  document.getElementById("distance_output").innerText += total_dist_m + " m";

  var price_dollar = price(total_dist_m);

  document.getElementById("price_output").innerText += price_dollar + " $";

  console.log(total_dist_m);
  console.log(middleLong);
  console.log(middleLat);

  var locations = [
    ["Start Point", startLat, startLong],
    ["End Point", endLat, endLong],
  ];

  var map = new google.maps.Map(document.getElementById("map-canvas"), {
    mapTypeId: google.maps.MapTypeId.ROADMAP,
  });

  // Fitting maps into the bounder
  var latlng = [
    new google.maps.LatLng(startLat, startLong),
    new google.maps.LatLng(endLat, endLong),
  ];
  var latlngbounds = new google.maps.LatLngBounds();
  for (var i = 0; i < latlng.length; i++) {
    latlngbounds.extend(latlng[i]);
  }
  map.fitBounds(latlngbounds);

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map,
    });

    google.maps.event.addListener(
      marker,
      "click",
      (function (marker, i) {
        console.log("fired");
        return function () {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        };
      })(marker, i)
    );
  }

  // Formatting
  $("#section-maps").fadeIn("slow");
  $('html,body').animate({scrollTop: $('#section-maps').offset().top}, 800 );

}

// General functions

function price(distance_m) {
  // 2.5$ fixed + 1$ per 200m
  return 2.5 + (1 * distance_m) / 200;
}

function distance(lat1, lon1, lat2, lon2, unit) {
  if (lat1 == lat2 && lon1 == lon2) {
    return 0;
  } else {
    var radlat1 = (Math.PI * lat1) / 180;
    var radlat2 = (Math.PI * lat2) / 180;
    var theta = lon1 - lon2;
    var radtheta = (Math.PI * theta) / 180;
    var dist =
      Math.sin(radlat1) * Math.sin(radlat2) +
      Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta); 
    if (dist > 1) {
      dist = 1;
    }
    dist = Math.acos(dist);
    dist = (dist * 180) / Math.PI;
    dist = dist * 60 * 1.1515;
    if (unit == "K") {
      dist = dist * 1.609344;
    }
    if (unit == "N") {
      dist = dist * 0.8684;
    }
    return dist;
  }
}
