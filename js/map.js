
        function initMap() {
            
            var myLatLng ={lat: 40.730610, lng: -73.935242};
            

            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 10,
              center: myLatLng,
              mapTypeID: google.maps.MapTypeId.ROADMAP
              
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
              });
            }


       
         /* function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
            }else {
            x.innerHTML = "Geolocation is not supported by this browser.";
            }
          }
          function showPosition(position) {
          x.innerHTML = "Latitude: " + position.coords.latitude +
                    "<br>Longitude: " + position.coords.longitude;
          }*/