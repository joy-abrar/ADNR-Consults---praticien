<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Face Recognition</title>
</head>
<body>

  <?php

    $path = "labeled_images/All/";
    $pathContents = scandir($path);
    $totalContents = count($pathContents);

    $userName = [];
    $extention = [];

    for ($i=0; $i < $totalContents ; $i++) 
    { 
      $userName[$i] = substr($pathContents[$i], 0, strrpos($pathContents[$i], "."));

      $extention[$i] = substr($pathContents[$i], strrpos($pathContents[$i], '.') + 0);
    }
    

    $namesInJs = json_encode($userName);
    $extentionInJs = json_encode($extention);

  ?>


  <script>
    var namesInJs = <?= $namesInJs ?>;
    var extentionInJs = <?= $extentionInJs ?>;
    
    var totalContents = <?= $totalContents ?>;

    
    var k = 0;
    for (var j = 2; j < totalContents; j++) 
    {
      namesInJs[k] = namesInJs[j];
      extentionInJs[k] = extentionInJs[j];
      k++;
    }

  </script>

  <script defer src="face-api.min.js"></script>
  <script defer src="script.js"></script>

   <center>
    <video id="video" width="320" height="240" autoplay></video>
    <canvas style="display: none;" id="canvas2" width="320" height="240"></canvas>
  </center>

  <center id="loaderBloc">
    <div id="loadingImage" class="se-pre-con"></div>
  </center>
</body>
</html>