<!DOCTYPE html>
<html lang="en US">
	<head>
		<meta charset="UTF-8"/>
		<meta name="author" content="Justin Reid"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>EveryDay Art</title>
		<link rel="stylesheet" type="text/css" href="EACSS5.css"/>
		<script src="EAScript.js"></script>
	</head>
	<body>
	<header>
			<a onClick="location.href='index.html'"><h1>EveryDay Art<sup> &trade;</sup></h1></a>
			<div id="logIn">
				<a href="logIn.html" target="_blank" 
					title="Log-In">Log-In</button>
				</a>|
				<a href="register.html" target="_blank" 
					title="Join EveryDay Art &trade;">
				Join</a>
				<form action = "searchResult.php" method = "submit">
				<input type="text" name="keyword" placeholder= "Search for...">
				<button id="" onClick="location.href='searchResult.php'">Search</button></form>
			</div>
		</header>
		<?php $conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
	} 
	include("profileclass.php");
	session_start();
	$Userprofile= new profileclass();
	$test = $_SESSION['USER'];
	$Userprofile->getUserdata($test);
	?>
		<div class="toppage">
    <?php echo "<h1><center>" . $Userprofile->getUsername() . "</h1><center><b> Rank: </b>" . $Userprofile->getRank() .
	"                              <b>Points:</b>        <i>Total: </i>" . $Userprofile->getTotalPoints() .
	"      <i> Current: </i>" . $Userprofile->getCurrentPoints(); 
	
	?>
	
</div>
<div class="leftpage"><center>
    <?php echo "<h2>" . $Userprofile->getName() .  "</h2> Contact Info:
	</br> Phone: </br>" . $Userprofile->getPhone() . " </br></br> Email: </br>" . $Userprofile->getEmail();
	?>
	</center>
</div>
<div class="mainpage">
<center></br>
<?php include("presentgallery.php");
$usergallery = new presentgallery();
$usergallery->galleryUserSelection($test);
?>
</center></div></div>

</body>
</html>