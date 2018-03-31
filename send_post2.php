
<html>

<title>Connected2</title>

<?php
	
	$post_cardType = $_POST['post_cardType'];
	$post_cardNum = $_POST['post_cardNum'];
	$post_expiredMonth = $_POST['post_expiredMonth'];
	$post_expiredYear = $_POST['post_expiredYear'];
	
    //echo "hi";
	$conn = mysqli_connect("localhost","root","root","UniqueVilla");

	if(!$conn){
		die("connection_failed".mysqli_connect_error());
		echo "connect error";
	}
	//echo "connect successfully";
	$sql = "INSERT INTO payment (cardType, cardNum, expiredMonth, expiredYear)
	VALUES ('".$post_cardType."','".$post_cardNum."','".$post_expiredMonth."','".$post_expiredYear."')";

	$row = mysqli_query($conn,$sql);
?>

</html>