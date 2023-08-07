<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Practice</title>
</head>
<body>
<h1 style="text-align:center;">Array Practice</h1>



<h3>Simple Arrays</h3>
<?php
$name = array('Ahmad', 'Ali', 'Akram', 'Zain', 'Hassan');
echo print_r($name);
?><br>

<?php $color=array('A'=>"40", 'B'=>"Pizza"); ?>
<?php echo $color['B']?><br>

<h3>Simple Arrays Association</h3>
<?php $food=array('Asian'=>"Biryani", 'Italian'=>"Pizza"); ?>
<?php echo $food['Italian']. " is in Italian Foods"?><br>

<h3>Calling Whole Associated Array</h3>
<?php $food_arr=array('Asian'=>"Biryani", 'Italian'=>"Pizza"); ?>
<pre>
    <?php echo print_r($food_arr) ?><br>
</pre>

<h1 style="text-align:center;">Function Arrays</h1>
<?php $struct_arr=array("Asian","Biryani", "Italian","Pizza", "French", "Fries", "Spanish", "Noodles"); ?>
<h3>Before Removing Item</h3>
    <?php echo print_r($struct_arr)  ?><br>
<h3>After Removing Item</h3>
<?php array_pop($struct_arr) ?>
<?php echo print_r($struct_arr)  ?><br>
<h3>Count Total Items</h3>
<?php echo "Total Food Items are: ". count($struct_arr)  ?><br>


</body>
</html>