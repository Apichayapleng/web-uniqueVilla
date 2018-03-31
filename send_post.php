
<html>

<title>Connected</title>

<?php

	/*
	$conn = mysqli_connect("localhost","root","root","UniqueVilla");

	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";

	//Sending form data to sql db.
	mysqli_query($connect,"INSERT INTO Person ($title, $firstName, $lastName, $phone, $email, $passport, $cardType, $cardNum, $expire)
	VALUES ('$_POST['post_title']', '$_POST['post_firstName']', '$_POST['post_lastName']', '$_POST['post_phone']', '$_POST['post_email']', '$_POST['post_passport']'', '$_POST['post_cardType']', '$_POST['post_cardNum']', '$_POST['post_expire']')";
	
	$post_title = $_POST['post_title'];

	$host = "localhost:8889";

	$username = "root";

	$password = "root";

	$objConnect = mysql_connect($host,$username,$password);


	$objDB = mysql_select_db("UniqueVilla");


	$strSQL = "SELECT * FROM Person";

	$objQuery = mysql_query($strSQL) or die (mysql_error());

	$sql = "INSERT INTO Person (title,firstname, lastname, phone, email, passport,cardType,cardNum,expire)
	VALUES ('Mr.','John', 'Doe','0810187226', 'john@example.com','1101700202470','visa','1234','60')";

	*/

	$post_title = $_POST['post_title'];
	$post_firstName = $_POST['post_firstName'];
	$post_lastName = $_POST['post_lastName'];
	$post_phone = $_POST['post_phone'];
	$post_email = $_POST['post_email'];
	$post_passport = $_POST['post_passport'];

	
	$post_typeA = $_POST['post_typeA'];
	$post_typeB = $_POST['post_typeB'];
	$post_typeC = $_POST['post_typeC'];
	$post_guestNum = $_POST['post_guestNum'];
	$post_checkin = $_POST['post_checkin'];
	$post_checkout = $_POST['post_checkout'];
	
    //echo "hi";
	$conn = mysqli_connect("localhost","root","root","UniqueVilla");

	if(!$conn){
		die("connection_failed".mysqli_connect_error());
		echo "connect error";
	}
	//echo "connect successfully";
	$sql = "INSERT INTO Person (title, firstName, lastName, phone, email, passport,typeA, typeB, typeC, guestNum, checkin, checkout)
	VALUES ('".$post_title."','".$post_firstName."','".$post_lastName."','".$post_phone."','".$post_email."','".$post_passport."','".$post_typeA."','".$post_typeB."','".$post_typeC."','".$post_guestNum."','".$post_checkin."','".$post_checkout."')";

	$row = mysqli_query($conn,$sql);

	/*
	$sql2 = "INSERT INTO villa (typeA, typeB, typeC, guestNum, checkin, checkout)
	VALUES ('".$post_typeA."','".$post_typeB."','".$post_typeC."','".$post_guestNum."','".$post_checkin."','".$post_checkout."')";
	
	$row2 = mysqli_query($conn,$sql2);
		
	*/

	/*$reserve_date_in = $_POST['reserve_in'];
	$reserve_date_out = $_POST['reserve_out'];*/

	header("Location:cash.html");
	mysql_close($conn);
	
	
?>

</html>