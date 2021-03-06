<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title >Anmeldung</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        
        
    </head>
    <?php
                //website zum Anzeigen: http://localhost/ikea/swp-web-ikea/shoppingCart.php
    
                

                
            ?>
    <?php 
        if( isset($_POST['gesendet'])){ //Die Funktion isset() prüft, ob eine Variable gesetzt ist, also deklariert werden muss und nicht NULL ist.
            
            if($_POST['passwort1']!=$_POST['passwort2']){ // $_POST ... assoziatives Araay 
                echo "Passwort stimmt nicht überein";
                return ;
            }
             include 'db.php';
       // var_dump($_POST); // alle Eingaben vom Formular werden ausgegeben
        $sql="insert into loogin(vorname, nachname,email, passwort) values(:vorname,:nachname,:email,:passwort)";// :vorname ...ist ein platzhalter
        $statement=$pdo->prepare($sql);
        $passwort=$_POST['passwort1']; // password_hash mach aus einem pw wie z.B. 123 zu F455235_# -> passwort kann in der datenbank nicht gesehen werden

        $statement->execute([ // execute sucht und setzt ein
            'vorname' => $_POST['vorname'], // wird übergeben
            'nachname' => $_POST['nachname'], 
            'email' => $_POST['email'],
            'passwort' => $passwort 
        ]);
      
        // passwort1 und 2 müssen gleich sein
        // email arf nicht vergeben sein
           echo "Benutzer eingetragen"; 
        }
       
        
        ?>
    <body>
        
        <div class="container">
            <div class="text-center"><h1 >Anmeldung</h1></div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
            <div class="card">
            <div class="card-body">
            <form action="#" method="post"> 
                <div class="mb-3">
                    <label for="vorname" class="from-label">Vorname</label> 
                    <input type="text" class="form-control" id="vorname" name="vorname" required>   
                </div>
                
                 <div class="mb-3">
                    <label for="nachname" class="from-label">Nachname</label> 
                    <input type="text" class="form-control" id="nachname" name="nachname" required>   
                </div>
                
                 <div class="mb-3">
                    <label for="email" class="from-label">E-Mail</label> 
                    <input type="email" class="form-control" id="email" name="email" required>   
                </div>
                
                 <div class="mb-3">
                    <label for="pw" class="from-label">Passwort</label> 
                    <input type="password" name="passwort1" class="form-control" id="pw">   
                </div>
                
                 <div class="mb-3">
                    <label for="pw2" class="from-label">Passwort wiederholen</label> 
                    <input type="password" name="passwort2" class="form-control" id="pw2">   
                </div>
                <div class="d-grid gap-2 mx-auto">
                <button type="submit" name="gesendet" class="btn btn-primary">Fertig</button>
                    </div>
            </form>
            </div>
            </div>
            </div>
            </div>
             
        </div>
        
        
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>