<?php
$mysqli=require __DIR__ . "/database.php";
if (isset($_POST[''])) {
  $gender=  $_POST["gender"];
    $one=$_POST["age"];
    $two=$_POST["yes"];
    $three=$_POST["assess"];
    $four=$_POST["asses"];
    $five=$_POST["percive"];
    $six=$_POST["hello"];
   $seven= $_POST["enforce"];
    $eight=$_POST["compliance"];
    $nine=$_POST["satisfy"];
    $ten=$_POST["believe"];
   $eleven= $_POST["juma"];
   $sql="INSERT INTO asenali(GENDER,AGE,OCCUPATION,foura,fourb,five,six,seven,eight,nine,ten,chelsea) VALUES($gender,$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten,$eleven)" or die("$mysqli.err");
   mysqli_query($mysqli,$sql);
   echo "added";
}
?>
