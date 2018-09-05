<?php
/**
 * Created by IntelliJ IDEA.
 * User: rajeshnarayanarao
 * Date: 2/9/18
 * Time: 1:19 PM
 */
$password="pass";
echo md5($password);

if(isset($_POST['password']) && !empty($_POST['password'])) {
    $new_password=$_POST['password'];
    if(md5($new_password)==md5($password))
        echo "Password matched";
    else
        echo "Password did not match";
}

?>
<form action="md5.php" method="post">
    <input type="text" name="password">
    <br>
    <input type="submit"></input>
</form>
