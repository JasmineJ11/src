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
<form action="processReg.php" method="post" name="register">
    <label>
        Username:
       <input name="name" type="text" required>
    </label>

    <label>
        Password:
        <input name="password1" type="password" required>
    </label>

    <label>
        Password Again:
        <input name="password2" type="password" required>
    </label>

    <label>
        <input name="submit1" type="submit" value="submit">
    </label>
</form>



</body>
</html>