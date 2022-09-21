    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Sushiio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        

    <!-- Nav section  -->

      <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg bg-dark">
         <div class="container-fluid">
           <a class="navbar-brand text-light" href="index.php">SUSHIIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
            <a class="nav-link text-light" href="customerinfo.php">Bestellen</a>
          </div>
         </div>
        </div>
      </nav>
     </div> <!-- end col  -->


     <!-- Header section  -->

      <div class="p-5 bg-image" class="img-fluid" style="background-image: url('./img/test2.png'); height: 310px;" >
      </div>

    <!-- Header text section  -->

        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>
              <!-- Get the right time and greet with switch case -->
              <?php
              $i= date("H");
              switch ($i) {
              case $i >= 6 &&  $i <= 12;
                echo "Goedemorgen";
                break;
              case $i >= 12 && $i <= 18;
                echo "Goedemiddag";
                break;
              case $i >= 18 && $i <= 24;
                echo "Goedenavond";
                break;
              case $i >= 24 && $i <= 6;
                echo "Goedenacht";
                default:
                }
                ?>, welkom bij <b>Sushiio</b></h2>
              <p class="text-secondary">
                Wij zijn gespecialiseerd in de Japanse keuken <br>
                Het woord "sushi" is afkomstig van "su", wat azijn betekent en "shi" -- rijst.
                </p>
              <p class="fw-bold text-muted">
                Vandaag dinsdag 23 augustus 2022 <br>
                Bezorgtijd vanaf nu:
                <?php
                $deliveryTime = strtotime('+1 hour');
                $time = date('H:i', $deliveryTime);
                echo $time
                 ?>
              </p>
            </div>
        </div>  <!-- end row  -->
        </div> <!-- end container  -->


<?php 




// l = Geeft de dag aan 
// j = Geeft datum aan
// S = Geeft st of nd aan het einde van het getal
// of = Van in het Nederlands
// F = Maand
// Y = Jaar
echo date("l jS \of F Y");


?>




        <!-- Cards section  -->

        <div class="container">
          <div class="row">

          <div class="col">
          <div class="card shadow border-0" style="">
          <img src="./img/testdel2.webp" class="card-img-top" alt="food delivery">
          <div class="card-body">
          <a href="customerinfo.php" class="stretched-link text-black" style="text-decoration:none">Bestel bij ons je sushi's.</a>
        </div>
      </div>
    </div>

          <div class="col">
          <div class="card shadow border-0" style="">
          <img src="./img/sushi-3.jpg" class="card-img-top" alt="a bowl of sushi">
          <div class="card-body">
          <a href="customerinfo.php" class="stretched-link text-black" style="text-decoration:none">Keuze uit verschillende soorten sushi's.</a>
        </div>
      </div>
          </div>
          </div>  <!-- end row  -->
        </div> <!-- end container  -->


        <div class="container-fluid bg-dark">
            <div class="row mt-5">

            <div class="col mt-3 text-light text-center">
              <p>
              <b>Contactgegevens</b><br>
                Restaurant Sushiio<br>
                Appelstraat 1<br>
                1111 AA Fruit<br>
                sushiio@mail.io<br>
                06-12345678<br>
              </p>
            </div>


            <div class="col mt-3 text-light text-center">
            <p>
              <b>Openingstijden</b><br>
                Maandag: Gesloten<br>
                Dinsdag: 16:00-22:00<br>
                Woensdag: 16:00-22:00<br>
                Donderdag: 16:00-22:00<br>
                Vrijdag: 15:00-22:00<br>
                Zaterdag: 15:00-22:00<br>
                Zondag: 15:00-22:00<br>
              </p>
            </div>

            </div>
        </div> 
 
        

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
    </html>