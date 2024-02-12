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
<?php
include '../header.php';
?>

<script>
    document.write("Hello World")
    window.alert("this is an alert box")
</script>

<noscript>
    You need to enable or install JavaScript support in your browser
</noscript>

<script>
    function hello() {
        document.write("this is after the page has loaded")
    }
</script>

<button onClick="document.write('this is something')" > click me</button>




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



<form action="processReg.php" method="post" name="login">
    <label>
        Username:
        <input name="name" type="text" required>
    </label>

    <label>
        Password:
        <input name="password2" type="password" required>
    </label>


    <label>
        <input name="submit2" type="submit" value="login">
    </label>
</form>

</body>
</html>