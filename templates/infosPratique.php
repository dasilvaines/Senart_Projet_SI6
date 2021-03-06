<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="../img/icon.png" />
		<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../style/js/bootstrap.min.js" />
		<link rel="stylesheet" type="text/css" href="../style/css/html.css" />
		<title>Théâtre Sénart - Infos Pratiques</title>
	</head>
	
	
	<body>
		
		<div class="container" >
		  <header class="blog-header py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
			  <div class="col-4 pt-1">
				<a class="text-muted" href="#"></a>
			  </div>
			  <div class="col-4 text-center">
				<a class="menu" id="menu" href="index.php"><img src="../img/logo.png" rel="icon" class="theatre" width="200"/></a>
			  </div>
			  <div class="col-4 d-flex justify-content-end align-items-center">			
				<a class="nav-link" href="connexionPro.php"><button type="button" class="btn btn-outline-warning btn-lg"><img src="../img/comptePro.png" rel="comptePro" class="pro" width="30"/></button></a>
			  	<a class="nav-link" href="connexionPerso.php"><button type="button" class="btn btn-outline-warning btn-lg"><img src="../img/compteSpec.png" rel="compteSpec" class="spec" width="30" /></button></a>
			  </div>
			</div>
		  </header>
			<div class="nav-scroller py-1 mb-2">
			<nav class="nav d-flex justify-content-between">
			  <a class="p-2 text-muted" href="news.php"><button type="button" class="btn btn-outline-dark btn-lg">NEWS</button></a>
			  <a class="p-2 text-muted" href="infosPratique.php"><button type="button" class="btn btn-outline-dark btn-lg">INFO PRATIQUES</button><a>
			  <a class="p-2 text-muted" href="#"><button type="button" class="btn btn-outline-dark btn-lg">LA BILLETTERIE</button></a>
			  <a class="p-2 text-muted" href="letheatre.php"><button type="button" class="btn btn-outline-dark btn-lg">LE THEATRE</button></a>
			</nav>
		  </div>
		
		
		<h1>Position du theâtre Sénart</h1>

		<div id="map" style="width:1000px;height:400px;background:blue"></div>

		<script>
		function myMap() {
		var mapOptions = {
			center: new google.maps.LatLng(48.6, 2.54),
			zoom: 40,
			mapTypeId: google.maps.MapTypeId.HYBRID
		}
		var map = new google.maps.Map(document.getElementById("map"), mapOptions);
		}
		</script>


		<!--
		To use this code on your website, get a free API key from Google.
		Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
		--> 
		</div>
	
	</body>

</html>
