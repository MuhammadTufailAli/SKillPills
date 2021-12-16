<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = "skillspills";
$port = "3306";
$dbCon = mysqli_connect($host, $username, $password, "$dbname", $port);
if (!$dbCon) {
    die('Could not Connect MySql Server:' . mysql_error());
}
