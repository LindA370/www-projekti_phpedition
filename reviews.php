<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<h1>Reviews</h1>

<?php
$servername = "localhost";
$username = "trtkp20a3";
$password = "trtkp20a3passwd";
$dbname = "trtkp20a3";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Yhteyttä ei muodostettu: " . $conn->connect_error);
}

$sql = "SELECT id, nimi, arvosana, palaute FROM ryhma1_projekti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
     echo " Nimi: " . $row["nimi"]."<br>". " Arvosana: " . $row["arvosana"]."<br>". " Palaute: " . $row["palaute"]. "<br>"."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>
