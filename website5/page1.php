<?php 
    if(isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time()+3600);
        // 1 Hour

        header('Location: page2.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Cookies</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeholder="Enter userame">
        <br>
        <input type="text" name="email" placeholder="Enter Email">
        <br>
        <input type="submit" name="submit" placeholder="Submit">
    </form>
</body>
</html>