<?php

$host = "http://54.252.239.114/";
$uid = "root";
$pwd = "cinnamoroll";
$db = "xsalary";


$dbconnect = new mysqli($host, $uid, $pwd, $db);

if ($dbconnect->errno) {
    die($dbconnect->errno);
}

$salary_sql = "SELECT * FROM salary";
$result = mysqli_query($dbconnect,$salary_sql);
$data = mysqli_fetch_all($result);
$salary_json = json_encode($data);

echo $salary_json;

?>
