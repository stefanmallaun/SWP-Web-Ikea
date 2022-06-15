
<html>
    <head>
        <title>Server Seite</title>
    </head>
    <body>
        <?php
            $articleId = $_GET["articleId"];
        
            //conection data
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "web3bg2";

            //create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
        
            //check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Mit Db verbunden<br>";
            
            //insert values
            $sql = "INSERT INTO cart (articleId, articleAmount) VALUES ($articleId,1)";

            //check insert
            if ($conn->query($sql) === TRUE) {
                echo "Eintrag ERFOLGREICH";
                header("Location: Main.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        ?> 
    </body>
</html>