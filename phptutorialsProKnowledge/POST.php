<?php
/**
 * Created by IntelliJ IDEA.
 * User: rajeshnarayanarao
 * Date: 28/8/18
 * Time: 1:19 PM
 */

$username = $_POST["username"];
$password = $_POST["password"];
if(($username === "Mark") && ($password === "pass"))
    echo $username." has successfully loggedin";
else
    echo "Either the username or password is entered incorrectly"

?>