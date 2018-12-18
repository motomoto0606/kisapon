<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>google map api</title>
        <style>
            #map{
                width: 1000px;
                height: 600px;
            }
        </style>
    </head>
    <body >
        <div id="map"></div>
        <script>
function initMap() {
    navigator.geolocation.getCurrentPosition(function(position){
    latLng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
    map = new google.maps.Map(document.getElementById("map"),{
      center: latLng,
      zoom: 17
    });  
    marker = new google.maps.Marker({
      position: latLng,
      map: map,
      icon: {
		url: 'razuppi.gif',                      //アイコンのURL
		scaledSize: new google.maps.Size(90, 90) //サイズ
	}
    });
    @foreach ($data as $datas)
        var uluru = {lat: {{$datas->lati}}, lng: {{$datas->longi}}};
        var marker = new google.maps.Marker({position: uluru, map: map});
    @endforeach
    });
}
    </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
    </body>
</html>