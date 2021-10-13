//javascript.js
//set map options to center my map where i want ; i define my corrdinates

var myLatLng = { lat: 48.6034216, lng: 2.4949112 };
var mapOptions = {
    center: myLatLng,
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};

//create map to 
var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

//create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();

//bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);


//define calcRoute function
function calcRoute() {
    //create request from google API
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
        unitSystem: google.maps.UnitSystem.METRIC
    }

    //pass the request to the route method
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            //Get distance and time
            const output = document.querySelector('#output');
            
            output.innerHTML = "<div class='alert-info'>From: " + document.getElementById("from").value + ".<br />To: " + document.getElementById("to").value + ".<br /> Driving distance <i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text + ".<br />Duration <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text + ".<br /> Suggested price  <i class='fa-solid fa-hand-holding-dollar'></i> : " 
            + (result.routes[0].legs[0].distance.text.replace(/\D+/g, ""))*1.49 +  '€' +   "<br /></div>";
         
           

        
            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map in saintry sur Seine, France
            map.setCenter(myLatLng);

            //show error message
            output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance.Make sure your cities are correctly written.<br>. Merci d'indiquer un lieu de départ et un lieu d'arrivée!!!</div>";
        }
    });

}



//create autocomplete objects for all inputs
var options = {
    types: ['(cities)']
}

var input1 = document.getElementById("from");
// var autocomplete1 = new google.maps.places.Autocomplete(input1, options);
var autocomplete1 = new google.maps.places.Autocomplete(input1, {
    componentRestrictions: { country: ["us", "fr","gb","at","bg","be","hr","cy","cz","dk","ee","fi","de","gr","hu","ie","it","lv","lt","lu","mt","nl","pl","pt","ro","sk","si","es","se"] },
    fields: ["address_components", "geometry"],
    types: ["address"],
  });

var input2 = document.getElementById("to");
// var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
var autocomplete2 = new google.maps.places.Autocomplete(input2, {
    componentRestrictions: { country: ["us", "fr","gb",,"at","bg","be","hr","cy","cz","dk","ee","fi","de","gr","hu","ie","it","lv","lt","lu","mt","nl","pl","pt","ro","sk","si","es","se"] },
    fields: ["address_components", "geometry"],
    types: ["address"],
  });
