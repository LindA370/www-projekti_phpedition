<?php

if (isset($_POST['uname']) && isset($_POST['pwd'])) {
    $uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
}    

else {
   echo "Error";
    exit;
}

$yhteys = mysqli_connect('localhost','trtkp20a3','trtkp20a3passwd','trtkp20a3');

if(!$yhteys)
{
	echo "Error";

}

$sql="INSERT INTO ryhma1_users(uname, pwd) VALUES('$uname',
 '$pwd')";
$stmt=mysqli_prepare($yhteys, $sql);
	mysqli_stmt_bind_param($stmt, 'ss', $uname, $pwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($yhteys);
echo "Thank you for signing up!";
exit;

?>