<?php

$host = "http://13.54.153.119/";
$uid = "root";
$pwd = "cinnamoroll";
$db = "xsalary";


$dbconnect = new mysqli($host, $uid, $pwd, $db);

if ($dbconnect->errno) {
    die($dbconnect->errno);
}

$industry_sql = "SELECT * FROM industry";
$result = mysqli_query($dbconnect,$industry_sql);
$data = mysqli_fetch_all($result);
$industry_json = json_encode($data);


echo $industry_json;

?>



