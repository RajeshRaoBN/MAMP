<?php
/**
 * Created by IntelliJ IDEA.
 * User: rajeshnarayanarao
 * Date: 25/8/18
 * Time: 10:44 AM
 */
echo "Hello <b>Rajesh</b><br>";
$value = 25;
$value*=8;
echo $value;

$name = "Rajesh";
echo "<br>Hello $name again";
echo "<br>Hello ".$name." once more";
echo '<br><a href="https://www.google.com">Google</a>';
echo "<br>This is \"quote\" with escape character \\<br>";

$names = array('dog', 'cat', 'mouse');
$names[3] = 'elephant';
print_r($names);
echo '<br><br>';
$newnames = array('dog'=>20, 'cat'=>10, 'mouse'=>1);
echo $newnames['cat'].'<br>';
$student = array(array('Ram', 21, 'Strategy'), array('Lakan', 21, 'Archar'),
    array('shotgun', 21, 'Deputy'), array('Bharat', 21, 'King'));
print_r($student);
foreach($names as $name)
    echo "<br>".$name;

?>