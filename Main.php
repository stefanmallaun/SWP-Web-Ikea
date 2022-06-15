<DOCTYPE html>
<html>
<?php
session_start();
?>
  <head>
    <title>Ikea</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css"/>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Ikea.css" />
    
  </head>
  <body>

    <div class='row bg-secondary'>


      <?php
        //website zum Anzeigen: http://localhost/ikea2/swp-web-ikea/Main.php

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
        }else{
          //echo "mit DB verbunden <br><br>";
        }
      ?>


      <div class="container-fluid">
        <div class="row">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="Main.html">
              <img src="Ikea_logo.svg.png" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav mr-auto">
                <div class="col-sm-2">
                  <li class="nav-item active">
                    <a class="nav-link" href="Main.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                </div>
                <div class="col-sm-2">
                  <li class="nav-item">
                    <a class="nav-link" href="Stuhle.html">Stühle</a>
                  </li>
                </div>
                <div class="col-sm-2">
                  <li class="nav-item">
                    <a class="nav-link" href="Betten.html">Betten</a>
                  </li>
                </div>
                <div class="col-sm-2">
                  <li class="nav-item">
                    <a class="nav-link" href="Tische.html">Tische</a>
                  </li>
                </div>
                <div class="col-sm-6">
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-             1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                      </svg>
                    </a>
                  </li>
                </div>
              </ul>
              <form class="form-inline">
                <input class="form-control mr-sm-1 align-center" type="search" placeholder="Artikel suchen" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Suche</button>
              </form>    
            </div>
          </nav>
        </div>



        <div class="row">
          <div class="row">
            <h3 class="display-6">Tische</h3>
            <div id = "1" class="col border border-primary rounded m-5 pb-2 ">
              <p class="txt">Erika</p>
              <div>
                <img class ="img" src="img/Tische/lisabo-tisch-schwarz__0737106_pe740884_s5.avif"  text-align: center > 
              </div>
              <p class="fbText">Preis: 210€ <br> Farben: 1</p>     
            </div>
            <div id = "2" class="col border border-primary rounded m-5 pb-2 ">
              <p class="txt">Enrico</p>
              <div>
                <img class ="img" src="img/Tische/moeckelby-tisch-eiche__0737107_pe740885_s5.avif"  text-align: center > 
              </div>
              <p class="fbText">Preis: 105€ <br> Farben: 2</p>
            </div>
            <div id = "3" class="col border border-primary rounded m-5 pb-2 ">
              <p class="txt">Erika</p>
              <div>
                <img class ="img" src="img/Tische/moerbylanga-tisch-eichenfurnier-braun-las-__0737110_pe740888_s5.avif"  text-align: center > 
              </div>
              <p class="fbText">Preis: 210€ <br> Farben: 3</p>
            </div>
            <div class="col-sm-12 text-right"><a href="#">mehr</a></div>
          </div>
          <hr>
          <div class="row">
            <h3 class="display-6">Betten</h3>
            <div id = "1" class="col border border-primary rounded m-5 pb-2 ">
              <p class="txt">Erika</p>
              <div>
                <img class ="img" src="img/Betten/hemnes-bettgestell-weiss-gebeizt__0637516_pe698353_s5.avif"  text-align: center > 
              </div>
              <p class="fbText">Preis: 210€ <br> Farben: 3</p>   
            </div>
            <div id = "2" class="col border border-primary rounded m-5 pb-2 ">
              <p class="txt">Enrico</p>
              <div>
                <img class ="img" src="img/Betten/gladstad-bettgestell-gepolstert-4-schubl-kabusa-hellgrau__1012373_pe828859_s5.avif"  text-align: center > 
              </div>
              <p class="fbText">Preis: 105€ <br> Farben: 1</p>
            </div>
            <div id = "3" class="col border border-primary rounded m-5 pb-2 ">
                <p> class="txt">Erika</p>
                <div>
                  <img class ="img" src="img/Betten/hauga-bettgestell-gepolstert-4-schubl-lofallet-beige__0916095_pe784969_s5.avif"  text-align: center > 
                </div>
                <p class="fbText">Preis: 210€ <br> Farben: 3</p>
            </div>
            <div class="col-sm-12 text-right"><a href="#">mehr</a></div>
          </div>
          <hr>
          <div class="row">
            <h3 class="display-6">  Stühle</h3>
            <div id = "1" class="col border border-primary rounded m-5 pb-2 ">
              <p class="txt">Erika</p>
              <div>
                <img class ="img" src="img/Stuhle/fanbyn-stuhl-weiss-drinnen-draussen__0587379_pe672586_s5.avif"  text-align: center > 
              </div>
              <p class="fbText">Preis: 210€ <br> Farben: 3</p>       
            </div>
            <div id = "2" class="col border border-primary rounded m-5 pb-2 ">
              <p class="txt">Enrico</p>
              <div>
                <img class ="img" src="img/Stuhle/tobias-stuhl-transparent-verchromt__0727342_pe735614_s5.avif"  text-align: center > 
              </div>
              <p class="fbText">Preis: 105€ <br> Farben: 1</p>   
            </div>
            <div id = "3" class="col border border-primary rounded m-5 pb-2 ">
              <p class="txt">Erika</p>
              <div>
                <img class ="img" src="img/Stuhle/tossberg-stuhl-metall-schwarz-grau__0661921_pe712124_s5.webp"  text-align: center > 
              </div>
              <p class="fbText">Preis: 210€ <br> Farben: 3</p>
            </div>
            <div class="col-sm-12 text-right"><a href="#">mehr</a></div>  
          </div>
        </div>
        <div class="row">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse " id="navbarColor01">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="#">Impressum </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">AGB</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Datenschutz</a>
                </li>
              </ul>       
            </div>
          </nav>
        </div>
      </div>
    </div>
  </body>
</html>
</DOCTYPE>