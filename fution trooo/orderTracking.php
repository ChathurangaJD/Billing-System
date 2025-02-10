<html>
<head><title>Order Tracking</title>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 10px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
        }
        .result label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .result span {
            font-weight: normal;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #50a9d3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;

          }
    </style>

</head>
<body background="pback2.jpg">

    <br><br><br><br><br><br>
    <div class="container">
        <h2 style="color: rgb(0, 255, 21);">Order Tracking</h2>
        <form method="GET" action="" >
        <a class="button" href="OrderUpdate.html" style="text-align: right;" >Update order status</a><br><br>
        <div class="form-group">
            <label for="receiptNo">Receipt Number:</label>
            <input type="number" name="receiptNo" value="submit" required>
                    
       <?php
       ini_set('display_errors', 'off');
include 'dbconnection.php';
$receiptNo=$_GET["receiptNo"];
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	//connection confirmed
	echo "Press enter key<br/>";
	$sql = "SELECT * FROM order_tracking where receiptNO=$receiptNo";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br><strong>Order Status:</strong> ". $row["orderStatus"]. "<br>";
    }
} else {
    echo "Order Status:";
}


$conn->close();
	
}


?>
</body>
</html>