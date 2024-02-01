<div class="container">

<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php'; ?>

<h1>2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 </h1>

<form method="post" name="user_Reg_form" action="process1.php">
    Name: <input type="text" name="nimi" required> <br><br>
    Email: <input type="email" name="email" required><br><br>
    DOB: <input type="date" name="dob"><br><br>
    Select Color: <input type="color" name="color"><br><br>
    <input type="submit" value="Submit">
</form>

<h1>4. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table. BootStrap Cheatsheet </h1>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">S.n</th>
        <th scope="col">Name</th>
        <th scope="col">Grade</th>

    </tr>
    </thead>

    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>

    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>

    </tr>
    <tr>
        <th scope="row">3</th>
        <td >Larry the Bird</td>
        <td>Thornton</td>
    </tr>
    </tbody>
</table>


<h1>5. String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h1>
<?php
$str1 = "hello";
$str2 = "World";
echo " The length of ". $str1. $str2 . " is " .strlen($str1.$str2) ."<br><br> ";
?>

<h1>6. Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h1>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum_total = $num1 + $num2 +$num3;
echo $sum_total ."<br> <br>";
?>

<h1>7. Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER). Predefined Variables</h1>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function get_browser_name($user_agent) {
    $browser_list = array(
        'firefox' => 'Firefox',
        'chrome' => 'Chrome',
        'safari' => 'Safari',
        'opera' => 'Opera',
        'msie' => 'Internet Explorer',
        'trident' => 'Internet Explorer',
        'edge' => 'Edge',
    );

    foreach ($browser_list as $key => $browser) {
        if (strpos(strtolower($user_agent), $key) !== false) {
            return $browser;
        }
    }
    return 'Unknown';
}
$browser = get_browser_name($user_agent);
echo "You are using: $browser"."<br><br> ";
?>




<h1>8. File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time Predefined Variables</h1>






<?php include 'footer.php'; ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3743480f3c.js" crossorigin="anonymous"></script>