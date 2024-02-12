<?php

global $conn;
include 'db.php';

if(isset($_POST['submit1'])){
    $name = $_POST['name'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];


if ($password1 != $password2){
    echo "WROOOOOONG";
}
else{
    $sql = "insert into register(name, password) values ('$name','$password2')";
    if ($conn -> query($sql) === TRUE){
        echo "Your data was recorded";
    }
    else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn -> close();
}
}

if(isset($_POST['submit2'])){
    $name = $_POST['name'];
    $password2 = $_POST['password2'];
}

$sql = "select * from register where name = '$name' AND password = '$password2'";

$result = $conn ->query($sql);

if($result -> num_rows >0){
    echo "Welcome " . $name;
}
else{
    echo "get out!" . $name . $password2;
}

$conn -> close();
?>