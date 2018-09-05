<?php
/**
 * Created by IntelliJ IDEA.
 * User: rajeshnarayanarao
 * Date: 1/9/18
 * Time: 1:12 PM
 */
$time = time();
echo $time;
setcookie('student', 'Mark', $time+10);