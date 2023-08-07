<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Form</title>
</head>
<body>
    
<?php 
/*
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
*/
?>

<?php 

if(isset($_POST["username"])) {
    $Username = $_POST["username"];
    echo "Your Username is: $Username <br>";
}
else {
    $Username = "";
}
if(isset($_POST["password"])) {
    $Password = $_POST["password"];
    echo "Your Password is: $Password <br>";
}
else {
    $Password = "";
}
?>
</body>
</html>