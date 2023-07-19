var distanceInKm;
var calculatedTotal;
var input1 = document.getElementById("from");
var autocomplete1 = new google.maps.places.Autocomplete(input1);

var input2 = document.getElementById("to");
var autocomplete2 = new google.maps.places.Autocomplete(input2);

var input3 = document.getElementById("sourcelocation");
var autocomplete1 = new google.maps.places.Autocomplete(input3);

//javascript.js
//set map options
var myLatLng = { lat: 1.3093, lng: 36.8125 };
var mapOptions = {
  center: myLatLng,
  zoom: 7,
  mapTypeId: google.maps.MapTypeId.ROADMAP,
};

//create map
var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

//create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();

//bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);

//define calcRoute function
function calcRoute() {
    var request = {
      origin: document.getElementById("from").value,
      destination: document.getElementById("to").value,
      travelMode: google.maps.TravelMode.DRIVING,
      unitSystem: google.maps.UnitSystem.METRIC,
    };
  
    directionsService.route(request, function (result, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        var distanceText = result.routes[0].legs[0].distance.text;
        var distanceValue = parseFloat(distanceText.replace(/[^\d.]/g, ''));
        distanceInKm = distanceValue.toFixed(2);
        
        calculatedTotal = totalValue + (distanceInKm * 20);
        var totalOutputElement = document.getElementById("totalOutput").innerText;
        totalOutput.innerHTML = "<div class='alert-info'>Calculated Total: " + calculatedTotal + "</div>";
       
      





        // Output the distance in kilometers
        var output = document.querySelector("#output");
        output.innerHTML =
          "<div class='alert-info'>From: " +
          document.getElementById("from").value +
          ".<br />To: " +
          document.getElementById("to").value +
          ".<br /> Driving distance <i class='fas fa-road'></i> : " +
          distanceValue.toFixed(2) +
          " km.<br />Duration <i class='fas fa-hourglass-start'></i> : " +
          result.routes[0].legs[0].duration.text +
          ".</div>";
  
        directionsDisplay.setDirections(result);
      } else {
        directionsDisplay.setDirections({ routes: [] });
        map.setCenter(myLatLng);
  
        var output = document.querySelector("#output");
        output.innerHTML =
          "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance.</div>";
      }

      
    });
  
}

function redirectToNextPage() {
    // Redirect to the next page with the total value as a URL parameter
    

    window.location.href = "/mpesapayment?total=" + calculatedTotal + "&source_id=" + source_id + "&pet_id=" + pet_id;

  }