<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie Practice</title>
</head>
<body>

<h1 style="text-align: center">Cookie Time</h1>


<?php

$ExpireTime=time() + 60;
echo "Current Time is: ". $ExpireTime. "<br>";
setcookie("Name", "Pirate Coderz", $ExpireTime);
setcookie("Age", 21, $ExpireTime);

echo $_COOKIE["Name"]."<br>";


?><br>
</body>
</html>