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

		<center>
<?php

$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}

include("presentgallery.php");
$imgID = $_SESSION['ID'];
$data = "Select * from images where img_filename = '$imgID'";
$result = mysqli_query($conn, $data);

while($row= mysqli_fetch_array($result)) {
	echo "Created by: " . $row['img_title'] . "</br>" . "Tag: " . $row['img_desc'] . "</br>"; 
	echo "<img src=uploads/".$row['img_filename'] ." height=\"400\"
width=\"400\"/>"; 
}
// session_start();
// echo $_SESSION['filename'];
//echo "<img src=http://localhost/everydayart/uploads/".$_SESSION['filename'] ." height=\"600\"
// width=\"600\"/>";

?>
</body>
</html>