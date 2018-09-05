<?php
/**
 * Created by IntelliJ IDEA.
 * User: rajeshnarayanarao
 * Date: 2/9/18
 * Time: 11:41 AM
 */
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='root';
$mysql_database='Student';

$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM user_info";
$result = $conn->query($sql);
if($is_query_run=$result) {
    echo "query executed<br>";
    while($query_execute=mysqli_fetch_assoc($is_query_run)) {
        echo '<table border="1" style="width: 200px"><tr><td>'.$query_execute['Firstname'].'</td><td>'.$query_execute['Lastname'].'</td></tr></table>';
        //echo $query_execute['Firstname'].'<br>';
    }
}
else
    echo "query not executed";