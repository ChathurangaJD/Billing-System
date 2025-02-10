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
<body background="pback.jpg">
    <Center><h1 style="color: yellow;font-size: 80px;">Store</h1></Center>
 
  
    <center>
    <form method="post" action="insert1.php">
        <label style="color: green ;font-size: 30px;" for="Length">Foot:</label>
        <input style="width: 500px;"  type="tel" id="length" name="length" placeholder="Enter Feet required for the order" required> <br><br><br>
        <p style="color: red;font-size: 40px;">on the switch if you are using the current roll:</p>
        <label class="toggle-switch" >
        <input type="checkbox">
        <span class="toggle-slider"></span>
      </label>
   <script>   toggleSwitch.addEventListener('change', () => {
    if (toggleSwitch.checked) {
        output.textContent = 'Toggle switch is ON';
        // Perform action when switch is ON
        <p>hhhhhhhhhhhhhhhhhhh</P>
        performActionWhenSwitchIsOn();
    } else {
        output.textContent = 'Toggle switch is OFF';
        // Perform action when switch is OFF
        performActionWhenSwitchIsOff();
    }
});
</script>
      

      <br><br><br>
      <button type="submit">Search</button>
      <br><br><br></b>
    </form></center>

</body>
</html>