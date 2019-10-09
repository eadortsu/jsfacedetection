<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eadortsu JS Face Detection</title>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script defer src="face-api.min.js"></script>
  <script defer src="script2.js"></script>
  <!--<script defer src="script.js"></script>-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="display-cover">
  <video id="video" width="720" height="560" autoplay muted></video>
  <canvas class="d-none"></canvas>

  <div class="video-options">
    <select name="" id="" class="custom-select">
      <option value="">Select camera</option>
    </select>
  </div>

  <img class="screenshot-image d-none" alt="">

  <div class="controls">
    <button class="btn btn-danger play" title="Play"><i data-feather="play-circle"></i></button>
    <button class="btn btn-info pause d-none" title="Pause"><i data-feather="pause"></i></button>
    <button class="btn btn-outline-success screenshot d-none" title="ScreenShot"><i data-feather="image"></i></button>
  </div>
</div>

</body>
</html>