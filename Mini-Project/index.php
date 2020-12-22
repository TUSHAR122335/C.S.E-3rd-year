<!-- Index.php -->
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="audi-logo-png-746.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>AUDI</title><style>
        body {
            opacity: 0;
            transition: opacity 3s;
        }
    </style>
</head>
<body onload="document.body.style.opacity='1'">
	<div id="header">
		<center>
			<div class="nav">
					<a href="#home">home</a>
					<a href="#gallery">gallery</a>
					<a href="#about">about</a>
					<a href="#">contact</a>
					</div>
			</div>
		</center>
	<div class="container" id="home">
		<img src="tenor.gif" alt="Audi" style="width:100%;">
		<div class="top-left">AUDI</div>
		<div class="bottom-right">Cherish the old,<br>embrace the new.</div>
	</div>
	<div id="gallery">
		<h3 align="center" style="text-transform: uppercase;" class="label">gallery</h3>
		<hr width="20%" size="10px">
	</div>
	<div class="gallery" style="max-width:1920px;">
  		<img class="Images" src="Audi-Wallpaper-27-1920x1080.jpg" style="width:100%">
  		<img class="Images" src="nyG9bcZ.jpg" style="width:100%">
  		<img class="Images" src="wp7401750-black-audi-wallpapers.jpg" style="width:100%">
	</div>

	<!-- for automatic slideshow -->
	<script>
	var myIndex = 0;
	carousel();
	function carousel() {
  		var i;
  		var x = document.getElementsByClassName("Images");
  		for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";
	  	}
	  	myIndex++;
	  	if (myIndex > x.length) {myIndex = 1}
		  	x[myIndex-1].style.display = "block";
  			setTimeout(carousel, 2000); // Change image every 2 seconds
			}
	</script>
	<!-- End of automatic slideshow -->

	<div id="about">
		<h3 align="center" style="text-transform: uppercase;" class="label">about</h3>
		<hr width="20%" size="10px">
		<h2 style="text-transform: uppercase;" align="center">about</h2>
		<span class="about" style="display:inline;color:white;">
			<img src="AUDI.jpg" width="20%" align="right" valign="center">
			<b>Audi</b> is a German automobile manufacturer that designs, engineers, produces, markets and distributes luxury vehicles. Audi is a wholly owned subdiary of the Volkswagen Group and has its roots at Ingolstadt, Bavaria, Germany. Audi-branded vehicles are produced in nine production facilities worldwide.
		</span>
	</div>
</body>
</html>
