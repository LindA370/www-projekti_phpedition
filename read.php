<?php

$yhteys = mysqli_connect("localhost", "trtkp20a3", "trtkp20a3passwd")

if (!ytheys) {
    die("Ei yhteyttä! " . mysqli_connect_error());
}

$tietokanta=mysqli_select_db($yhteys, "trtkp20a3");
if (!$tietokanta) {
    die("Tietokantaa ei löydy! " . mysqli_connect_error());
}
echo "Kaikki kunnossa.";

$tulos=mysqli_query($yhteys, "select * from ryhmä1_projekti");

while ($rivi=mysqli_fetch_object($tulos)) {
    print "id=$rivi->id nimi=$rivi->nimi arvosana=$rivi->arvosana palaute=$rivi->palaute<br>";
}

mysqli_close($yhteys);

?>