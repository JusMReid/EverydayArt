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
			How would you like to Create the poll?
			
			</h2>
			<center>
			<button id="createButton" onClick= <?php 
			include("PollObj.php");
		include("Random.php");
			
			$R1 = new Random();
			$R2 = new Random();
			$R3 = new Random();
			$R4 = new Random();
			$R5 = new Random();
			$arg1 = $R1->Random();
			$arg2 = $R2->Random();
			$arg3 = $R3->Random();
			$arg4 = $R4->Random();
			$arg5 = $R5->Random();
			
			
			
			$PollObj = new PollObj($arg1,$arg2,$arg3,$arg4,$arg5);
			$poll1 =$PollObj->getpoll1();
			$poll2 =$PollObj->getpoll2();
			$poll3 =$PollObj->getpoll3();
			$poll4 =$PollObj->getpoll4();
			$poll5 =$PollObj->getpoll5();
			session_Start();
			$_SESSION['p1'] ="$poll1";
			$_SESSION['p2'] ="$poll2";
			$_SESSION['p3'] ="$poll3";
			$_SESSION['p4'] ="$poll4";
			$_SESSION['p5'] ="$poll5";
			?>"location.href='poll.php'">Randomly generate poll</button>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<button id="createButton" onClick="location.href='inputpoll.php'">Use own ideas</button>
			</div>
			</body>
			</html>