<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="User Log-In Page">
		<meta name="author" content="Justin Reid">
		<title>EveryDay Art| Log-In</title>
		<link rel="stylesheet" type="text/css" href="EACSS.css"/>
	</head>

	<body id="addinfoBody">
	<header>
			<h1>EveryDay Art <sup> &trade;</sup></h1>
			<div id="logIn">
				<a href="logIn.html" target="_blank" 
					title="Log-In">Log-In</button>
				</a>|
				<a href="register.html" target="_blank" 
					title="Join EveryDay Art &trade;">
				Join</a>
			</div>
		</header>
		<form action="addinfotodb.php" method= "post">
		<fieldset>
			<legend>Adding Your Own</legend>
			<div class="customFields">
			Add Adjectives:
			</br>
			<input type="text" name="aresult1"> <br>
			<input type="text" name="aresult2"> <br>
			<input type="text" name="aresult3"> <br>
			<input type="text" name="aresult4"> <br>
			<input type="text" name="aresult5"> </br>
			</div>
			
			<div class="customFields">
			Add Nouns:
			</br>
			<input type="text" name="nresult1"> <br>
			<input type="text" name="nresult2"> <br>
			<input type="text" name="nresult3"> <br> 
			<input type="text" name="nresult4"> <br>
			<input type="text" name="nresult5"> </br>
			</div>
			
			<div class="customFields">
			Add Verbs:
			</br>
			<input type="text" name="vresult1"> <br>
			<input type="text" name="vresult2"> <br>
			<input type="text" name="vresult3"> <br>
			<input type="text" name="vresult4"> <br>
			<input type="text" name="vresult5"> </br>
			<input type="submit" onClick="location.href='addedtodb.html'" value="Add Info"> 
			</div>
		</fieldset>
		</form>
	</body>
</html>