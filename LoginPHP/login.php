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
         
         <?php
         include 'db.php';
         if(isset($_POST['gesendet'])){
             $email= trim($_POST['email']);
             $passwort=$_POST['passwort'];
             $statement=$pdo->prepare('select * from users where email = :email');
             $result=$statement->execute([
                 'email'=>$email
             ]);
             $user=$statement->fetch();
             
             if($user !==false ){
               
                
                    if(password_verify($passwort, $user["passwort"])){
                          $_SESSION["user"]=$user["id"];
                 
                       echo "Benutzer ".$user["vorname"]." angemeldet";
                    }
                  else{
                 echo "Falsche Eingabe";
             }
               
             }
             else{
                 echo "Falsche Eingabe";
             }
             
         }
         
         ?>
<<<<<<< HEAD
=======
         
>>>>>>> 5d15d3e5c5c7742cf96815f865219df56a59f6d6
    </body>

</html>