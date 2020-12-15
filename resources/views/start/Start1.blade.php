@extends('layouts.start2')

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  <div id="map" style="height:400px">
	   </div>
       <script src="{{ asset('/js/result.js') }}"></script> 
	   <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyAXllRJNSWDIKPLLHAEkdalaqauHKbbLKk&callback=initMap" async defer>
	   </script>
<div class="data">
<div class="data2">
<p>Kcal</p>
<p>Km</p>
<p>ペース</p>
</div>
  <div class="container">
    <div id="timer">00:00:00.000</div>
    <div class="controls">
      <div id="start" class="btn">Start</div>
      <div id="stop" class="btn" >Stop</div>
      <a href="start2" class="btn">end</div></a>
    </div>
  </div>
  <script src="{{asset('/js/stop.js')}}"></script>
</body>
<body>
    <main>
      <div class="box">
        <li><button class="home" onclick="location.href='HomePage'"></button></li>
         <li><button class="activity" onclick="location.href='acti'"></button></li>
         <li><button class="start" onclick="location.href='start'"></button></li>
         <li><button class="store" onclick="location.href='reco'"></button></li>
      </div>
      </main>
  </body>
</html>
@endsection