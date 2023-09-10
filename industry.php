<?php

$host = "http://54.252.239.114/";
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



