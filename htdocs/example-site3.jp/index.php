<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title># example-site3.jp</title>
</head>

<body>
    # http://example-site3.jp
    <br><br>
    <?php
    echo 'フルパス => ' . __FILE__ . '<br>';
    echo 'PHP.ver => ' . phpversion(); ?>
    <br>
    <?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>
</body>

</html>