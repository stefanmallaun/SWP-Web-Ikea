<html>
<?php
session_start();
?>
<head>
    <title>Warenkorb</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Ikea.css" />
    
    <style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid black;
}

.button1:hover {
  background-color: #469ddb;
  color: white;
}

    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="Main.html"><img src="Ikea_logo.svg.png" class="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Stühle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Betten</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tische</a>
                        </li>
                    </ul>

                    <form class="form-inline">
                        <input class="form-control mr-sm-1 align-center" type="search" placeholder="Artikel suchen" aria-label="Search">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Suche</button>
                    </form>

                </div>
            </nav>

        </div>
        <br>
        <br>
        <br>

        <div class='row bg-secondary'>
        

            <?php
                //website zum Anzeigen: http://localhost/ikea/swp-web-ikea/shoppingCart.php
    
                $servername = "localhost";
                $username = "root";
                $passwort = "";
                $dbname = "ikea";

                $warengesamtpreis = 0;
            ?>

            <?php   
                //Create connection
                $conn = mysqli_connect($servername,$username,$passwort,$dbname);
    
                // Check connection
                if(!$conn){
                    die("Connection failed miserably: " .mysqli_connect_error());
                }
                else{
                    //echo "mit DB verbunden <br><br>";
                }
    
                $sql = "SELECT * FROM cart JOIN article USING(articleId)";
                $result = mysqli_query($conn, $sql);
                echo"<center><br><br><h1>Es sind " .mysqli_num_rows($result) . " Waren in Ihrem Warenkorb</h1></center>";
            ?>

            <table style="width:75%">
                <tr>
                    <td><h3><center>Anzahl</center></h3></td>
                    <td><h3><center>Name</center></h3></td>
                    <td><h3><center>Preis</center></h3></td>
                </tr>

                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                    
                        $articleId = $row["articleId"];
                        $articleName = $row["articleName"];
                        $articlePrice = $row["articlePrice"];
                        $articleAmount = $row["articleAmount"];

                        $gesamtPreis = $articlePrice * $articleAmount;
                        $warengesamtpreis = $warengesamtpreis + $gesamtPreis;

                        echo "<td><center>" . $articleAmount . "x </center></td>";
                        echo "<td><center>" . $articleName . "</center></td>";
                        echo "<td><center>" . $gesamtPreis . "€ </center></td>";
                        
                        echo "<td><center> <a href='delete.php?articleId=$articleId'>entfernen</a></center></td>";
                        echo "</tr>";
                    }
                    echo "<tr><td></td><td><h3><center>Summe</center></h3></td><td><h3><center>" . $warengesamtpreis . "€ </center></h3></td></tr>"      
                ?>
                <tr><br></tr>
                <tr><br></tr>
            </table>
            <?php
                mysqli_close($conn);
            ?>

        </div>
        <br>
        <br>
        <br>
        <div class='row bg-secondary'>
            <center>
                <br>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="nl">
                <label class="form-check-label" for="nl">Ich möchte den kostenlosen Newsletter an meine Email gesendet bekommen.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="agb">
                <label class="form-check-label" for="agb">Ich habe die AGB's gelesen und stimme ihnen zu.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="ds">
                <label class="form-check-label" for="ds">Ich habe die Datenschutzrichtlinien gelesen und stimme ihnen zu.</label>
                <br>
                <form action="process.php" method="post">
                    <input type="submit" />
                </form>
                <br>
                <br>
            </center>
        </div>
    </div>
</body>

</html>
