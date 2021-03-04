<?php
/*
 * Including the file so we can call our function in HTML
 * */
include 'insertDom.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
    <!--Here we use PHP for templating. echoing out the results of our insertDom::outputHTML-->
    <?php echo insertDom::outputHtml(); ?>

</body>
</html>