<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3743480f3c.js" crossorigin="anonymous"></script>

    <style>



    </style>


</head>
<body>
<footer class="row">
    <div class="col-sm-4">Jiawei Li</div>
    <div class="col-sm-4">WEBweb</div>
    <div class="col-sm-4">HAMK</div>

    <?php
    $file = basename($_SERVER['SCRIPT_FILENAME']);
        $last_modified = date("F d Y H:i:s.", filemtime($file));
        echo $file . "was last modified on: $last_modified";

    ?>

</footer>
</body>
</html>