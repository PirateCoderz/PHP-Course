<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    

<?php 
if (isset($_POST["login_form"])) {
$Username=$_POST["username"];
$Password=$_POST["password"];
if ($Username=="pirate" && $Password=="galpha") 
    echo "<h2>Login Successfull!<br>Welcome {$Username}</h2>";
else 
    echo "<h2>Login Failed!<br>Try Again...</h2>";
}
else {
    echo "<h2>Login Required!</h2>";
}
?>


    <form action="Form.php" method="POST">
        <fieldset>
            <legend>Login Form</legend>
            <label for="username">Username</label><br>
            <input type="text" name="username"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br><br>
            <input type="submit" name="login_form" value="Submit"><br>
        </fieldset>     
    </form>
</body>
</html>