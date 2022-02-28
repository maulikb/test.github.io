<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://vjs.zencdn.net/7.5.5/video-js.css" rel="stylesheet" />


  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
<body>



 <!-- HTML -->
 <video id='hls-example'  class="video-js vjs-default-skin" width="400" height="300" controls>
 <source type="application/x-mpegURL" src="http://localhost:4006/hls/1234.m3u8">
 </video>
 
 
 <!-- JS code -->
 <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
 <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
 <script src="https://vjs.zencdn.net/7.2.3/video.js"></script>
 
 <script>
 var player = videojs('hls-example');
 player.play();
 </script>
</body>
</html>