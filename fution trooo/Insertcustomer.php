<?php
include 'dbconnection.php';

 
$name = $_GET['name'];
$telno = $_GET['telNo'];
$address = $_GET['address'];
$date = $_GET['date'];

echo $name."<br/>";
echo $telno."<br/>";
echo $address."<br/>";
echo $date."<br/>";
echo "Records are inserting <br/>";

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	//connection confirmed
	echo "Connected successfully<br/>";
	//Write insert query
	$sql = "insert into customer_details 
	values ('".$name."','".$telno."','".$address."','".$date."')";
	//insert values to DB
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	//connection closed.
	$conn->close();
}


?>