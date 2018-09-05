<?php
/**
 * Created by IntelliJ IDEA.
 * User: rajeshnarayanarao
 * Date: 28/8/18
 * Time: 5:56 PM
 */
session_start();
$name=$_SESSION['Name'];
$age=$_SESSION['Age'];
$weight=$_SESSION['Weight'];

echo 'Name: '.$name.'<br>';
echo 'Age: '.$age.'<br>';
echo 'Weight: '.$weight.'<br>';

?>