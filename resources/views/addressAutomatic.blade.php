<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>現在地取得</title>

 <!-- Google Maps API -->
  {{-- <script src="http://maps.google.com/maps/api/js?key="></script> --}}


</head>
<body>
<section id="map">
<div class="content">
<h2>現在のお住まいの住所ですか？</h2>
<div>大阪府大阪市〇〇町1丁目〇〇</div>

<div class="address_decision_button_box">
  <a href="{{ url('/top') }}">はい</a>
  <a href="{{ url('/newAddress')}}">いいえ</a>
</div>

</section>
  
</body>
</html>