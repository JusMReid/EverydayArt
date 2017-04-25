<?php
class presentgallery {
	var $conn;
	var $imageID;
	
	public function galleryAll() {
		$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
	$qry = "SELECT * FROM images";
$result=mysqli_query($conn, $qry);
//$row=mysql_fetch_array($result);
echo "<center><h1>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Image Gallery</h1></center>";
while($row=mysqli_fetch_array($result))
{
$imageID=$row['img_filename'];

echo "<div class='left'>";
echo "<img class='left'><a href='showimage.php''><img src=http://localhost/everydayart/uploads/".$row["img_filename"]." height=\"200\"
width=\"200\"/>";
echo "<p class='imgdescription'></br></br>" . $row["img_title"] . "</br></br>" . $row["img_desc"] . "</br></br></a>" . $row["likes"] . " likes</div></div>";
}
	}
	
	public function gallerySearch($keyword) {
		$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}

//if($keyword = "" || $keyword = " ") {
	//echo "<Center> Please enter a search term";
//}
$qry = "Select * from images where img_desc LIKE'%$keyword%'";
$result = mysqli_query($conn, $qry);

if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_array($result)) {
		$imageID=$row['img_filename'];
		$_SESSION['ID'] = $imageID;
		$selectedUser=$row['img_title'];
		$_SESSION['USER'] = $selectedUser;
	echo "<div class='left'>";
	echo "<img class='left'><a href='showimage.php''><img src=http://localhost/everydayart/uploads/".$row["img_filename"]." height=\"200\"
	width=\"200\"/>";
	echo "<p class='imgdescription'></br></br><a href='Profile.php'>" . $row["img_title"] . "</a><a href='showimage.php'></br></br>" . $row["img_desc"] . "</br></br></a>" . $row["likes"] . " likes</div></div>";
	}
}
	
}
	
		
	
	public function gallerySelection() {
		$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
$search = $_SESSION['result'];
	$qry = "SELECT * FROM images where img_desc = '$search'";
$result=mysqli_query($conn, $qry);
//$row=mysql_fetch_array($result);
while($row=mysqli_fetch_array($result))
{
$imageID=$row['img_filename'];
$_SESSION['ID'] = $imageID;
$selectedUser=$row['img_title'];
$_SESSION['USER'] = $selectedUser;
echo "<div class='left'>";
echo "<img class='left'><a href='showimage.php'><img src=http://localhost/everydayart/uploads/".$row["img_filename"]." height=\"200\"
width=\"200\"/>";
echo "<p class='imgdescription'></br></br><a href='Profile.php'>" . $row["img_title"] . "</a><a href='showimage.php'></br></br> Expand </br></br></a>" . $row["likes"] . " likes</div></div>";
}
	}
	
	
	public function galleryUserSelection($j) {
		$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
	$qry = "SELECT * FROM images where img_title = '$j'";
$result=mysqli_query($conn, $qry);
//$row=mysql_fetch_array($result);
while($row=mysqli_fetch_array($result))
{
$imageID=$row['img_filename'];
$selectedUser=$row['img_title'];
$_SESSION['USER'] = "$selectedUser";
echo "<div class='right'>";
echo "<img class='right'><a href='showimage.php'><img src=uploads/".$row["img_filename"]." height=\"200\"
width=\"200\"/></a>";
echo "<p class='imgdescription'></br></br><a href='Profile.php'>" . $row["img_title"] . "</a><a href='showimage.php'></br></br> Expand </br></br></a>" . $row["likes"] . " likes</div></div></div>";
}
	}
	
	public function gallery5() {
				$conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
$search = $_SESSION['result'];
$qry = "SELECT * FROM images where img_desc = '$search'";
$result=mysqli_query($conn, $qry);
$j=0;
//$row=mysql_fetch_array($result);
echo "</h5><right><h2>What others have drawn:</h2></right>";
echo "<right><h4><a href='fullgallery.php'>Visit full gallery -></h4></right></a>";
while($row=mysqli_fetch_array($result) && $j != 5)
	{
$imageID=$row['img_filename'];

echo "<div class='left'>";
echo "<img class='left'><img src=uploads/".$row["img_filename"]." height=\"200\"
width=\"200\"/>";
$j++;
//only available in full gallery
echo "</div></div>";
}
	}
	

	
	
public function likeimage() {
	 $conn=mysqli_connect("localhost","root","","everydayart");
if(mysqli_connect_error()) {
	echo "failed to connect" . mysqli_connect_error();
}
	 $sql="select 'likes' from 'images' where 'img_filename' = '$row[img_filename]'";
	 $l = mysqli_query($conn, $sql);
	 $likes =mysqli_fetch_Array($l);
	 $number=$row["likes"];
	 $number=$number+1;
	 $sql="update 'images' set 'likes' = '$number' where 'img_filename' = '$row[img_filename]'";
 }
 
 

}