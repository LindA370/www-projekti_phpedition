
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 1: Saana K, Celia K, Tommi A">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css\main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400" rel="stylesheet">
    <title>Reviews</title>
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
                  <a class="nav-item nav-link" href="#">Store</a>
                  <a class="nav-item nav-link" href="#">Contact Us</a>
                  <a class="nav-item nav-link" href="#thispage">Reviews</a>

                    </div>

                    </div>
                </div>
            </nav>
        </div>
     <div class="row">
        <div class="content col-md-12">

        <h1>What customers are saying</h1>

        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
       <!-- <br> <a href="#singup"> Leave a review !</a><br>-->
        
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
  echo "0 tulosta";
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html> 