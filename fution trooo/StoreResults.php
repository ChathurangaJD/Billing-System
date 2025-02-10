<html>
<head>
  <title>Store Results</title>
  <style>
  .searchResultsContainer{
    font-size: 30px;
}
    .box {
        font-size: 30px;
     border: 1px solid #000;
      padding: 5px;
      width: 300px;
      background-color: #f1f1f1;
    }
  </style>
    <style>
        .toggle-switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
        }
    
        .toggle-switch input {
          opacity: 0;
          width: 0;
          height: 0;
        }
    
        .toggle-slider {
          position: absolute;
          cursor: pointer;
          content: "";
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ce1616;
          transition: .4s;
        }
    
        .toggle-slider:before {
          position: absolute;
          content: "";
          height: 26px;
          width: 26px;
          left: 4px;
          bottom: 4px;
          background-color: rgb(17, 12, 12);
          transition: .4s;
        }
    
        input:checked + .toggle-slider {
          background-color: #28f321;
        }
    
        input:focus + .toggle-slider {
          box-shadow: 0 0 1px #2196F3;
        }
    
        input:checked + .toggle-slider:before {
          transform: translateX(26px);
        }
        strong {
    font-weight: bold;
    color: red; /* You can set your desired text color */
    /* Add more styling properties as needed */
}
      </style>
    
</head>
<body background="pback.jpg">
    <Center><h1 style="color: yellow;font-size: 80px;">Store</h1></Center>
 <?php
 ini_set('display_errors', 'off');
 include 'dbconnection.php';
 $code=$_GET["code"];
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 else{
     //connection confirmed
     echo ".<br/>";
 $sql = "SELECT * FROM curtain_material where Material_code='$code'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         //echo "<br><strong>material:</strong> <br>""<br>";
         ?>
         <center>
         <div id="searchResultsContainer">
         <form method="GET">
            <p style="color: green;font-size: 30px;">Material name</p>
         <input type="text" name="type"value="<?php echo $row["type"]  ?>"/></div>
         
         <p style="color: green;font-size: 30px;">Number of rolls remaining</p>
         <input type="text" name="type"value="<?php echo $row["No.of_rolls"]  ?>"/></div>
            <p style="color: green;font-size: 30px;">Meter amount in using roll</p>
            <input type="text" name="type"value="<?php echo $row["amount_current"]  ?>"/> 
     </div>
     </center>
         <?php
         
        }
 } else {
     echo ".";
 }
 
 
 $conn->close();
 }
 ?>
   <center>
    <form method="post" action="insert1.php">
        <label style="color: rgb(105, 21, 91);font-size: 30px;" for="Length">Foot:</label>
        <input style="width: 500px;"  type="number" id="length" name="length" placeholder="Enter Feet required for the order" required> <br><br><br>
        <p style="color: rgb(105, 21, 91);font-size: 20px;">on the switch if you are using the current roll:</p>
        <label class="toggle-switch" >
        <input type="checkbox">
        <span class="toggle-slider"></span>
      </label><br><br><br>
      
    <?php
            include 'dbconnection.php';
            $len=$_GET["length"];
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            else{
                //connection confirmed
                echo ".<br/>";
            $sql = "UPDATE curtain_material SET current_amount = current_amount - 5 WHERE Material_code = 'matcli0006'";
            
            }
            ?>
            <button type="submit">Search</button>
      <br><br><br></b>
    </form></center>
</body>
</html>