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
		<h1> You are about to purchase: </h1>
		<div><h4><a href="shopDisplay.php">⇦ Return to the Store</a></h4></div>
		<hr>
		<div class = "left">
		<?php 
		echo "<center>";
		echo "Wacom Intuos Medium";
		echo "<img src= shopimage/wacomsmalltablet.jpg height=\"200\"width=\"200\"/>";
		echo "Price : 40000 Points";
		echo "</center>";
		?>
		</div>
		<div class ="left">
		<?php include("profileclass.php");
		$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
		
		$Userprofile= new profileclass();
		$test = $_SESSION['user'];
		$Userprofile->getUserdata($test);
		echo "<b>Information</b></br><hr>";
		echo "<b>Username:</b></br>" . $Userprofile->getUsername() . "</br>";
		echo "<b>Customer Name:</b></br>" .$Userprofile->getName(). "</br>";
		echo "<b>Phone Number:</b></br>" .$Userprofile->getPhone(). "</br>";
		echo "<b>E-Mail:</b></br>" .$Userprofile->getEmail();
		?>
		</div>
		<div class = "left"><h2><center>
<?php
$currentuser = $_SESSION["user"];
$qry = "SELECT currentPoints FROM user where userName = '$currentuser'";
$result=mysqli_query($conn, $qry);
while($row=mysqli_fetch_array($result)) {
	$userpoints = $row["currentPoints"];
}
$item = "Wacom Intuos Medium";
$_SESSION["item"] = $item;
$qry1 = "SELECT pointcost FROM shop where itemname = '$item'";
$result1=mysqli_query($conn, $qry1);
while($row=mysqli_fetch_array($result1)) {
	$costpoints = $row["pointcost"];
}

if( $userpoints >= $costpoints ) {
	echo "Point Sum: " . $userpoints . "</br>";
	echo "Point Cost:  " . $costpoints . "</br><hr>";
	$userpoints = $userpoints - $costpoints;
	echo "Remaining:   " . $userpoints . "</br>";
	$update = "UPDATE user SET currentPoints = '$userpoints' WHERE userName = '$currentuser'";
	echo "</br>Is this acceptable?  " . "<button id='' onClick=location.href='quickbuyload.php'>Buy</button>";	
}
else {
	echo "Insufficient Funds.";
}
?>
</div></center></h2>
</body>
</html>