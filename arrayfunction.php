<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Functions</title>
</head>
<body>
<?php
$color =array("red", "blue", "white", "green");
array_pop($color);
array_pop($color);
print_r($color);

?><br>
<pre>
    <?php
    print_r($color);

    ?><br>
</pre>
<?php
array_push($color,"green","black");
print_r($color);
echo "<br><br>";
echo "Total Items in Array: ". count($color) ."<br>";

$str_clr = implode(" ", $color);
echo $str_clr . "<br>";
?><br>

<?php
echo current($color) . "<br>";
echo next($color) . "<br>";
echo prev($color) . "<br>";
?><br>






</body>
</html>