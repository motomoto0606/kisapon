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
        <p>test表示</p>
        <div id="map"></div>
        <script type="text/javascript" src="map.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
        @foreach ($data as $datas)
         {{ $datas->name }}
        @endforeach
    </body>
</html>