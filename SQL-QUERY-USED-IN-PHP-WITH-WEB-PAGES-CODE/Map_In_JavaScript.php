<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 400px;
       }
    </style>
  </head>
  <body>
  <?php
  $lat = 16.8524;   //latitude
  $long = 74.5815; //longitude
  ?>

  <!-- google map code starts here-->
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var myLatlong = {lat: <?php echo $lat;?>, lng: <?php echo $long;?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatlong
        });
        var marker = new google.maps.Marker({
          position: myLatlong,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLSgK_VSjlZaToYIfDgFpY_D0zUwwebTo&callback=initMap">
    </script>

    <!-- google map code end here -->
  </body>
</html>