<html>
    <head>
        <title>DELETE</title>
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
            
            //delete value
            $sql = "DELETE FROM cart WHERE articleId='$articleId'";

            //check delete
            if (mysqli_query($conn, $sql)) {
                echo "record deleted secessfully";
                header("Location: shoppingCart.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            mysqli_close($conn);   
        ?> 
    </body>
</html>