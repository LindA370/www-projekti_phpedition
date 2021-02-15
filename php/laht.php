<?php
$json=$_POST["fisu"];
$fisu=json_decode($json);

//$tall="Tallennus onnistui";
//print $fisu;

print $fisu->laji."<br>";
print $fisu->paino."<br>";
print $fisu->email."<br>";
print $fisu->message."<br>";
?>
