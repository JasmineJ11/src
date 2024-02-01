<?php
/*global scope
$name = "Pekka";


//global scope
function test()
{
    global $name;
    $a = 20;
    echo $a;
    echo "<br>" . $name;
}
test();

//global keyword

//static keyword
function test1()
{
    static $num = 5;
    echo "<br>" . $num;
    $num++;
}
test1();
test1();
test1();
*/

//string concatenation
$name = "pekka";
$lname = "Honka";
echo $name ." ". $lname;
echo "<br>". 'this will print $name';
echo "<br>". "this will print $name";

echo "<br> The length of ". $name . "is " .strlen($name) ."<br>";

//Strpos
echo strpos("Hello world this is interesting", "is") ."<br>";

echo str_word_count("Count the number of words") ."<br>";

echo "this is \"interesting\"" . "<br>";

echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['DOCUMENT_ROOT'];

?>