<?php

if (isset($_POST['uname']) && isset($_POST['pwd'])) {
    $uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
}    

else {
   echo "Error";
    exit;
}

$yhteys = mysqli_connect("localhost", "trtkp20a3", "trtkp20a3passwd");


if (!$yhteys) {

	echo "No connection to database";
	exit;
}

$tietokanta=mysqli_select_db($yhteys, "trtkp20a3");

if (!$tietokanta) {

	echo "Database error";
	exit;
}

$sql="insert into ryhma1_usernames values(?,?)";
$stmt=mysqli_prepare($yhteys, $sql);
	mysqli_stmt_bind_param($stmt, "ss", $uname, md5($pwd));
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($yhteys);

	header("Location:sendrews.html");
	exit;

?>
