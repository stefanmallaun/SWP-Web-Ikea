<!DOCTYPE html>
<html>
<?php
session_start();
?>
    <head>
         <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title >Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      
    </head>
    
    <body>
     <div class="container">
            <div class="text-center"><h1 >Login</h1></div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
            <div class="card">
            <div class="card-body">
            <form action="#" method="post"> 
                   
                 <div class="mb-3">
                    <label for="email" class="from-label">E-Mail</label> 
                    <input type="email" class="form-control" id="email" name="email" required>   
                </div>
                
                 <div class="mb-3">
                    <label for="pw" class="from-label">Passwort</label> 
                    <input type="password" name="passwort" class="form-control" id="pw" required>   
                </div>
                
               
                <div class="d-grid gap-2 mx-auto">
                <button type="submit" name="gesendet" class="btn btn-primary">Abschicken</button>
                    </div>
            </form>
            </div>
            </div>
            </div>
            </div>
        </div>
        
         
          <?php
        
        $email = $_POST ["email"];
        $password2 = $_POST["passwort"];
        
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web3bg2";
   
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ( ! $conn) {
       die("Connection failed: " . mysqli_connect_error());
    }
    
        
        $check = mysqli_query($conn, "SELECT * FROM login WHERE email = '$email' AND password = '$password2'"); // checking data
        $row = mysqli_num_rows($check);
                
    
    //??berpr??fung des Passworts
    
        if ( ! $conn) {
       die("Connection failed: " . mysqli_connect_error());
    }
    
        
        $check = mysqli_query($conn, "SELECT * FROM login WHERE email = '$email' AND password = '$password2'"); // checking data
        $row = mysqli_num_rows($check);
                
    
    //??berpr??fung des Passworts
    if ($row>0) {
          header('Location: Spotify.html');
        
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     
        }

mysqli_close($conn);    
       ?>
mysqli_close($conn);    
       ?>
         
    </body>

</html>