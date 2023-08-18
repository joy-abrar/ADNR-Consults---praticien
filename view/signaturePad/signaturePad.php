<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css?version=1">
  <title></title>
</head>
  <body>
    <canvas id="sig-canvas" width="320" height="160"></canvas>
    <br>
    <button class="btn btn-primary" id="sig-submitBtn">Confirmer</button>
    <button class="btn btn-default" id="sig-clearBtn">Réinitialiser</button>
      <br/><br/><br/>
      <textarea id="sig-dataUrl" class="form-control" rows="5">Data URL for your signature will go here!</textarea>
      <br/>
    <img id="sig-image" src="" alt="Your signature will go here!"/>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>