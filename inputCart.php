<html>
    <head>
        <title>INSERT</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            $articleId = $_GET["articleId"];
        
            //conection data
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ikea";

            //create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
        
            //check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Mit Db verbunden<br>";
            
            //insert value
            $sql = "INSERT INTO cart VALUES('$articleId', 1);";

            //check delete
            if (mysqli_query($conn, $sql)) {
                echo "insert secessfully";
                header("Location: Main.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            mysqli_close($conn);   
        ?> 
    </body>
</html>