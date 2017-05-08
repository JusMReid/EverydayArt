<!DOCTYPE html>
<html lang="en US">
	<head>
		<meta charset="UTF-8"/>
		<meta name="author" content="Justin Reid"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>EveryDay Art</title>
		<link rel="stylesheet" type="text/css" href="EACSS5.css"/>
		<script src="EAScript.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog-message" ).dialog({
      modal: true,
      buttons: {
        Okay: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  } );
  </script>
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
			
 
			<div id="selectChallengeMenu">
			<h2> <center>
			<h1><center>
					<?php
					$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
					
					if(isset($_POST["submit"])) {
						$img_title = $_SESSION["user"];
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
						include("pointsclass.php");
						$point = new points();
						$point->addpoints($_SESSION["user"]);
						echo "<div id='dialog-message' title='Thank You!'>
  <p>
    <span class='ui-icon ui-icon-circle-check' style='float:left; margin:0 7px 50px 0;'></span><center>
    You have earned 300 points for your submission.
  </p>
  <p>
    Your current point total is " . $point->showpoints($_SESSION["user"]) . " points</b>.
  </p>
</div>";
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