<!DOCTYPE html>

<html>

<head>

    <title>Account Login</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <form action="Validatelogin.php" method="post">

        <h2>Login</h2>

        <?php if (isset($_GET['error'])) { ?>   <!--# checks if the 'error' parameter is set in the URL query string. #If it is set, it displays an error message. -->

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>