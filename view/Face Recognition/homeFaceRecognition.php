<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?version=1.0">

	<!--<link rel="stylesheet" type="text/css" href="testStyle.css?version=1">-->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<link rel="icon" type="image/png" href="images/logo.png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
	<!--<script type="text/javascript" src="main.js"></script>-->
	<title>ADNR Consults</title>
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

	<div class="container-fluid" id="mainPage">
		<div class="row m-0 h-100">
			<div class="col-md-4 col-sm-12">
				<div id="connectionPart">
					<div class="mb-5" id="connectionLogoBloc">
						<img id="connectionLogo" src="images/logo.png" >
						<div id="formTitle">
							<hr id="borderLine">
								<span id="connectionMessage">Connectez-vous</span>
							<hr id="borderLine">
						</div>
						<div id="formTitle">
								<span id="connectionMessage">Praticien</span>
						</div>
					</div>
					
					<div>
						<video id="video" width="100%" autoplay></video>
    					<canvas style="display: none;" id="canvas2" width="320" height="240"></canvas>
    					
    					<center id="loaderBloc">
						    <div id="loadingImage" class="se-pre-con"></div>
						</center>
    				</div>

    				
					
					<div class="text-center test mt-5" id="terms">
								<a class="me-4 fw-bold" id="conditionsLink" href="../termsOfConditions/cgu.php">C.G.U.</a>
								<a class="me-4 fw-bold" id="conditionsLink" href="../termsOfConditions/rgpd.php">RGPD</a>
								<a class="me-4 fw-bold" id="conditionsLink" href="../termsOfConditions/mentions.php">Mentions Légales</a>
					</div>
				</div>
			</div>

			<div class="col d-sm-none d-md-block img-fluid" id="sidePart">
			</div>
		</div>
	</div>

</body>
</html>