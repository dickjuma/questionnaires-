<?php
$host="sql312.infinityfree.com";
$dbname="if0_36622859_simon";
$username="if0_36622859";
$password="Juma2002";

$mysqli=new mysqli($host,$username,$password,$dbname);
if ($mysqli->connect_error) {
    die("connection err". $mysqli->connect_error);
}
return $mysqli;
