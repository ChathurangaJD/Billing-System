<?php
include 'dbconnection.php';

 
$rno = $_GET['receiptNo'];
$ost = $_GET['orderStatus'];

echo $rno."<br/>";
echo $ost."<br/>";
echo "Records are inserting <br/>";

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	//connection confirmed
	echo "Connected successfully<br/>";
	//Write insert query

    $sql = "DELETE FROM order_tracking WHERE receiptNo=$rno";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

	$sql = "insert into order_tracking   
    values ('".$rno."','".$ost."')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	//connection closed.
	$conn->close();
}


?>