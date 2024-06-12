
<?php
$mysqli=require __DIR__ . "/database.php";
$mysqli=new mysqli($host,$username,$password,$dbname);
if ($mysqli->connect_error) {
    die("connection err". $mysqli->connect_error);
}
$sql="INSERT INTO collected(GENDER,AGE,OCCUPATION,foura,fourb,five,six,seven,eight,nine,ten,eleven) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->stmt_init();
if(!$stmt->prepare($sql)){
    echo "sql error". $mysqli->error;
}
$stmt->bind_param("ssssssssssss",

$_POST["gender"],
$_POST["age"],
$_POST["yes"],
$_POST["assess"],
$_POST["asses"],
$_POST["percive"],
$_POST["hello"],
$_POST["enforce"],
$_POST["compliance"],
$_POST["satisfy"],
$_POST["believe"],
$_POST["juma"],


);
 if($stmt->execute()){
    header("location:header.php");
 }
else{
    echo "sql error". $mysqli->error;
};
