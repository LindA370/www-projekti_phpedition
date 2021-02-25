<?php
session_start();

if (isset ($_POST["unamei"]) && isset ($_POST["pwdi"])) {
$uname=$_POST["unamei"];
$pwd=$_POST["pwdi"];

}
else {
    header("Location:signup.html");
    exit;
}

$yhteys = mysqli_connect("localhost","trtkp20a3","trtkp20a3passwd","trtkp20a3");
//komennot korjattu ?-ck
$sql="SELECT * FROM ryhma1_usernames WHERE uname=? AND pwd=md5(?)";
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