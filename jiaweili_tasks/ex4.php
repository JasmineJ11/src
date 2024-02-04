<div class="container">

<?php
$title = "Exercise 4: Control flow and loops";
include 'header.php'; ?>

<h1>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting).</h1>

<form method="post" name="vote_form" action=<?php echo ($_SERVER['PHP_SELF']); ?>>
    <label>Name: <input type="text" name="nimi" required></label>
    <label>Age: <input type="number" name="age" required></label>
    <input type="submit" value="Submit" name = "sub1">
</form>
    <?php
    if (isset($_POST['sub1'])){
        $name = $_POST['nimi'];
        $age = $_POST['age'];
        if ($age<18){
            echo "<h3> Hi, $name , you are not allowed to vote.</h3>";
        }
        else{
            echo "<h3> Hi, $name , you are welcome to vote.</h3>";
        }
    }
    ?>


 <h1>3. Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not: It's August, so it's still holiday. Not August, this is Month-name so I don't have any holidays Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h1>

<?php
$month = date("F");
switch ($month){
    case "August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $month so I don't have any holidays."."<br> <br>";
        break;
}
?>

<h1>4. For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h1>

    <form method="post" name="multiplication" action=<?php echo ($_SERVER['PHP_SELF']); ?>>
        <label>Number: <input type="number" name="numInput" required></label>
        <label><input type="submit" value="Submit" name = "sub3"></label>
    </form>
    <?php
    if (isset($_POST['sub3'])){
        $num = $_POST['numInput'];
        for($i=0;$i<9;$i++){
            echo $num  ."* ". ($i+1)."=".  ($i+1)*$num."<br>";
        }
    }
    ?>

   <h1> 5. While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h1>

    <form method="post" name="nn" action=<?php echo ($_SERVER['PHP_SELF']); ?>>
        <label>Number: <input type="number" name="nnn" required></label>
        <label><input type="submit" value="Submit" name = "sub4"></label>
    </form><br>
        <?php
        if(isset($_POST['sub4'])){
            $nnn = $_POST['nnn'];
            $i = 1;
            while ($i <= $nnn){
                echo $i++ . "<br>";
        }
        }
        ?>


    <h1>6. Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h1>

    <?php
    $myArray=array("HTML", "CSS", "PHP", "JavaScript");
    foreach($myArray as $value){
        echo $value . " ";
    }
    ?>






        <?php
include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3743480f3c.js" crossorigin="anonymous"></script>

</div>