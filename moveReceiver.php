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
<h1>
    <!--Here we're simply echoing our $_POST global. You'll notice we're also using the key of 'cell'. This mirrors
    the name attribute on our button element. This way we're able to get the value of our button press.-->
    <?php echo $_POST['cell']; ?>
</h1>
</body>
</html>
