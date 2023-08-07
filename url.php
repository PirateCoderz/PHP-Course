<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URLs</title>
</head>
<body>
    <?php  ?>
    <?php $Web="Google Pakistan" ?>
    <?php $Search="Jazeb Akram Online Courses & Website"; ?>

    <?php $Result="https://".urlencode($Web)."?Search=".urlencode ($Search); ?>
    <?php echo "URL Encoded space sign to + sign <br>".$Result."<br>"; ?>

    <br><br>
    <?php $Result="https://".rawurlencode($Web)."?Search=".rawurlencode($Search); ?>
    <?php echo "URL raw Encoded space sign to %20 sign <br>".$Result."<br>"; ?>

</body>
</html>