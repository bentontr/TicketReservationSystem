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
            <table style="width:100%">
                <h2>All booked tickets</h2>
              <tr>
                <th>User Name</th>
                <th>Ticket</th>
              </tr>          
            <?php 
                include "DBConnection.php";
                
                $sql = "SELECT * FROM nameTicket";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $uname = $row["uname"];
                    $event = $row["event"];
            
              echo "
                  <tr>
                    <td>$uname</td>
                    <td>$event</td>
                  </tr>";
                  
                }
            ?>
            </table>

  
        </body>      
</html>