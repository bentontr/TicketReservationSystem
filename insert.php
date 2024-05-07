<?php

    include "DBConnection.php";
        

    
    $sql= "INSERT INTO nameTicket(uname, event) 
    VALUES 
    ('$_POST[uname]','$_POST[ticket]')";    

    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "Congratulations $_POST[uname], you have signed up to attend the $_POST[ticket]! We hope you have a great time!";
    }else{
        echo "The table was not created successfully because of this".mysqli_error($conn); 
    }

?>
<!DOCTYPE html>

<html>
    <head>
        <style>
            table, th, td {
              border:1px solid black;
            }
        </style>
          <link rel="stylesheet" type="text/css" href="style.css">
     </head>  
    
        <body>
            
            <a href="customerPage.php"> Reserve another ticket!</a>
        
            <a href="login.php"> Exit</a>
            
        </body>      
</html>
