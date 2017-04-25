<?php
class presentUser {
	
	public function FindUser($userkeyword) {
		$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}

$qry = "Select * from user where userName LIKE'%$userkeyword%'";
$result = mysqli_query($conn, $qry);

if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_array($result)) {
		echo "<div class='border'>";
		
		
		echo "<form action='Profile.php' method='submit'>";
		echo "<input type='radio' name=" . $row['userName'] . ">";
		
		
		echo $row['userName'];
		echo "</div>";
		
	}
}
	}
}