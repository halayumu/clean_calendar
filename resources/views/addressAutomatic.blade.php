<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>現在地取得</title>

 <!-- Google Maps API -->
  <script src="http://maps.google.com/maps/api/js?key="></script>


</head>
<body>
  <div id="map"></div>
  <div id="location">現在地を取得中...</div>

  <script>
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: { lat: 35.6811673, lng: 139.7670516 },
        mapTypeId: 'roadmap'
      });

      ///APIのサポートがあればtrue、無ければfalse
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };

          var infoWindow = new google.maps.InfoWindow({
            map: map,
            position: pos,
            content: '現在地'
          });

          map.setCenter(pos);

          // 現在地を表示
          document.getElementById('location').innerText = '現在地: 緯度 ' + pos.lat + ', 経度 ' + pos.lng;
        }, function() {
          handleLocationError(true, map.getCenter());
        });
      } else {
        // ブラウザがジオロケーションをサポートしていない場合
        handleLocationError(false, map.getCenter());
      }
    }

    /// エラー処理
    function handleLocationError(browserHasGeolocation, pos) {
      var infoWindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: browserHasGeolocation ?
          'エラー: 位置情報サービスに失敗しました。' :
          'エラー: このブラウザでは位置情報がサポートされていません。'
      });
      document.getElementById('location').innerText = '位置情報を取得できませんでした。';
    }

    window.onload = initMap;
  </script>
</body>
</html>