<html>
<head>
  <title>Store Results</title>
  
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
        

      </style>
    
</head>
<body>

    </body><label class="switch">
    <input type="checkbox" id="toggleSwitch">
    <span class="slider"></span>
</label>
// script.js
<script>
const toggleSwitch = document.getElementById('toggleSwitch');

toggleSwitch.addEventListener('change', () => {
    if (toggleSwitch.checked) {
        // Perform action when switch is turned ON
        updateDatabase();
    }
});

function updateDatabase() {
    // Send an AJAX request to the server
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'update_database.php', true);
    xhr.send();
}

</script>
<?php
 include 'dbconnection.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update the database only if the toggle switch is ON
if (isset($_GET['toggle']) && $_GET['toggle'] === 'on') {
    // Update the amount in the database
    $sql = "UPDATE curtain_material SET current_amount = current_amount - 1 WHERE Material_code = 'matcli0001'";
    if ($conn->query($sql) === TRUE) {
        echo "Amount reduced successfully!";
    } else {
        echo "Error updating amount: " . $conn->error;
    }
}

$conn->close();
?>


    </body>