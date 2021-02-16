<?php
$json=$_POST["fisu"];
$fisu=json_decode($json);

set_error_handler("anyError", E_ALL);


print $fisu->name."<br>";
print $fisu->rate."<br>";
print $fisu->message."<br>";

$name=name;
$rate=rate;
$message=message;

print $nimi;


$yhteys = mysqli_connect("localhost", "trtkp20a3", "trtkp20a3passwd");
if (!$yhteys) {
	$error=" Connection failed ";
    print $error;
    return;
}
$tietokanta=mysqli_select_db($yhteys, "trtkp20a3");
if (!$tietokanta) {
	$error=" Connection failed1 ";
    print $error;
    return;
}

$sql="insert into ryhmä1_projekti(nimi, arvosana, palaute) values(?, ?, ?)";
$stmt=mysqli_prepare($yhteys, $sql);
if (!$stmt) {
	$error=" SQL preparation failed ";
    print $error;
    return;
}
$ok=mysqli_stmt_bind_param($stmt, "sss" ,$name, $rate, $message);
if (!$ok) {
	$error=" SQL preparation failed gd";
    print $error;
    return;
}
/// tässä on ongelma 
$ok2=mysqli_stmt_execute($stmt);
if (!$ok2) {
	$error=" Failed to save, please try again ";
    print $error;
    return;
}
mysqli_stmt_close($stmt);
mysqli_close($yhteys); 

header("Location:££££.html");
exit;
?>