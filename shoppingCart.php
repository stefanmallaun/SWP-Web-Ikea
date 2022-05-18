<html>

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
        <div class='row'>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

            <?php
                //website zum Anzeigen: http://localhost/ikea/swp-web-ikea/shoppingCart.php
    
                $servername = "localhost";
                $username = "root";
                $passwort = "";
                $dbname = "ikea";
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
                echo"<center><h3><br> <br>" .mysqli_num_rows($result) . " Waren in Ihrem Warenkorb</h3></center>";
            ?>

            <br>
            <br>
            <table style="width:100%">

                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                    
                        $articleId = $row["articleId"];
                        $articleName = $row["articleName"];
                        $articlePrice = $row["articlePrice"];
                        $articleAmount = $row["articleAmount"];

                        echo "<td>" . $articleName . "</td>";
                        echo "<td>" . $articlePrice . "</td>";
                        echo "<td>" . $articleAmount . "</td>";
                        echo "<td> <a href='delete.php?personId=$articleId'>Löschen</a></td>";
                        echo "</tr>";
                    }      
                ?>
            </table>

            <?php
                mysqli_close($conn);
            ?>

        </div>
    </div>

</body>

</html>