<?php
session_start();

if (isset ($_POST["uname"]) && isset ($_POST["pwd"])) {
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];

}
else {
    header("Location:signup.html");
    exit;
}

$yhteys = mysqli_connect("localhost","trtkp20a3","trtkp20a3passwd","trtkp20a3");

$sql="select * from ryhma1_usernames where uname=? and pwd=md5(?)";
$stmt=mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, "ss", $uname, $pwd);
mysqli_execute($stmt);
$tulos=mysqli_stmt_get_result($stmt);

if ($rivi=mysqli_fetch_object($tulos)) {

    $_SESSION["user_ok"]="ok";
    header("Location:".$_SESSION["paluuosoite"]);
    exit;
}
else {

    header("Location:login.html");
    exit;
}

?>