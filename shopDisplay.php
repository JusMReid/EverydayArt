<!DOCTYPE html>
<html lang="en US">
	<head>
		<meta charset="UTF-8"/>
		<meta name="author" content="Justin Reid"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>EveryDay Art</title>
		<link rel="stylesheet" type="text/css" href="EACSS3.css"/>
		<script src="EAScript.js"></script>
		
	</head>
	<body>
		<header>
			<a onClick="location.href='index.php'"><h1>EveryDay Art<sup> &trade;</sup></h1></a>
			<div id="logIn">
			<?php session_start();
			if( $_SESSION["isloggedin"] === True){
			echo "Hello " .  "<a onclick=location.href='myProfile.php'>" . $_SESSION["user"] . "</a>. ";
			echo "<button id='logout' onClick=location.href='logoutload.php'>Logout</button>";
			echo "<form action = 'searchResult.php' method = 'submit'>
				<input type='text' name='keyword' placeholder= 'Search for...'>
				<button id='' onClick='location.href='searchResult.php''>Search</button></form>
			</div>
		</header>"; 
			}
			else {
			echo "<a href='renderLogin.php' target='_blank' 
					title='Log-In'>Log-In</button>
				</a>|
				<a href='renderRegister.php' target='_blank' 
					title='Join EveryDay Art &trade;'>
				Join</a>
				<form action = 'searchResult.php' method = 'submit'>
				<input type='text' name='keyword' placeholder= 'Search for...'>
				<button id='' onClick='location.href='searchResult.php''>Search</button></form>
			</div>
		</header>"; 
			} ?>
		<h1><center> EveryDay Art Store </center></h1>
		<hr>
		<form action="addtocart.php" method="get">
		<div class = "left">
		<?php 
		echo "<center>";
		echo "<input type='checkbox' name='item' value='Copic Marker 36 Set'>";
		echo "Copic Marker 36 Set";
		echo "<img id ='myImg' src= shopimage/smallcopic.jpg height=\"200\"width=\"200\"/>
		<!-- The Modal -->
		<div id='myModal' class='modal'>
		<span class='close'>&times;</span>
		<img class='modal-content' id='img01'>
		<div id='caption'></div>
		</div>

		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its 'alt' text as a caption
		var img = document.getElementById('myImg');
		var modalImg = document.getElementById('img01');
		var captionText = document.getElementById('caption');
		img.onclick = function(){
		modal.style.display = 'block';
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName('close')[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		modal.style.display = 'none';
		}
		</script>";
		echo "Price : 3000 Points";
		echo "&nbsp; <button id = '' onClick= >Add to Cart</button>";
		echo  "&nbsp; &nbsp;"; 
		echo "<button id = '' onClick= location.href='quickbuy.php'>Quick Buy</button>";
		echo "</center>";
		?>
		</div>
		<div class = "left">
		<?php 
		echo "<center>";
		echo "<input type='checkbox' name='item' value='Copic Marker 72 Set'>";
		echo "Copic Marker 72 Set";
		echo "<img id ='myImg2' src= shopimage/largecopic.jpg height=\"200\"width=\"200\"/>
		<!-- The Modal -->
		<div id='myModal' class='modal'>
		<span class='close'>&times;</span>
		<img class='modal-content' id='img01'>
		<div id='caption'></div>
		</div>

		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its 'alt' text as a caption
		var img = document.getElementById('myImg2');
		var modalImg = document.getElementById('img01');
		var captionText = document.getElementById('caption');
		img.onclick = function(){
		modal.style.display = 'block';
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName('close')[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		modal.style.display = 'none';
		}
		</script>";
		echo "Price : 6000 Points";
		echo "&nbsp; <button id = '' onClick= >Add to Cart</button>";
		echo  "&nbsp; &nbsp;"; 
		echo "<button id = '' onClick= location.href='quickbuy2.php'>Quick Buy</button>";
		echo "</center>";
		?>
		</div>
		<div class = "left">
		<?php 
		echo "<center>";
		echo "<input type='checkbox' name='item' value='Wacom Intuos Medium'>";
		echo "Wacom Intuos Medium";
		echo "<img id ='myImg3' src= shopimage/wacomsmalltablet.jpg height=\"200\"width=\"200\"/>
		<!-- The Modal -->
		<div id='myModal' class='modal'>
		<span class='close'>&times;</span>
		<img class='modal-content' id='img01'>
		<div id='caption'></div>
		</div>

		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its 'alt' text as a caption
		var img = document.getElementById('myImg3');
		var modalImg = document.getElementById('img01');
		var captionText = document.getElementById('caption');
		img.onclick = function(){
		modal.style.display = 'block';
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName('close')[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		modal.style.display = 'none';
		}
		</script>";
		echo "Price : 40000 Points";
		echo "&nbsp; <button id = '' onClick= >Add to Cart</button>";
		echo  "&nbsp; &nbsp;"; 
		echo "<button id = '' onClick= location.href='quickbuy3.php'>Quick Buy</button>";
		echo "</center>";
		?>
		</div>
		<div class = "left">
		<?php 
		echo "<center>";
		echo "<input type='checkbox' name='item' value='Wacom Cintiq 13HD'>";
		echo "Wacom Cintiq 13HD";
		echo "<img id ='myImg4' src= shopimage/cintiq.jpg height=\"200\"width=\"200\"/>
		<!-- The Modal -->
		<div id='myModal' class='modal'>
		<span class='close'>&times;</span>
		<img class='modal-content' id='img01'>
		<div id='caption'></div>
		</div>

		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its 'alt' text as a caption
		var img = document.getElementById('myImg4');
		var modalImg = document.getElementById('img01');
		var captionText = document.getElementById('caption');
		img.onclick = function(){
		modal.style.display = 'block';
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName('close')[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		modal.style.display = 'none';
		}
		</script>";
		echo "Price : 100000 Points";
		echo "&nbsp; <button id = '' onClick= >Add to Cart</button>";
		echo  "&nbsp; &nbsp;"; 
		echo "<button id = '' onClick= location.href='quickbuy4.php'>Quick Buy</button>";
		echo "</center>";
		?>
		</div>
		<div class = "left">
		<?php 
		echo "<center>";
		echo "<input type='checkbox' name='item' value='Wacom Cintiq 22HD'>";
		echo "Wacom Cintiq 22HD";
		echo "<img id ='myImg5' src= shopimage/cintiq22hd.jpg height=\"200\"width=\"200\"/>
		<!-- The Modal -->
		<div id='myModal' class='modal'>
		<span class='close'>&times;</span>
		<img class='modal-content' id='img01'>
		<div id='caption'></div>
		</div>

		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its 'alt' text as a caption
		var img = document.getElementById('myImg5');
		var modalImg = document.getElementById('img01');
		var captionText = document.getElementById('caption');
		img.onclick = function(){
		modal.style.display = 'block';
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName('close')[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		modal.style.display = 'none';
		}
		</script>";
		echo "Price : 170000 Points";
		echo "&nbsp; <button id = '' onClick= >Add to Cart</button>";
		echo  "&nbsp; &nbsp;"; 
		echo "<button id = '' onClick= location.href='quickbuy5.php'>Quick Buy</button>";
		echo "</center>";
		?>
		</div>
		<div class = "left">
		<?php 
		echo "<center>";
		echo "<input type='checkbox' name='item' value='Wacom Cintiq 27QHD'>";
		echo "Wacom Cintiq 27QHD";
		echo "<img id ='myImg6' src= shopimage/cintiq27qhd.jpg height=\"200\"width=\"200\"/>
		<!-- The Modal -->
		<div id='myModal' class='modal'>
		<span class='close'>&times;</span>
		<img class='modal-content' id='img01'>
		<div id='caption'></div>
		</div>

		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its 'alt' text as a caption
		var img = document.getElementById('myImg6');
		var modalImg = document.getElementById('img01');
		var captionText = document.getElementById('caption');
		img.onclick = function(){
		modal.style.display = 'block';
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName('close')[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		modal.style.display = 'none';
		}
		</script>";
		echo "Price : 250000 Points";
		echo "&nbsp; <button id = '' onClick= >Add to Cart</button>";
		echo  "&nbsp; &nbsp;"; 
		echo "<button id = '' onClick= location.href='quickbuy6.php'>Quick Buy</button>";
		echo "</center>";
		?>
		</div>
		</body>
		</html>
