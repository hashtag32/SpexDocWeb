var $ = jQuery;
//Front End Navigation
$(document).ready(function () {
  // frontEndFunctions();
  setGPSPosition();
});

window.addEventListener(
  "load",
  function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName("schedule_flight_form");
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener(
        "submit",
        function (event) {
          console.log("fired");
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add("was-validated");
        },
        false
      );
    });
  },
  false
);

function setGPSPosition() {
  // Read in GPS location
  navigator.geolocation.getCurrentPosition(function (location) {
    var start_gps_location_id = document.getElementById(
      "start_gps_location_input"
    );
    start_gps_location_id.value =
      location.coords.latitude + ", " + location.coords.longitude;
  });
}

function checkFormPreFlight() {
  // Date
  var startTimeObj = document.getElementById("startTime_input");
  var form_Validity = startTimeObj.checkValidity();

  // GPS Locations
  var startGPSObj = document.getElementById("start_gps_location_input");
  form_Validity &= startGPSObj.checkValidity();

  var endGPSObj = document.getElementById("end_gps_location_input");
  form_Validity &= endGPSObj.checkValidity();

  return form_Validity;
}

// Set the marker on maps
function displayMap(button) {
  if (!checkFormPreFlight()) {
    return;
  }

  button.disabled=true;

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
        return function () {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        };
      })(marker, i)
    );
  }

  // Formatting
  $("#section-maps").fadeIn("slow");
  $("html,body").animate({ scrollTop: $("#section-maps").offset().top }, 800);
}

function checkFormRequestDelivery() {
  // Previous form valid?
  var form_Validity = checkFormPreFlight();

  // Email valid
  var emailObj = document.getElementById("email_input");
  form_Validity &= emailObj.checkValidity();

  return form_Validity;
}

function requestDelivery(button,
  email_input,
  start_gps_location_input,
  startTime_input
) {
  
  if (!checkFormRequestDelivery()) {
    return;
  }

  button.disabled = true;

  php_function_call("sendRequestToServer", [
    email_input,
    start_gps_location_input,
    startTime_input,
  ]);

  $("#submissionModal").modal();
}


function initMap() {} // Implement for google maps api -> now: only to remove error 

