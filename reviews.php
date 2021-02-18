
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 1: Saana K, Celia K, Tommi A">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title> Reviews </title>

</head>

<body>
    <div class="container">
    <div class="row">
        <div class="navbar">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a href="index.html" class="navbar-brand">
                    <img alt="Black cat logo" src="img/Nimetönn.png"
                    width="300" height="250">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <div class="navbar-nav">

                  
                  <a class="nav-item nav-link" href="index.html">Home</a> 
                  <a class="nav-item nav-link" href="#">About Us</a> 
                  <a class="nav-item nav-link" href="#l">Store</a>
                  <a class="nav-item nav-link" href="#">Contact Us</a>
                  <a class="nav-item nav-link" href="#">Reviews</a>

                    </div>

                    </div>
                </div>
            </nav>
        </div>
     <div class="row">
        <div class="content col-md-12">

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

</div>
    </div>
     <div class="row">
        <div class="footer col-md-12">
            <br>  Loogs - Pohjoisesplanadi 40, HELSINKI 00160 &nbsp; &nbsp; Copyright © 2021 Group 1
           <hr> 
           <a href="https://fi-fi.facebook.com/" class="fa fa-facebook"></a> 
           <a href="https://twitter.com/?lang=fi" class="fa fa-twitter"></a>
           <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html> 
