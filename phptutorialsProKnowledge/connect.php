<?php
/**
 * Created by IntelliJ IDEA.
 * User: rajeshnarayanarao
 * Date: 2/9/18
 * Time: 10:59 AM
 */
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='root';
$mysql_database='Student';

$con = mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database);
if(!@mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_database)) {
    die('Cant establish connection to the database server');
}