<?php
/**
 * Created by IntelliJ IDEA.
 * User: rajeshnarayanarao
 * Date: 28/8/18
 * Time: 5:56 PM
 */
start_session();
$name=$_SESSION['Name'];

echo 'Name: '.$_GET["stu_name"].'<br>';
echo 'Age: '.$_GET["stu_age"].'<br>';
echo 'Weight: '.$_GET["stu_weight"].'<br>';

?>