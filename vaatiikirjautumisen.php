<?php
session_start();

if (!isset ($_SESSION["user_ok"]))  {
    $_SESSION["paluuosoite"]="vaatiikirjautumisen.php";
header("Location:login.html");
exit;
}
?>

<p>Login successful!</p>



