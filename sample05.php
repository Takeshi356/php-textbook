<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    echo('性別:'.htmlspecialchars($_POST['gender'],ENT_QUOTES));
    ?>
</body>
</html>