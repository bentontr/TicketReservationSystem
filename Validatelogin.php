<?php 

session_start(); 

include "DBConnection.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    # This function is used to sanitize input data. It removes leading and trailing whitespaces, slashes, and #converts special characters to HTML entities to prevent SQL injection.
    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: login.php?error=User Name is required");  # if username is empty user is redirected to the login page.

        exit();

    }else if(empty($pass)){

        header("Location: login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM login WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);
         

        if (mysqli_num_rows($result) == 1) {

        

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {
       

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: login.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: login.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: Validatelogin1111.php");

    exit();

}