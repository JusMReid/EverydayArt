<?php
class addtopolls {
	public function addtopolls() {





			include("PollObj.php");
			$arg1 = $_REQUEST['Pollidea1'];
			$arg2 = $_REQUEST['Pollidea2'];
			$arg3 = $_REQUEST['Pollidea3'];
			$arg4 = $_REQUEST['Pollidea4'];
			$arg5 = $_REQUEST['Pollidea5'];
		
			$IdeaPollObj = new PollObj($arg1,$arg2,$arg3,$arg4,$arg5);
			$poll6 =$IdeaPollObj->getpoll1();
			$poll7 =$IdeaPollObj->getpoll2();
			$poll8 =$IdeaPollObj->getpoll3();
			$poll9 =$IdeaPollObj->getpoll4();
			$poll0 =$IdeaPollObj->getpoll5();
			session_Start();
			$_SESSION['p6'] ="$poll6";
			$_SESSION['p7'] ="$poll7";
			$_SESSION['p8'] ="$poll8";
			$_SESSION['p9'] ="$poll9";
			$_SESSION['p0'] ="$poll0";

	}
}
?>
