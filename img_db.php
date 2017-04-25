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
			<div id="selectChallengeMenu">
			<h2> <center>
			<h1><center>
					<?php
					$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
					session_start();
					if(isset($_POST["submit"])) {
						$img_title = $_POST["img_title"];
						$img_desc = $_SESSION['result'];
					}
					$img_name = $_FILES["uploadedfile"]["name"];
					if (($_FILES["uploadedfile"]["type"]=="image/gif"
					|| $_FILES["uploadedfile"]["type"]=="image/jpeg"
					|| $_FILES["uploadedfile"]["type"]=="image/pjpeg"
					&& $_FILES["uploadedfile"]["size"]<20000))
					{
						if($_FILES["uploadedfile"]["error"]>0)
						{
				echo "return code: " . $_FILES["uploadedfile"]["error"] . "<br />";
				}
				else 
				{
					$i=1;
					$success=false;
					$new_img_name=$img_name;
					while(!$success) {
						if(file_exists("uploads/".$new_img_name))
						{
							$i++;
							$new_img_name="$i".$img_name;
						}
						else {
							$success=true;
						}
					}
					move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],"uploads/".$new_img_name);
					echo "Your creation was added to the gallery";
					echo "<br />";
					$qry="Insert into images(img_title,img_desc,img_filename) values ('$img_title','$img_desc','$new_img_name')";
					if(!mysqli_query($conn, $qry)) {
						die("unsuccessfully" . mysql_error());
					}
					else {
						echo "succcessfully";
					}
				}
				}
				else {
					echo "with an invalid file type. </br> Jpeg,gif and pjpeg accepted.";
				}
				?>
				</div>
				
				
				
				</h1></h2><h5>
				 
						
					
				<?php
				
				
include("presentgallery.php");
$gallery = new presentgallery();
$gallery->gallery5();

?>




				</div>
				</body>
				</html>